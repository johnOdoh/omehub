<?php

namespace App\Livewire\Common\Blog;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class PostList extends Component
{
    #[Url]
    public $loc = 'blog';

    #[Computed]
    public function posts()
    {
        if ($this->loc == 'blog') {
            return request()->user()->posts()->latest()->get();
        } else {
            return request()->user()->ads()->latest()->get();
        }
    }

    public function deletePost($postId)
    {
        if ($this->loc == 'ad') {
            $post = request()->user()->ads()->findOrFail($postId);
        } else {
            $post = request()->user()->posts()->findOrFail($postId);
        }

        Storage::disk('public')->delete($post->file);

        $post->delete();
        session()->flash('success', ($this->loc == 'ad' ? 'Ad' : 'Post') . ' successfully deleted.');
        $this->dispatch('postDeleted');
    }

    #[Title('My Posts & Ads')]
    public function render()
    {
        return view('livewire.common.blog.post-list');
    }
}