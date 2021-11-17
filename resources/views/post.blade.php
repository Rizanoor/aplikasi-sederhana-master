@extends('layouts.main')

@section('container')
    <h2 class="mb-3"> {{ $post->title }}</h2>

    <p>By. 
      <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> 
      in
      <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
      {{ $post->category->name }}</a></p>

    {!! $post->body !!}

  <br>
  <a href="/posts" class="btn btn-primary mt-3">Back to Blog</a>

@endsection
