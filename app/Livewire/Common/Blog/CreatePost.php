<?php

namespace App\Livewire\Common\Blog;

use App\Models\Ad;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $post = null;
    public $ad = null;
    #[Url]
    public string $loc = 'blog';
    #[Url(as: 'p')]
    public ?string $paid;
    public ?string $body = '';
    public ?string $title;
    public ?string $category;
    public ?string $tags;
    public ?string $cta;
    public ?string $url;
    public $file;
    public bool $edit = false;

    public function mount($post = null)
    {
        if ($post) {
            $this->edit = true;
            if ($this->loc == 'blog') {
                $this->post = Post::findOrFail($post);
                // if ($this->post->user_id !== auth()->id() || auth()->user()->role != 'Admin') {
                //     abort(403, 'Unauthorized action.');
                // }
                $this->tags = $this->post->tags;
                $this->body = $this->post->body;
                $this->title = $this->post->title;
                $this->category = $this->post->category;
            } else {
                $this->ad = Ad::findOrFail($post);
                // if ($this->ad->user_id !== auth()->id() || auth()->user()->role != 'Admin') {
                //     abort(403, 'Unauthorized action.');
                // }
                $this->cta = $this->ad->cta;
                $this->url = $this->ad->url;
                $this->body = $this->ad->body;
                $this->title = $this->ad->title;
                $this->category = $this->ad->category;
            }
        }
    }

    public function createPost()
    {
        if (!request()->user()->profile?->is_verified) return;

        $rules = [
            'title' => 'required|string|max:191|unique:posts,title,' . ($this->post?->id ?? 'null'),
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
                if ($this->post->file && Storage::disk('public')->exists($this->post->file)) {
                    Storage::disk('public')->delete($this->post->file);
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
            'title' => 'required|string|max:191|unique:ads,title,' . ($this->ad?->id ?? 'null'),
            'category' => 'required|string|max:30',
            'body' => 'required|string',
            'url' => 'required|url|max:191',
            'cta' => 'required|max:20',
            'file' => $this->edit ? 'nullable|file|mimes:jpeg,png,jpg|max:5124' : 'required|file|mimes:jpeg,png,jpg|max:5124',
        ];

        $validated = $this->validate($rules);
        if ($this->edit) {
            if ($this->file) {
                $validated['file'] = $this->file->store('bulletin/ads', 'public');
                // $validated['is_video'] = str_starts_with($this->file->getMimeType(), 'video/');
                if ($this->ad->file && Storage::disk('public')->exists($this->ad->file)) {
                    Storage::disk('public')->delete($this->ad->file);
                }
            } else {
                unset($validated['file']);
            }

            if ($this->ad->status === 'declined') {
                $validated['status'] = 'pending';
            }

            $this->ad->update($validated);
            session()->flash('success', 'Ad updated successfully.');
            return $this->redirect(route('user.bulletin.list', ['loc' => 'ad']), navigate: true);
        } else {
            $validated['file'] = $this->file->store('bulletin/ads', 'public');
            // if (str_starts_with($this->file->getMimeType(), 'video/')) {
            //     $validated['is_video'] = true;
            // }
            request()->user()->ads()->create($validated);
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
