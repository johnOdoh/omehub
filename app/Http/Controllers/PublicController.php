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

    public function blog()
    {
        $posts = Post::latest()->paginate(1);
        return view('public.blog', compact('posts'));
    }

    public function blogSearch(Request $request)
    {
        $q = $request->query('q', config('app.name'));
        $posts = Post::where('title', 'like', "%$q%")
            ->orWhere('body', 'like', "%$q%")
            ->orWhere('description', 'like', "%$q%")
            ->orWhere('tags', 'like', "%$q%")
            ->latest()
            ->paginate(1)
            ->withQueryString();
        return view('public.blog', compact('posts'));
    }

    public function blogSingle(Post $post)
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
