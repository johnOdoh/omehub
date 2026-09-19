<?php

namespace App\Livewire\Common\Blog;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\File;

class PostList extends Component
{
    public $posts;
    #[Url]
    public $loc = 'blog';

    public function mount()
    {
        if (!$this->loc) {
            $this->loc = 'blog';
        }
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $query = $this->loc == 'ad'
            ? request()->user()->posts()->whereNull('tags')
            : request()->user()->posts()->whereNotNull('tags');

        $this->posts = $query->latest()->get();
    }

    public function deletePost($postId)
    {
        $post = request()->user()->posts()->findOrFail($postId);
        
        if ($post->file && File::exists(public_path('storage/' . $post->file))) {
            File::delete(public_path('storage/' . $post->file));
        }

        $post->delete();
        $this->loadPosts();
        session()->flash('success', ($this->loc == 'ad' ? 'Ad' : 'Post') . ' successfully deleted.');
        $this->dispatch('postDeleted');
    }

    #[Title('My Posts & Ads')]
    public function render()
    {
        return view('livewire.common.blog.post-list');
    }
}
