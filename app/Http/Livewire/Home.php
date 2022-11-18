<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $amount;
    public $wallet_type;
    public function render()
    {
        return view('livewire.home')->layout('layout.main');
    }

    public function invest()
    {
        $this->validate([
            'amount' => 'required',
            'wallet_type' => 'required',
        ]);

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'error',  'message' => 'Insufficient Balance on your Account']
        );
    }
}
