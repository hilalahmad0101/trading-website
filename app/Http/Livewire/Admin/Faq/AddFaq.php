<?php

namespace App\Http\Livewire\Admin\Faq;

use App\Models\Faq;
use Livewire\Component;

class AddFaq extends Component
{
    public $title,$content;

    public function render()
    {
        return view('livewire.admin.faq.add-faq')->layout('layout.admin-app');
    }

    public function save()
    {
        $faq=new Faq();
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $faq->title=$this->title;
        $faq->content=$this->content;
        $result=$faq->save();
        if($result){
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'faq Add Successfully']
            );

            return redirect(route('admin.faq'));
        }
    }
}
