<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function about()
    {
        return view('public.about');
    }

    public function service($service)
    {
        return view("public.services.$service");
    }

    public function stakeholders()
    {
        return view('public.stakeholders');
    }

    public function bulletin()
    {
        $loc = request()->query('loc', 'blog');
        $query = $loc == 'ads' ? Post::where('tags', null)
                               : Post::whereNot('tags', null);
        $posts = $query->latest()->paginate(3)->withQueryString();
        return view('public.blog', compact('posts', 'loc'));
    }

    public function bulletinSearch(Request $request)
    {
        $q = $request->query('q', config('app.name'));
        $loc = request()->query('loc', 'blog');
        $query = $loc == 'ads' ? Post::where('tags', null)
                               : Post::whereNot('tags', null);
        $posts = $query->where(function ($query) use ($q) {
            $query->where('title', 'like', "%$q%")
                ->orWhere('body', 'like', "%$q%")
                ->orWhere('description', 'like', "%$q%")
                ->orWhere('tags', 'like', "%$q%");
            })
            ->latest()
            ->paginate(1)
            ->withQueryString();
        return view('public.blog', compact('posts', 'loc'));
    }

    public function bulletinSingle(Post $post)
    {
        return view('public.blog-single', compact('post'));
    }

    public function contact()
    {
        return view('public.contact');
    }
    public function terms()
    {
        return view('public.terms');
    }

    public function privacy()
    {
        return view('public.privacy');
    }
}
