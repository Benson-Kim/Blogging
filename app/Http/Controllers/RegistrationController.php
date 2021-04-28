<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        // create and save the user
        
        // $user  = User::create(request(['name', 'email','password']));

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        // sign them in
        auth()->login($user);

        // redirect to a page
        return redirect()->home();
    }
}
