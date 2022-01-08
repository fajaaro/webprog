@extends('layouts.app')

@push('styles')
    <style>
        #btn-add {
            position: absolute;
            right: 0;
            bottom: 0;
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 100%;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        @include('flash')

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
                                <input type="checkbox" id="{{ $genre->name }}" name="genres[]" value="{{ $genre->id }}" {{ Request::query('genres') && in_array($genre->id, Request::query('genres')) ? 'checked' : '' }}>
                                <label for="{{ $genre->name }}">{{ $genre->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-success mt-3" type="submit">Search</button>
                </div>
            </div>
        </form>

        <hr>

        <div class="row">
            @forelse ($games as $game)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <a href="{{ route('games.show', ['slug' => $game->slug]) }}">
                            <img src="{{ str_starts_with($game->image_url, 'https') ? $game->image_url : Storage::url($game->image_url) }}" class="card-img-top" alt="game image" style="height: 200px;">
                        </a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight: bold;">{{ $game->title }}</p>
                            <p class="card-text">{{ $game->genre->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="{{ route('admin.games.edit', ['id' => $game->id]) }}" class="btn btn-sm btn-info">
                                        Update
                                    </a>                                    
                                    <button class="btn btn-sm btn-danger remove-game-btn" game_id="{{ $game->id }}">
                                        Delete
                                    </button>
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

    <form action="{{ route('admin.games.delete') }}" method="post" id="form-delete-game">
        @csrf
        @method('delete')

        <input type="hidden" name="game_id" id="game-id-input">
    </form>

    <a id="btn-add" class="btn btn-primary" href="{{ route('admin.games.create') }}">+</a>
@endsection

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let removeGameButtons = document.getElementsByClassName('remove-game-btn')
        Array.from(removeGameButtons).forEach(function(element) {
            element.addEventListener('click', function(e) {
                let gameId = e.target.attributes.game_id.value

                Swal.fire({
                    title: 'Are you sure want to delete game?',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('game-id-input').value = gameId

                        document.getElementById('form-delete-game').submit()
                    } else {
                      Swal.fire('Changes are not saved', '', 'info')
                    }
                })
            })
        })
    </script>
@endpush