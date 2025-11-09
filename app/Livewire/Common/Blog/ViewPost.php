<?php

namespace App\Livewire\Common\Blog;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class ViewPost extends Component
{
    public Post $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    #[Title('Post')]
    public function render()
    {
        return view('livewire.common.blog.view-post');
    }
}
