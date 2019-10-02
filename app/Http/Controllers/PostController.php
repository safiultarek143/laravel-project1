<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;
use Session;
use DB;

class PostController extends Controller

{
	public function __construct()
    {
        $this->middleware('auth');
    }

   public function store(request $request)
    {
    	$post = new post();
    	$post->title = $request->title;
    	$post->description = $request->description;
    	$post->category_id = $request->category_id;
    	$post->user_id = Auth::id();

    	$post->save();
    	return redirect('/home')->with('msg','Successfully Inserted');

    }

    public function category($id)
    {
    	$category = Category::find($id);
    	return view('category',compact('category'));
    }
}  
