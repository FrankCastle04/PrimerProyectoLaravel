<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
   public function store()
   {
   $message = request()->validate([
   		'name' => 'required',
   		'email' => 'required|email',
   		'subject' => 'required',
   		'content' => 'required|min:3'
        ],  [
        	'name.required' => __('I need your name')
   	]);

   	Mail::to('franklamp09@gmail.com')->queue(new MessageReceived($message));

   	return back()with('status', 'Recibimos tu mensaje, te responderemos en 24 horas.');
   }
}


