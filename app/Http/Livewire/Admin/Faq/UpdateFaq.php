<?php

namespace App\Http\Livewire\Admin\Faq;

use Livewire\Component;

class UpdateFaq extends Component
{
    public $title, $content,$_id;
    public function mount($id)
    {
        $faq = Faq::findOrFail($id);
        $this->_id = $id;
        $this->title = $faq->title;
        $this->content = $faq->content;
    }

    public function render()
    {
        return view('livewire.admin.faq.update-faq')->layout('layout.admin-app');
    }

    public function save()
    {
        $faq = Faq::findOrFail($this->_id);;
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $faq->title = $this->title;
        $faq->content = $this->content;
        $result = $faq->save();
        if ($result) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'faq Update Successfully']
            );
            return redirect(route('admin.faq'));
        }
    }
}
