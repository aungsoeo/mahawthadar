<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function postContact(Request $request)
    {
    	$input = $request->all();

    	$rules = array(
		        'name' => 'required',                       
		        'email'=> 'required|email',    
		        'comment' => 'required'      
		    );

		
    	$validator = Validator::make($input, $rules);
    	
    	if ($validator->fails()) 
    	{
	        $messages = $validator->messages();
	        return redirect('/contact')
	            ->withErrors($validator);

	    } else 
	    {
	        // validation successful ---------------------------
	        dd($input);

	    }
    }
}
