<?php

namespace App\Livewire\Common\Blog;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class PostList extends Component
{
    public $posts;
    #[Url]
    public $loc = 'blog';

    public function mount()
    {
        if ($this->loc == 'blog') {
            $this->posts = request()->user()->posts()->latest()->get();
        } else {
            $this->posts = request()->user()->ads()->latest()->get();
        }
    }

    public function deletePost($postId)
    {
        $post = request()->user()->posts()->findOrFail($postId);

        Storage::disk('public')->delete($post->file);

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