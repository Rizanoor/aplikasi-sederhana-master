@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="{{ $name }}">
@endsection
  

