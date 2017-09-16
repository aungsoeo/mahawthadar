<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\DonateEmail;

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
	       
	        $email= $request->get('email');
            $donator_name = $request->get('donator_name');
            $donation_title=$request->get('donation_title');
            $address    = $request->get('address');
            $phone = $request->get('phone');
            $detail = $request->get('detail');
            $photo = $request->get('photo');
            $date = $request->get('date');

            \Mail::to($email)->send(new DonateEmail);

            Mail::send('emails.donateEmailAdmin', ['email' => $email, 'donator_name'=>$donator_name, 'donation_title'=>$donation_title, 'address'=> $address, 'phone'=>$phone, 'detail'=>$detail, 'photo'=>$photo, 'date'=>$date], function ($m) use ($email,$donator_name,$donation_title,$address,$phone,$detail,$photo,$date) {
                    $m->from($email, $donator_name);
                    $m->to('admin@admin.com', 'admin')
                      ->subject('Receiving Mail From Donator : ' . $donator_name);
                });

	    }
        return redirect()->back()->with('success','Thanks for donation!');
	}    


}
