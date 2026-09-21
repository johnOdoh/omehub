<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\ProviderRequestMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $posts = $query->where('status', 'approved')
            ->latest()
            ->paginate(12)
            ->withQueryString();
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

    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::to(config('app.email'))->send(new ContactUs($request->name, $request->email, $request->message, $request->subject));
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }

    public function providerRequest(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mode' => 'required',
            'phone' => 'required|numeric',
            'capacity' => 'required'
        ]);
        Mail::to(config('app.email'))->send(new ProviderRequestMail($request->all()));
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function terms()
    {
        return view('public.terms');
    }

    public function privacy()
    {
        return view('public.privacy');
    }

    public function advertPolicy()
    {
        return view('public.advert-policy');
    }
}
