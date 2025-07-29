<?php

namespace App\Livewire\Common\Blog;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public Post $post;
    public $body = '';
    public $title;
    public $description;
    public $tags;
    public $edit = false;

    public function mount($post = null)
    {
        if ($post) {
            $this->post = $post;
            $this->body = $post->body;
            $this->title = $post->title;
            $this->description = $post->description;
            $this->tags = $post->tags;
            $this->edit = true;
        }
    }

    public function createPost()
    {
        if (!request()->user()->profile() || !request()->user()->profile()->is_verified) return;
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:200',
            'body' => 'required|string',
            'tags' => 'required|string|max:100'
        ]);
        $this->tags = preg_replace('/,\s*/', ', ', $this->tags); // Remove spaces from tags
        if ($this->edit) {
            $this->post->update($validated);
            session()->flash('updated');
        }else {
            request()->user()->posts()->create($validated);
            // $this->reset();
            session()->flash('created');
        }
    }

    public function render()
    {
        return view('livewire.common.blog.create-post');
    }
}
