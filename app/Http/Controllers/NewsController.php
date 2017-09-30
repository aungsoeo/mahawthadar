<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class NewsController extends Controller
{
    //
    public function index()
    {	
    	$posts= Post::where('main_category_id',2)->paginate(3);
        return view('news',compact('posts'));
    }

    public function show($id)
    {
    	$post = Post::findOrFail($id);
    	return view('show_post',compact('post'));
    }
}
