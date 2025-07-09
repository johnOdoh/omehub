<?php

namespace App\Livewire\Common\Blog;

use Livewire\Component;

class PostList extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = request()->user()->posts()
            ->orderByDesc('created_at')
            ->get();
    }

    public function deletePost($postId)
    {
        $post = request()->user()->posts()->findOrFail($postId);
        $post->delete();
        session()->flash('deleted');
        $this->dispatch('postDeleted');
    }
    public function render()
    {
        return view('livewire.common.blog.post-list');
    }
}
