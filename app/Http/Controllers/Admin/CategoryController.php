<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Validator;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();

        // foreach($cat as $c){
        //   echo $c->title."<br>";
        //   $sub=$c->Categories;
            
        //   $this->getCategory($sub, 1);            
        // }

        // echo "<br>";
        // echo "<style> #left-panel{ position:relative !important } </style>";
        //exit;
        return view('admin.category', array('cat' => $cat));
    }

    function getCategory($sub, $c){
      $c++;
      foreach($sub as $s){
        $space="";
        for($i=0; $i<$c; $i++){
          $space=$space."&nbsp;&nbsp;";
        }
        echo $space." - ".$s->title."<br>";
        if($this->hasCategory($s->Categories)){
          $this->getCategory($s->Categories, $c);
        }
      }
    }

    function hasCategory($sub){
      if(sizeof($sub)>0){
        return true;
      }else{
        return false;
      }
    }

    public function create()
    {
        $cat = Category::pluck('title', 'id');
        return view('admin.category_create', array('cat' => $cat));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:category'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }
       
        $arr=[
                'title' => $request->title,
                'description' => ($request->description)? $request->description : '',
                'parent_id' => $request->parent_id,
                'main_or_sub' => ($request->parent_id==0)? 0 : 1
            ];
        
        $res=Category::create($arr);

        return redirect()->route('admin.category');
    }
}