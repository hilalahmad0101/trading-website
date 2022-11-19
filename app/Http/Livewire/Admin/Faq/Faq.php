<?php

namespace App\Http\Livewire\Admin\Faq;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $faqs=ModelsFaq::latest()->get();
        return view('livewire.admin.faq.faq',compact('faqs'))->layout('layout.admin-app');
    }


    public function delete($id)
    {
        $result=ModelsFaq::findOrFail($id)->delete();
        if($result){
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => 'Invalid username and password']
            );
        }
    }
}
