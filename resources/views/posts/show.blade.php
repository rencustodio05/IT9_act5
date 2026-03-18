<link rel="stylesheet" href="/css/style.css">

<div class="navbar">
    <span>✎ My <span>Blog</span> App</span>
</div>

<div class="container">
    <div class="post-card">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-blue">← Back</a>
    </div>
</div>