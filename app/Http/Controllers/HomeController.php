<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\post;
use App\Tag;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $user = Auth::user();
        $categories = Category::orderBY('name','asc')->get();
        $tags = Tag::orderBY('name','asc')->get();
        return view('home', compact('categories', 'user','tags' ));
    }
}
