<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $username, $password;
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layout.admin-login');
    }

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $admins = Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password]);
        if ($admins) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Login Successfully']
            );
        } else {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => 'Invalid username and password']
            );
        }
    }
}
