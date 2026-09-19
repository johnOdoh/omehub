<?php

namespace App\Livewire\Common\Blog;

use App\Models\Ad;
use App\Models\Post;
use Livewire\Attributes\Url;
use Livewire\Component;

class ViewPost extends Component
{
    public $post;
    #[Url]
    public $loc = 'blog';

    public function mount($post)
    {
        if ($this->loc == 'blog') {
            $this->post = Post::findOrFail($post);
        } else {
            $this->post = Ad::findOrFail($post);
        }
    }

    public function render()
    {
        return view('livewire.common.blog.view-post')->title($this->post->title);
    }
}