<?php

namespace App\Livewire\Common\Blog;

use App\Models\Post;
use Livewire\Component;

class ViewPost extends Component
{
    public Post $post;

    public function mount($post)
    {
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.common.blog.view-post');
    }
}
