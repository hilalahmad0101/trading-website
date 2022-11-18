<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBlog extends Component
{
    public $title,$content,$file;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.blog.add-blog')->layout('layout.admin-app');
    }

    public function save()
    {
        $post=new Post();
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'file' => 'required',
        ]);

        $filename="";
        if($this->file){
            $filename=$this->file->store('post','public');
        }

        $post->title=$this->title;
        $post->content=$this->content;
        $post->image=$filename;
        $result=$post->save();
        if($result){
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Post Add Successfully']
            );

            return redirect(route('admin.post'));
        }
    }
}
