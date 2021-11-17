
@extends('layouts.main')

@section('container')
  <h1>Halaman Post Category : {{ $category }}</h1>
  <br>
    @foreach ($posts as $post)
      <article class="mb-4">
        <h3>
          <a href="/posts/{{ $post->slug }}">{{ $post->title }} </a></h3>
        <p>{{ $post->excerpt }}</p>
      </article>
  @endforeach

@endsection
  
