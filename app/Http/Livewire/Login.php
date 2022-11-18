<?php

namespace App\Http\Livewire;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.login')->layout('layout.main');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($user) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Login Successfully']
            );
            return redirect(route('home'));
        } else {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => 'Invalid Email and password']
            );
        }
    }
}
