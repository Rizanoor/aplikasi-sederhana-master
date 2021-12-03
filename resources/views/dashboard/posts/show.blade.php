@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h2 class="mb-3"> {{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success">Back</a>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
    
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3" style="border-radius: 20px">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
    
    </div>
  </div>
</div>
@endsection