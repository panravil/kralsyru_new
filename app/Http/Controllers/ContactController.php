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

	public function sendForm() {
		$input = Request::all();

	    Mail::send('partials.email', ['data' => $input], function($message) use ($input){
	        $title = 'Dotaz z webu';
	        $message->to('info@savencia-fd.info', 'Savencia')->subject($title);
	        $message->from('info@kralsyru.cz', 'Král Sýrů');
	    });

	    //info@kralsyru.cz

        return '1';

	}
}
