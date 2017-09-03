<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class DonationController extends Controller
{
    //
    public function index()
    {
        return view('donation');
    }

    public function donate()
    {
    	return view('donate');
    }

    public function postdonate(Request $request)
    {	
    	$input = $request->all();

    	$rules = array(
		        'donator_name' => 'required',
		        'donation_title'=>'required',                       
		        'email'=> 'required|email',    
		        'detail' => 'required',
		        'date' => 'required'        
		    );

		
    	$validator = Validator::make($input, $rules);
    	
    	if ($validator->fails()) 
    	{
	        $messages = $validator->messages();
	        return redirect('donation/donate')
	            ->withErrors($validator);

	    } else 
	    {
	        // validation successful ---------------------------
	        dd($input);

	    }
	}    


}
