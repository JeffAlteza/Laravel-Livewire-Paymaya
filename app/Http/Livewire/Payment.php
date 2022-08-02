<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Students;

class Payment extends Component
{
    public $name;
    public $email;

    public $message;
    

    public function proceed_payment($id)
    {
        $student = Students::find($id);
        $this->ids = $student->id;
        $this->name = $student->name;
        $this->email = $student->email;
    }


    public function render()
    {
        return view('livewire.payment');
    }
}
