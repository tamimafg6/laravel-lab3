{{-- resources/views/posts/index.blade.php --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>All Posts</title>
</head>
<body>
  <h1>All Posts</h1>
  @foreach($posts as $post)
    <div>
      <h2>
        <a href="{{ route('posts.show', $post) }}">
          {{ $post->title }}
        </a>
      </h2>
      <p>By {{ $post->author->name }}</p>
    </div>
  @endforeach
</body>
</html>
