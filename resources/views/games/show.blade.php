@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('flash')

        <div class="row mb-3">
            <div class="col-md-8" id="col-video">
                <video width="100%" controls>
                    <source src="{{ str_starts_with($game->trailer_video_url, 'https') ? $game->trailer_video_url : Storage::url($game->trailer_video_url) }}" type="video/mp4">
                    <source src="{{ str_starts_with($game->trailer_video_url, 'https') ? $game->trailer_video_url : Storage::url($game->trailer_video_url) }}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-4" id="col-game-detail">
                <img src="{{ str_starts_with($game->image_url, 'https') ? $game->image_url : Storage::url($game->image_url) }}" class="w-100 mb-3">
                <h3>{{ $game->title }}</h3>
                <p>{{ $game->description }}</p>
                <p>
                    Genre : {{ $game->genre->name }}<br>
                    Release Date : {{ date_format(date_create($game->release_date), 'd F Y') }}<br>
                    Developer : {{ $game->developer }}<br>
                    Publisher : {{ $game->publisher }}
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex justify-content-between bg-white">
                <h5>Buy ({{ $game->title }})</h5>
                @auth
                    <form action="{{ route('set-cookie') }}" method="post">
                        @csrf
                        
                        <input type="hidden" name="game_id" value="{{ $game->id }}">
                        <button type="submit" class="btn btn-sm btn-secondary">{{ formatRupiah($game->price) }} | Add To Cart</button>
                    </form>
                @else
                    <a class="btn btn-sm btn-secondary" href="{{ route('login') }}">{{ formatRupiah($game->price) }} | Add To Cart</a>
                @endauth
            </div>
        </div>
        <h3 class="mt-3">About This Game</h3>
        <hr style="border: none; height: 3px; color: black; background-color: black;">
        <p>{!! $game->long_description !!}</p>
    </div>
@endsection
