<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Validator;

class PostController extends Controller
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
        //$cat=Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        // $data = array();
        $posts= Post::all();

        return view('admin.post',['posts'=>$posts]);
    }

    public function create()
    {
        $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.post_create', array('cat' => $cat, 'subcat'=>$subcat));
    }

    public function store(Request $request){

        // 'title', 'main_category_id', 'sub_category_id', 'short_description', 'feature_photo', 'detail_description', 'detail_photo', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'custom_field5'

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'short_description' => 'required',
            //'feature_photo' => 'required',
            'detail_description' => 'required',
            //'detail_photo' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }
       

        $structure= "upload/posts/";
        $feature_photo="";
        if($request->file('feature_photo')!=NULL){

          $file = $request->file('feature_photo');
          
          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){
            
            $feature_photo = $file->getClientOriginalName();
            $file->move($structure, $feature_photo);
          }
        }

        $detail_photo="";
        if($request->file('detail_photo')!=NULL){

          $file = $request->file('detail_photo');
          
          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){
            
            $detail_photo = $file->getClientOriginalName();
            $file->move($structure, $detail_photo);
          }
        }

        $arr=[
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => $request->sub_category_id,
                'short_description' => $request->short_description,
                'feature_photo' => $feature_photo,
                'detail_description' => $request->detail_description,
                'detail_photo' => $detail_photo,
                'custom_field1' => $request->custom_field1,
                'custom_field2' => $request->custom_field2,
                'custom_field3' => $request->custom_field3,
                'custom_field4' => $request->custom_field4,
                'custom_field5' => $request->custom_field5,
            ];
        
        $res=Post::create($arr);

        return redirect()->route('admin.post');
    }

    //update post by ASO
    public function edit($id)
    {   
        $posts = Post::find($id);
        $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.post_edit',compact('posts','cat','subcat'));
    }

    //store update post
    public function update($id, Request $request)
    {   
        // $post= Post::findOrFail($id);

         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'short_description' => 'required',
            //'feature_photo' => 'required',
            'detail_description' => 'required',
            //'detail_photo' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }
       

        $structure= "upload/posts/";
        $feature_photo="";
        if($request->file('feature_photo')!=NULL){

          $file = $request->file('feature_photo');
          
          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){
            
            $feature_photo = $file->getClientOriginalName();
            $file->move($structure, $feature_photo);
          }
        }

        $detail_photo="";
        if($request->file('detail_photo')!=NULL){

          $file = $request->file('detail_photo');
          
          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){
            
            $detail_photo = $file->getClientOriginalName();
            $file->move($structure, $detail_photo);
          }
        }

        $arr=[  
                'id'=>$id,
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => $request->sub_category_id,
                'short_description' => $request->short_description,
                'feature_photo' => $feature_photo,
                'detail_description' => $request->detail_description,
                'detail_photo' => $detail_photo,
                'custom_field1' => $request->custom_field1,
                'custom_field2' => $request->custom_field2,
                'custom_field3' => $request->custom_field3,
                'custom_field4' => $request->custom_field4,
                'custom_field5' => $request->custom_field5,
            ];
        $post = Post::findOrFail($id);
        // $input = $request->all();
        $post->fill($arr)->save();

        return redirect()->route('admin.post');
    }
    //show post by id
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post_show',compact('post'));
    }
    //delete  post
    public function delete($id)
    {
      $post = Post::find($id)->delete();
      return redirect()->back()->with('success','Post is successfully deleted!');
    }
}