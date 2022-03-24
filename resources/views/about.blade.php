@extends('layouts.main')

@section('container')

  <section class="gambar">
    <div class="container">
      <div class="row text-center mt-3">
        <div class="col">
          <h1>Halaman Gallery</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mt-5">
          <div class="candi" data-tilt>
            <h5 class="candi-name text-center mb-2">Meta</h5>
            <img src="{{ asset('img/image-removebg-preview.png') }}" class="candi-game" alt="game">
            <a href="#" class="btn btn-light show">Show</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mt-5">
          <div class="candi" data-tilt>
            <h5 class="candi-name text-center mb-2">Meta</h5>
            <img src="{{ asset('img/image-removebg-preview.png') }}" class="candi-game" alt="game">
            <a href="#" class="btn btn-light show">Show</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mt-5">
          <div class="candi" data-tilt>
            <h5 class="candi-name text-center mb-2">Meta</h5>
            <img src="{{ asset('img/image-removebg-preview.png') }}" class="candi-game" alt="game">
            <a href="#" class="btn btn-light show">Show</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('after-style')
<style>
* {
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

.candi {
  position: relative;
  background-color: #198754;
  border-radius: 20px;
  height: 500px;
  transform-style: preserve-3d;
}

.candi::before {
  content: "Game";
  position: absolute;
  color: #fff;
  font-size: 5em;
  font-weight: bold;
  font-style: italic;
  top: 30px;
  left: 50%;
  transform: translate(-50%, 0);
  opacity: 0.3;
  opacity: 0;
  transition: 0.5s;
}

.candi:hover::before {
  left: 50%;
  transform: translate(-50%, 0);
  opacity: 0.3;
}

.candi-name {
  position: absolute;
  top: 0;
  width: 100%;
  color: #fff;
  text-align: center;
  font-size: 2em;
  opacity: 0;
  transform: translate(0, 0);
  transition: 0.5s;
}

.candi:hover .candi-name {
  top: 20px;
  opacity: 1;
}

.show {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%, 0);
  opacity: 0;
  transition: 0.5s;
}

.candi:hover .show {
  opacity: 1;
  bottom: 20px;
}

.candi-game {
  position: absolute;
  top: 10px;
  left: 50%;
  transform: translate3d(-50%, 50%, 100px);
  max-width: 300px;
}

.candi:hover .candi-game {
  transform: translate3d(-50%, 50%, 100px) scale(1.2);
  transition: 0.5s;
}
</style>
    
@endpush
  

