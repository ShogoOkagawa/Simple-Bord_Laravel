@extends('layouts.layouts')

@section('title', 'Simple Bord')

@section('content')

@if (session('message'))
  {{ session('message') }}
@endif

{{ $post->title }}
{{ $post->content }}

<a href="/posts/{{ $post->id }}/edit">Edit</a> 
<a href="/posts">Top</a> 
@endsection
