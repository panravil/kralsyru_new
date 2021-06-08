<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;
// use App\Http\Requests;
use Mail;

class ContactController extends Controller
{
    public function index() {

		return view('pages.contact');

	}

	public function sendForm(Request $request) {
		$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

		$details = [
	        'email' => $request['email'],
	        'name' => $request['name'],
	        'message' => $request['message'],
	    ];
		
		// $to = 'info@savencia-fd.info';
		$to = $request['email'];
		
	    \Mail::to($to)->send(new \App\Mail\ContactMail($details));

	    //info@kralsyru.cz

        return '1';

	}
}
