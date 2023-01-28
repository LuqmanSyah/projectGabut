<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(4)->get();
        return view('page.index', compact('posts'));
    }

    public function posts()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('page.posts', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('page.show', compact('post'));
    }

    public function profile()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('page.profile.index', compact('posts'));
    }

    public function post()
    {
        return view('page.profile.post');
    }

    public function login()
    {
        return view('authenticate.login');
    }

    public function register()
    {
        return view('authenticate.register');
    }
}
