<?php

namespace App\Http\Livewire\Payout;

use Livewire\Component;

class Payout extends Component
{
    public $showModal = false;
    public $detail = false;
    public $title;

    public $amount;
    public $wallet_type;
    public function render()
    {
        return view('livewire.payout.payout')->layout('layout.app');
    }

    public function showModel($title)
    {
        $this->title = $title;
        $this->showModal = true;
    }

    public function hideModal()
    {
        $this->title = "";
        $this->showModal = false;
    }

    public function nextStep()
    {
        $this->validate([
            'amount'=>'required',
            'wallet_type'=>'required',
        ]);
        session()->flash('error', 'Insufficient Balance');
    }
}
