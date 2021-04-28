<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Hash;

class ResetPasswordController extends Controller
{
    //
    public function create($token)
    {
        return view('reset-password.create',['token' =>$token]);
    }

    public function update($token)
    {
        $this->validate(request(), [
            'email' => 'required|email|exists:users',
            'password' => 'required|string|password|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatedPassword = DB::table('password_resets')
        ->where(['email','token'])
        ->first();

        if (!$updatedPassword) 
            return back()->withInput()->with('error', 'Invalid token');

            $user = User::where('email')
            ->update([ 'password'=>Hash::make('password') ]);

        DB::table('password_resets')->where(['email'=>email])->delete();

        return redirect('/login')->with('message','Your password has been changed');

    }
}
