<?php

namespace App\Livewire\Common\Blog;

use Livewire\Component;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\File;

class PostList extends Component
{
    public $posts;
    #[Url]
    public $loc;

    public function mount()
    {
        $query = $this->loc == 'ad' ? request()->user()->posts()->where('tags', null)
                                    : request()->user()->posts()->whereNot('tags', null);
        $this->posts = $query->latest()->get();
    }

    public function deletePost($postId)
    {
        $post = request()->user()->posts()->findOrFail($postId);
        $post->delete();
        File::delete(public_path('storage/'.$post->file));
        session()->flash('deleted');
        $this->dispatch('postDeleted');
    }
    public function render()
    {
        return view('livewire.common.blog.post-list');
    }
}
