<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
class GalleryController extends Controller
{
    //
    public function index()
    {
        $posts= Post::where('main_category_id',11)->paginate(3);
        return view('gallery',compact('posts'));
    }
}
