<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $firstname,
        $lastname,
        $email,
        $username,
        $phone_code,
        $phone,
        $password,
        $password_confirmation;

    public function render()
    {
        return view('livewire.register')->layout('layout.main');
    }

    public function register()
    {
        $user = new User();
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required',
            'phone' => 'required',
        ]);
        if ($this->password != $this->password_confirmation) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => 'Password and confirm password are not match']
            );
        } else {
            $user->first_name = $this->firstname;
            $user->last_name = $this->lastname;
            $user->email = $this->email;
            $user->username = $this->username;
            $user->phone = $this->phone_code.$this->phone;
            $user->password = Hash::make($this->password);
            $result=$user->save();
            if($result){
                $this->dispatchBrowserEvent(
                    'alert',
                    ['type' => 'success',  'message' => 'Account create successfully']
                );
                return redirect(route('login'));
            }else{
                $this->dispatchBrowserEvent(
                    'alert',
                    ['type' => 'error',  'message' => 'Server problem']
                );
            }
        }
    }
}
