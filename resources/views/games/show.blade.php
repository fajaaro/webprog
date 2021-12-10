@extends('layouts.app')

@section('content')
<div style="width: 100%;height: 60%;display: flex;justify-content: center">
    <div style="background-color: brown;width: 70%">
        {{-- tempat video --}}
        <video class="w-100 h-100" autoplay>
            <source src="movie.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        {{-- <img src="{{asset('pic1.jpg')}}" class="w-100 h-100"> --}}
    </div>
    <div style="width: 40%" class="px-4 ">
        <div style="width: 100%;display: flex;justify-content: center">
            {{-- tempat gambar --}}
            <img src="{{asset('pic1.jpg')}}" class="w-75 h-75">
        </div>
        <div>
            <h3>Game Name</h3>
            <p>Mini game description. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum iste vitae, dolore dolor mollitia doloribus ab quia aut aliquid, optio laboriosam hic provident odio dignissimos labore? Suscipit modi vitae ipsa.</p>
            <p>Genre : Action</p>
            <p>Release Date : 11 December 2020</p>
            <p>Developer : ABC production</p>
            <p>Publisher : abv dsads</p>
        </div>
    </div>
</div><br>

  {{-- yg ini dibungkus if kalo yg udh ad game ama blm --}}
  <div class="card" style="width: 100%;">
    <div class="card-body" style="display: flex;justify-content: space-between">
      <h5>Buy (nama game)</h5>
      <div>
        <button type="button" class="btn btn-sm btn-outline-secondary">Rp.100000 | Add To Cart</button>
      </div>

    </div>
  </div>

  <div>
    <h1>Obout This Game</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla possimus ad magnam at magni suscipit, cupiditate ea ullam unde sed odio reprehenderit labore eius maxime modi fuga sunt eligendi incidunt.</p>
  </div>

  <div style="height: 200px"></div>
@endsection
