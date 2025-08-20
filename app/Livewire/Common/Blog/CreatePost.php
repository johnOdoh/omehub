<?php

namespace App\Livewire\Common\Blog;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;
    public Post $post;
    #[Url]
    public $loc;
    #[Url(as: 'p')]
    public $paid;
    public $body = '';
    public $title;
    public $description;
    public $tags;
    public $file;
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
            'title' => 'required|string|max:191',
            'description' => 'required|string|max:200',
            'body' => 'required|string',
            'tags' => 'required|string|max:100',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $this->tags = preg_replace('/,\s*/', ', ', $this->tags); // Remove spaces from tags
        if ($this->edit) {
            $this->post->update($validated);
            session()->flash('updated');
        } else {
            $validated['file'] = $this->file->store('bulletin/posts', 'public');
            request()->user()->posts()->create($validated);
            $this->resetExcept('edit', 'post', 'loc');
            session()->flash('success', 'Post created successfully.');
            $this->dispatch('clear');
        }
    }

    public function createAd()
    {
        if (!request()->user()->profile() || !request()->user()->profile()->is_verified) return;
        $validated = $this->validate([
            'title' => 'required|string|max:191',
            'description' => 'required|string|max:200',
            'body' => 'required|string',
            'file' => 'required|file|mimes:jpeg,png,jpg,mp4,avi,mov|max:5120',
        ]);
        if ($this->edit) {
            $this->post->update($validated);
            session()->flash('updated');
        } else {
            $validated['file'] = $this->file->store('bulletin/ads', 'public');
            if (str_starts_with($this->file->getMimeType(), 'video/')) {
                $validated['is_video'] = true;
            }
            request()->user()->posts()->create($validated);
            $this->resetExcept('edit', 'post', 'loc');
            session()->flash('success', 'Ad created successfully.');
            $this->dispatch('clear');
        }
    }

    #[On(event: 'paid')]
    public function show()
    {
        session()->flash('success', 'Payment made successfully.');
        $this->paid = null;
    }

    public function render()
    {
        return view('livewire.common.blog.create-post');
    }
}
