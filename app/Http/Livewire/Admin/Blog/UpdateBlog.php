<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateBlog extends Component
{
    public $title,$content,$file,$old_file,$_id;
    use WithFileUploads;

    public function mount($id)
    {
        $post=Post::findOrFail($id);
        $this->_id=$id;
        $this->title=$post->title;
        $this->content=$post->content;
        $this->old_file=$post->image;
    }
    public function render()
    {
        return view('livewire.admin.blog.update-blog')->layout('layout.admin-app');
    }

    public function save()
    {
        $post=Post::findOrFail($this->_id);
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $filename="";
        if($this->file){
            $filename=$this->file->store('post','public');
        }else{
            $filename=$this->old_file;
        }

        $post->title=$this->title;
        $post->content=$this->content;
        $post->image=$filename;
        $result=$post->save();
        if($result){
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Post Update Successfully']
            );

            return redirect(route('admin.post'));
        }
    }
}
