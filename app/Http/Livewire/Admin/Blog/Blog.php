<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Post;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $posts=Post::latest()->get();
        return view('livewire.admin.blog.blog',compact('posts'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        $post=Post::findOrFail($id)->delete();
        if($post){
            
        }
    }
}
