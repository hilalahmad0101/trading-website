<?php

namespace App\Http\Livewire;

use App\Models\Transfer as ModelsTransfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Transfer extends Component
{
    public $email, $wallet_type, $amount, $password;
    public function render()
    {
        return view('livewire.transfer')->layout('layout.app');
    }


    public function save()
    {
        $transfer = new ModelsTransfer();
        $this->validate([
            'email' => 'required|email',
            'wallet_type' => 'required',
            'amount' => 'required',
            'password' => 'required'
        ]);

        $transfer->email = $this->email;
        $transfer->user_id = Auth::user()->id;
        $transfer->wallet_type = $this->wallet_type;
        $transfer->amount = $this->amount;
        $transfer->password = Hash::make($this->password);
        $result = $transfer->save();
        if ($result) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Transfer Successfully']
            );

            $this->email = "";
            $this->wallet_type = "";
            $this->amount = "";
            $this->password = "";
        }
    }
}
