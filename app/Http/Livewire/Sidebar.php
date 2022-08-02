<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
   
    public function render()
    {
        return view('livewire.sidebar');
    }
    //logout
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
