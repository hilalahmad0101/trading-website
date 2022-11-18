<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $fullname,$email,$subject,$message;
    public function render()
    {
        return view('livewire.contact')->layout('layout.main');
    }

    public function sendMessage()
    {
        $validate=$this->validate([
            'fullname' =>'required',
            'email' =>'required|email',
            'subject' =>'required',
            'message' =>'required',
        ]);

        $result=ModelsContact::create($validate);
        if($result){
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Message Send Successfully']
            );
            
            $this->fullname="";
            $this->email="";
            $this->subject="";
            $this->message="";
        }else{
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Server problem']
            );
        }

    }
}
