<?php

namespace App\Http\Livewire\Invest;

use Livewire\Component;

class InvestHistory extends Component
{
    public function render()
    {
        return view('livewire.invest.invest-history')->layout('layout.app');
    }
}
