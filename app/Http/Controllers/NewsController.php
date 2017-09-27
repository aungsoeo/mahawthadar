<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class NewsController extends Controller
{
    //
    public function index()
    {	
    	$posts= Post::all();
        return view('news',compact('posts'));
    }
}
