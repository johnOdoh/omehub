<?php

namespace App\Livewire\Common\Blog;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\File;

class CreatePost extends Component
{
    use WithFileUploads;

    public ?Post $post = null;
    #[Url]
    public $loc;
    #[Url(as: 'p')]
    public $paid;
    public $body = '';
    public $title;
    public $category;
    public $tags;
    public $description;
    public $file;
    public $edit = false;

    public function mount($post = null)
    {
        if ($post) {
            $this->post = $post instanceof Post ? $post : Post::findOrFail($post);

            if ($this->post->user_id !== auth()->id()) {
                abort(403, 'Unauthorized action.');
            }

            $this->body = $this->post->body;
            $this->title = $this->post->title;
            $this->category = $this->post->category;
            $this->tags = $this->post->tags;
            $this->edit = true;

            if (!$this->loc) {
                $this->loc = empty($this->post->tags) ? 'ad' : 'blog';
            }
        } else {
            if (!$this->loc) {
                $this->loc = 'blog';
            }
        }
    }

    public function createPost()
    {
        if (!request()->user()->profile?->is_verified) return;

        $rules = [
            'title' => 'required|string|max:191',
            'category' => 'required|string|max:30',
            'body' => 'required|string',
            'tags' => 'required|string|max:100',
            'file' => $this->edit ? 'nullable|image|mimes:jpeg,png,jpg|max:5120' : 'required|image|mimes:jpeg,png,jpg|max:5120',
        ];

        $validated = $this->validate($rules);
        $this->tags = preg_replace('/,\s*/', ', ', $this->tags);
        $validated['tags'] = $this->tags;
        $validated['slug'] = str($validated['title'])->slug();

        if ($this->edit) {
            if ($this->file) {
                $validated['file'] = $this->file->store('bulletin/posts', 'public');
                if ($this->post->file && File::exists(public_path('storage/' . $this->post->file))) {
                    File::delete(public_path('storage/' . $this->post->file));
                }
            } else {
                unset($validated['file']);
            }

            // Return to pending status for re-review if post was declined
            if ($this->post->status === 'declined') {
                $validated['status'] = 'pending';
            }

            $this->post->update($validated);
            session()->flash('success', 'Post updated successfully.');
            return $this->redirect(route('user.bulletin.list', ['loc' => 'blog']), navigate: true);
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
        if (!request()->user()->profile?->is_verified) return;

        $rules = [
            'title' => 'required|string|max:191',
            'description' => 'nullable|string|max:200',
            'body' => 'required|string',
            'file' => $this->edit ? 'nullable|file|mimes:jpeg,png,jpg,mp4,webm|max:20480' : 'required|file|mimes:jpeg,png,jpg,mp4,webm|max:20480',
        ];

        $validated = $this->validate($rules);
        $validated['slug'] = str($validated['title'])->slug();
        $validated['category'] = 'Advertisement';
        unset($validated['description']);

        if ($this->edit) {
            if ($this->file) {
                $validated['file'] = $this->file->store('bulletin/ads', 'public');
                $validated['is_video'] = str_starts_with($this->file->getMimeType(), 'video/');
                if ($this->post->file && File::exists(public_path('storage/' . $this->post->file))) {
                    File::delete(public_path('storage/' . $this->post->file));
                }
            } else {
                unset($validated['file']);
            }

            if ($this->post->status === 'declined') {
                $validated['status'] = 'pending';
            }

            $this->post->update($validated);
            session()->flash('success', 'Ad updated successfully.');
            return $this->redirect(route('user.bulletin.list', ['loc' => 'ad']), navigate: true);
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

    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.common.blog.create-post');
    }
}