<?php

namespace App\Http\Livewire\Payout;

use Livewire\Component;

class PayoutHistory extends Component
{
    public function render()
    {
        return view('livewire.payout.payout-history')->layout('layout.app');
    }
}
