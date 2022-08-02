<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Login extends Component
{
    public $email;
    public $password;
    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user = User::where('email', $this->email)->first();
        
        if (!$user || !Hash::check($this->password, $user->password)) {
            session()->flash('error', 'Email or Password is incorrect');
            return;
        }
        auth()->login($user);
        $this->redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
