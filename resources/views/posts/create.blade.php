@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    
    <h1>Create a post</h1>
<hr>
    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include('layouts.errors')
        
    </form>

</div>
@endsection