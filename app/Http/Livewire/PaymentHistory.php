<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\payment_transactions;
use Livewire\WithPagination;

class PaymentHistory extends Component
{    
    public $search='';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $data = payment_transactions::where('fullname','like','%'.$this->search.'%')->orWhere('email','like','%'.$this->search.'%')->orWhere('transaction_id','like','%'.$this->search.'%')->paginate(10);
        return view('livewire.payment-history',compact('data'));
    }
}
