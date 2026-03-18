<link rel="stylesheet" href="/css/style.css">

<div class="navbar">
    <span>✎ My <span>Blog</span> App</span>
</div>

<div class="container">
    <h1>Create Post</h1>
    <div class="form-card">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label>Body:</label>
                <textarea name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-blue">Save</button>
        </form>
    </div>
</div>