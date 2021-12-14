@extends('layouts.app')

@section('content')
    @php
        $user = Auth::user();
    @endphp

    <div class="container-fluid">
        <h1>Top Games</h1>

        <div class="row justify-content-center">
            @foreach ($games as $game)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <a href="{{ route('games.show', ['id' => $game->id]) }}">
                            <img src="{{ str_starts_with($game->image_url, 'https') ? $game->image_url : Storage::url($game->image_url) }}" class="card-img-top" alt="game image">                            
                        </a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight: bold;">{{ $game->title }}</p>
                            <p class="card-text">{{ $game->genre->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('games.show', ['id' => $game->id]) }}">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </a>
                                    @if ($user && $user->inRole('member'))
                                      <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                    @endif
                                </div>
                                <small class="text-muted">{{ formatRupiah($game->price) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        {{ $games->links() }}        
    </div>
@endsection
