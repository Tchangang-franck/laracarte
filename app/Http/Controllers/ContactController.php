<?php

namespace App\Http\Controllers;
use App\Models\message;

use App\Http\Requests\contactFormRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /** 
     * return the message view
    */
      
    public function create(){
        return view('message/contact');
      
    }

    /** 
     * store a message on a database
    */

    public function store(contactFormRequest $request){
        $message= message::create($request->only('name','email','message'));
        Mail::to(config('laracarte.admin_support_email') )->send(new ContactMessageCreated($message));
        return redirect()->route('_home-path')->with('success','Nous vous repondrons dans les plus bref delais !');
    }
}
