<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
@if (session('message'))
  {{ session('message') }}
@endif

{{ $post->title }}
{{ $post->content }}

<a href="/posts/{{ $post->id }}/edit">Edit</a> 
<a href="/posts">Top</a> 
</body>
</html>
