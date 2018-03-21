<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Emailcontactcontroller extends Controller
{
    //
    public function __construct(Request $request){

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        // echo("asdf");
        DB::insert('insert into contact_email (name, email, message) values (?, ?, ?)', [$request->input('name'), $request->input('email'), $request->input('message')]);
        return redirect('/#contact')->with('status', 'Thank you! Message was successfully sent to support email!');
    }
}