@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">

    <h1>{{ $post->title }}</h1>

    {{ $post->body }}

    <hr>

    <div class="commments">

    <li class="list-group">

    @foreach($post->comments as $comment)
    
        <strong>
            {{ $comment->created_at->diffForHumans() }}:
        </strong>        
            {{ $comment->body }} 
    </li>
    
    @endforeach

    </div>

    <div class="card">
        <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{ csrf_field() }} 

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
        </div>
    </div>
@include('layouts.errors')
</div>
@endsection