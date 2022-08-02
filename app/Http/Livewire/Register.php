<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    // validate email for every keystroke

    protected $rules = [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6'
    ];

    public function updated($email)
    {
        $this->validateOnly($email);
        
    }

    public function submit(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //validation for email if already exists
        $user = User::where('email',$this->email)->first();
        if($user){
            session()->flash('error_email','Email already taken');
            return;
        }
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        session()->flash('success', 'User created successfully');
        $this->resetInput();
    }

    public function resetInput(){
        $this->name = null;
        $this->email = null;
        $this->password = null;
    }
    
    public function back(){
        $this->resetInput();
        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
