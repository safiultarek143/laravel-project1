<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
   public function store(request $request)
    {
    	$post = new post();
    	$post->title = $request->title;
    	$post->description = $request->description;

    }
}
