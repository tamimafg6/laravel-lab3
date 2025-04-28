{{-- resources/views/posts/show.blade.php --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{ $post->title }}</title>
</head>
<body>
  <h1>{{ $post->title }}</h1>
  <p>By {{ $post->author->name }} ({{ $post->author->email }})</p>
  <div>{{ $post->content }}</div>

  <hr>
  <h3>Comments</h3>
  @foreach($post->comments as $comment)
    <div>
      <strong>{{ $comment->commenter_name }}:</strong>
      <p>{{ $comment->comment }}</p>
    </div>
  @endforeach

  <hr>
  <h3>Leave a Comment</h3>
  @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
  @endif

  <form method="POST" action="{{ route('comments.store', $post) }}">
    @csrf
    <div>
      <label>Name:</label><br>
      <input type="text" name="commenter_name" value="{{ old('commenter_name') }}">
      @error('commenter_name') <div style="color:red">{{ $message }}</div> @enderror
    </div>
    <div>
      <label>Comment:</label><br>
      <textarea name="comment">{{ old('comment') }}</textarea>
      @error('comment') <div style="color:red">{{ $message }}</div> @enderror
    </div>
    <button type="submit">Post Comment</button>
  </form>
</body>
</html>
