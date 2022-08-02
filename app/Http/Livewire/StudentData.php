<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Students;
use App\Models\payment_transactions;

use Aceraven777\PayMaya\PayMayaSDK;
use Aceraven777\PayMaya\API\Checkout;
use Aceraven777\PayMaya\Model\Checkout\Item;
use App\Libraries\PayMaya\User as PayMayaUser;
use Aceraven777\PayMaya\Model\Checkout\ItemAmount;
use Aceraven777\PayMaya\Model\Checkout\ItemAmountDetails;
use Livewire\WithPagination;

class StudentData extends Component
{
    public $ids;
    public $name;
    public $email;
    public $add_name;
    public $add_email;
    public $message;
    public function add_student()
    {
        $this->validate([
            'add_name' => 'required',
            'add_email' => 'required|email',
        ]);
        //validation for email if already exists
        $student_email = Students::where('email',$this->add_email)->first();
        if($student_email){
            session()->flash('error_email','Email already taken');
            
            return;
        }
        Students::create([
            'name' => $this->add_name,
            'email' => $this->add_email,
        ]);
        
        session()->flash('success', 'Student created successfully');
        $this->resetInput();
        $this->emit('student_added');
    }


    public function edit_student($id)
    {
        $student = Students::find($id);
        $this->ids = $student->id;
        $this->name = $student->name;
        $this->email = $student->email;
    }
    public function update_student()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $student_email = Students::where('id',$this->ids)->first();
        if($student_email->email != $this->email){
            $student_email = Students::where('email',$this->email)->first();
            if($student_email){
                session()->flash('error_email','Email already taken');
                return;
            }
        }
            Students::where('id',$this->ids)->update([
            'name' => $this->name,
            'email' => $this->email,
            ]);
            session()->flash('success', 'Student updated successfully');
            $this->resetInput();
            $this ->emit ('studentUpdated');
        
    }

    public function delete_student($id)
    {
        Students::where('id',$id)->delete();
        session()->flash('success', 'Student deleted successfully');
    }

    public function resetInput(){
        $this->name = null;
        $this->email = null;
    }

    public $search='';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $data = Students::where('name','like','%'.$this->search.'%')->orWhere('email','like','%'.$this->search.'%')->paginate(10);
        return view('livewire.student-data',compact('data'));
    }

    // ----------------- PAYMENT ----------------- //

    public $mobile_no;
    public $amount;
    public $payment_for;
    public $payment_method;

    public function proceed_payment($id )
    {
        $student = Students::find($id);
        $this->ids = $student->id;
        $this->name = $student->name;
        $this->email = $student->email;
    
    }

    public function checkout(){
        $paymaya_ref_no=uniqid();
        $ref_id=uniqid();
        while(payment_transactions::where('transaction_id',$ref_id)->first()){
            $ref_id=uniqid();
        }
       
            $data=[
                "fullname"=> $this->name,
                "email"=> $this->email,
                "mobile_no"=> $this->mobile_no,
                "amount"=> $this->amount,
                "payment_for"=> $this->payment_for,
                "payment_method"=> $this->payment_method,
                "paymaya_ref_no"=> $paymaya_ref_no,
                "transaction_id"=> $ref_id,
                "status"=> "Pending",
            ];
            $user= payment_transactions::create($data);

    PayMayaSDK::getInstance()->initCheckout(
        env('PAYMAYA_PUBLIC_KEY'),
        env('PAYMAYA_SECRET_KEY'),
        (\App::environment('production') ? 'PRODUCTION' : 'SANDBOX')
    );

    $payment= $this->payment_for;
    $amount= $this->amount;
    $mobile_no= $this->mobile_no;
    $email= $this->email;

    $sample_item_name = $payment;
    $sample_total_price = $amount;

    $sample_user_phone = $mobile_no;
    $sample_user_email = $email;
    
    $trans_id = $ref_id;

    // Item
    $itemAmountDetails = new ItemAmountDetails();
    $itemAmountDetails->tax = "0.00";
    $itemAmountDetails->subtotal = number_format($sample_total_price, 2, '.', '');
    $itemAmount = new ItemAmount();
    $itemAmount->currency = "PHP";
    $itemAmount->value = $itemAmountDetails->subtotal;
    $itemAmount->details = $itemAmountDetails;
    $item = new Item();
    $item->name = $sample_item_name;
    $item->amount = $itemAmount;
    $item->totalAmount = $itemAmount;

    // Checkout
    $itemCheckout = new Checkout();

    $user = new PayMayaUser(); 
    $user->contact->phone = $sample_user_phone;
    $user->contact->email = $sample_user_email;

    $itemCheckout->buyer = $user->buyerInfo();
    $itemCheckout->items = array($item);
    $itemCheckout->totalAmount = $itemAmount;
    $itemCheckout->requestReferenceNumber = $trans_id;
    $itemCheckout->redirectUrl = array(
        "success" => route('success_payment', ['id'=>$trans_id]),
        "failure" => route('failed_transaction', ['id'=>$trans_id]),
        "cancel" => url('returl-url/cancel'.$trans_id),
    );
    
    if ($itemCheckout->execute() === false) {
        $error = $itemCheckout::getError();
        dd($error);
        //return response()->json(['message' => $error['message']]);
    }

    if ($itemCheckout->retrieve() === false) {
        $error = $itemCheckout::getError();
        return response()->json(['message' => $error['message']]);
    }
    // return response()->json($itemCheckout->url);
    return redirect($itemCheckout->url);
        }


    public function success_payment($id){
        //update the status of the transaction to success
        $payment_transaction=payment_transactions::where('transaction_id',$id)->first();
        if($payment_transaction){
            $payment_transaction->status="success";
            $payment_transaction->save();
            return redirect('/dashboard');
        }else{  
            echo "failed update";
        }
    }

    public function failed_transaction($id){
        //update the status of the transaction to failed
        $payment_transaction=payment_transactions::where('transaction_id',$id)->first();
        if($payment_transaction){
            $payment_transaction->status="failed";
            $payment_transaction->save();
            return redirect('/dashboard');
        }else{  
            //return view('payment.failed');
            echo "failed update";
        }
    }
}

