<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{

    public $firstname,
        $lastname,
        $email,
        $username,
        $lang,
        $address,
        $image,
        $old_image,
        $phone;

    public $old_password,$new_password,$confirm_password;

    public $profile=true;
    public $password=false;

    use WithFileUploads;
    public function mount()
    {
        $users = User::findOrFail(Auth::user()->id);
        $this->firstname = $users->first_name;
        $this->lastname = $users->last_name;
        $this->email = $users->email;
        $this->username = $users->username;
        $this->lang = $users->lang;
        $this->address = $users->address;
        $this->old_image = $users->image;
        $this->phone = $users->phone;
    }

    public function render()
    {
        return view('livewire.profile')->layout('layout.app');
    }

    public function showTab($title)
    {
        if($title=='profile'){
           $this->profile=true;
           $this->password=false;
        }

        if($title=='password'){
            $this->profile=false;
            $this->password=true;
         }
    }
    public function updateProfile($title)
    {
        $users = User::findOrFail(Auth::user()->id);
        if ($title == 'image') {
            $this->validate([
                'image' => 'mimes:jpeg,jpg,png|required|max:10000',
            ]);

            $filename = "";
            if ($this->image) {
                $filename = $this->image->store('image', 'public');
            } else {
                $filename = $this->old_image;
            }

            $users->image = $filename;
            $result = $users->save();
            if ($result) {
                $this->dispatchBrowserEvent(
                    'alert',
                    ['type' => 'success',  'message' => 'Profile image update Successfully']
                );
            }
        }

        if ($title == 'data') {
            $users->first_name = $this->firstname;
            $users->last_name = $this->lastname;
            $users->username = $this->username;
            $users->lang = $this->lang;
            $users->address = $this->address;
            $result = $users->save();
            if ($result) {
                $this->dispatchBrowserEvent(
                    'alert',
                    ['type' => 'success',  'message' => 'Profile image update Successfully']
                );
            } else {
                $this->dispatchBrowserEvent(
                    'alert',
                    ['type' => 'error',  'message' => 'Server problem']
                );
            }
        }
    }


    public function changePassword()
    {
        $users = User::findOrFail(Auth::user()->id);

        $this->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        if (Hash::check($this->old_password, $users->password)) {
            if ($this->new_password != $this->confirm_password) {
                $this->dispatchBrowserEvent(
                    'alert',
                    ['type' => 'error',  'message' => 'Password and confirm password are not match']
                );
            } else {
                $users->password=Hash::make($this->new_password);
            }
        } else {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => 'Invalid Password']
            );
        }
    }
}
