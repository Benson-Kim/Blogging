<div class="blog-post">

    <a href="/posts/{{ $post->id }}">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
    </a>
    <p class="blog-post-meta">
        <a href="#"> {{ $post->user->name }}</a> on
        {{ $post->created_at->toFormattedDateString() }}
    
    </p>

    {{ $post->body }}

</div>