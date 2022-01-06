@extends('layouts.app')

@section('content')
  <div>
    <h1>Manage Game</h1>
    <h6>Filter by Game Name</h6>
    <form class="">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width: 300px" > <br>
      <h6>Filter by Game Category</h6>
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-2">
              <input type="checkbox" id="horror" name="horror" value="horror">
              <label for="horror">Horror</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="adventure" name="adventure" value="adventure">
              <label for="adventure">Adventure</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="action" name="action" value="action">
              <label for="action">Action</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="puzzle" name="puzzle" value="puzzle">
              <label for="puzzle">Puzzle</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="strategy" name="strategy" value="strategy">
              <label for="strategy">Strategy</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
                <input type="checkbox" id="mmo" name="mmo" value="mmo">
                <label for="roleplaying">Role-Playing</label>
              </div>
              <div class="col-md-2">
                <input type="checkbox" id="simulation" name="simulation" value="simulation">
                <label for="simulation">Simulation</label>
              </div>
              <div class="col-md-2">
                  <input type="checkbox" id="sport" name="sport" value="sport">
                  <label for="sport">Sport</label>
                </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-outline-success px-2 mt-3" type="submit">Search</button>
    </form>
  </div>
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

<br><br>

@endsection
