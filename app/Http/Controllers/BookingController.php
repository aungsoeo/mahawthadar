<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class BookingController extends Controller
{
    //
    public function index()
    {
        return view('book');
    }

    public function postbook(Request $request)
    {
    	$input = $request->all();

    	$rules = array(
		        'name' => 'required',
		        'fname'=>'required',                          
		        'passed_school'=> 'required',
		        'roll_no' => 'required',
		        'gender'=>'required',
		        'address'=>'required'        
		    );
  
    	$validator = Validator::make($input, $rules);
    	
    	if ($validator->fails()) 
    	{
	        $messages = $validator->messages();
	        return redirect('book')
	            ->withErrors($validator);

	    } else 
	    {
	        // validation successful ---------------------------
	        dd($input);

	    }
    }
}
