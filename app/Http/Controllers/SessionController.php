<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if (! auth()->attempt(request(['email','password'])))
        {
             return back()->withErrors([
                 'message' => 'Please check your credentials and try again'
             ]);
        }
        return redirect()->home();
    }

    public function destroy() //for logging out
    {
        auth()->logout();

        // redirect to  homepage
        return redirect()->home();
    }
}
