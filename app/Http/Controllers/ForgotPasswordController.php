<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Mail;
use DB;

class ForgotPasswordController extends Controller
{
    public function create()
    {
        return view('forget-password.create');
    }

    public function store()
    {
        $token = Str::random(60);

        $this->validate(request(), [
            'email' => 'required|string|email|exists:users',
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

       
       DB::table('password_resets')->insert(
           ['email','token','created_at']
       );

       Mail::send('verify',['token' =>$token], function($message) use ($request) 
       {
           $message -> from($request->email);
           $message ->to('bensonkimathi98@gmail.com');
           $message ->subject('Reset Password Notification');
       });

       return back()->with('message', 'We have emailed your password reset link!');
      
    }
    
}
