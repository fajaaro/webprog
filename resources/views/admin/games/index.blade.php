@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Manage Game</h1>
        <form action="{{ route('admin.games.index') }}" method="get">
            <p>Filter by Game Name</p>
            <input class="form-control w-25" type="search" placeholder="Search" aria-label="Search" name="q" value="{{ Request::query('q') }}">

            <p class="mt-2">Filter by Game Category</p>
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach($genres as $genre)
                            <div class="col-md-2">
                                <input type="checkbox" id="{{ $genre->name }}" name="genres[]" value="{{ $genre->id }}">
                                <label for="{{ $genre->name }}">{{ $genre->name }}</label>
                            </div>
                        @endforeach
                </div>
            </div>
            <button class="btn btn-outline-success px-2 mt-3" type="submit">Search</button>
        </form>

        <hr>

        <div class="row">
            @forelse ($games as $game)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <a href="{{ route('games.show', ['slug' => $game->slug]) }}">
                            <img src="{{ str_starts_with($game->image_url, 'https') ? $game->image_url : Storage::url($game->image_url) }}" class="card-img-top" alt="game image">
                        </a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight: bold;">{{ $game->title }}</p>
                            <p class="card-text">{{ $game->genre->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('games.show', ['slug' => $game->slug]) }}">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </a>
                                    <a href="{{ route('admin.games.edit', ['id' => $game->id]) }}">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </a>

                                </div>
                                <small class="text-muted">{{ formatRupiah($game->price) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>There are no games content can be showed right now</p>
                </div>
            @endforelse
            @if ($games->lastPage() > 1)
                <hr>
            @endif

            {{ $games->links() }}
        </div>
    </div>


@endsection
