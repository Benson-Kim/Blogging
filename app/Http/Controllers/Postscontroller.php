<?php

namespace App\Http\Controllers;

use App\Posts;
use Carbon\Carbon;

class Postscontroller extends Controller
{
    
    public function __construct()
    {
        $this -> middleware('auth')->except(['index','show']);

    }
    
    public function index()
    {
        $posts = Posts::latest()
        // ->filter(request(['month', 'year']))
        ->get();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {

        // Form validation
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Posts(request(['title','body']))
        );
        
        return redirect('/');
    }

    public function show(Posts $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
