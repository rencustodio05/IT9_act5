<link rel="stylesheet" href="/css/style.css">

<div class="navbar">
    <span>&#9998; My <span>Blog</span> App</span>
</div>

<div class="container">
    <div class="page-header">
        <h1>Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-blue">+ Create New Post</a>
    </div>

    @if(session('success'))`
    <div class="success">{{ session('success') }}</div>
    @endif

    @foreach($posts as $post)
    <div class="post-card">
        <div class="post-number">Post #{{ $post->id }}</div>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->body }}</p>
        <div class="post-actions">
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-green">View</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-amber">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-red">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>