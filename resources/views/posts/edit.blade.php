<link rel="stylesheet" href="/css/style.css">

<div class="navbar">
    <span>✎ My <span>Blog</span> App</span>
</div>

<div class="container">
    <h1>Edit Post</h1>
    <div class="form-card">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label>Body:</label>
                <textarea name="body">{{ $post->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-amber">Update</button>
        </form>
    </div>
</div>