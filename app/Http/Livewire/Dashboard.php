<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\payment_transactions;

class Dashboard extends Component
{
    public $today_total;
    public $month_total;
    public $year_total;

    public $today;
    public $month;
    public $year;
    public function mount()
    {

        $this->today_total = payment_transactions::whereDate('created_at', today())->where('status', 'success')->sum('amount');
        $this->month_total = payment_transactions::whereMonth('created_at', now()->month)->where('status', 'success')->sum('amount');
        $this->year_total = payment_transactions::whereYear('created_at', now()->year)->where('status', 'success')->sum('amount');

        $this-> today = date('F d, Y');
        $this-> month = date('F');
        $this-> year = date('Y');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
