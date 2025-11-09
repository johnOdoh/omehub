<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\File;

class Bulletin extends Component
{
    #[Url]
    public $loc;
    public $current = 'All';

    public function updatePost($id, $action)
    {
        if (!in_array($action, ['approved', 'declined'])) return;
        $post = Post::find($id);
        $post->status = $action;
        $post->save();
        session()->flash('message', 'Post Successfully Approved!');
    }

    public function deletePost(Post $post)
    {
        File::delete(public_path('storage/'.$post->file));
        $post->delete();
        session()->flash('message', 'Post Successfully Deleted!');
    }

    #[Title('Posts')]
    public function render()
    {
        $query = $this->loc == 'ad' ? Post::where('tags', null)
                                    : Post::whereNot('tags', null);
        if ($this->current != 'All') {
            $query->where('status', $this->current);
        }
        $posts = $query->latest()->paginate(20)->withQueryString();
        return view('livewire.admin.bulletin', [
            'posts' => $posts
        ]);
    }
}
