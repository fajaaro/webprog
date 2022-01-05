@extends('layouts.app')

@section('content')
<div class="container-fluid">
  @include('flash')

  <div class="progress">
    <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Shopping Cart</div>

  </div>

  <h1>Shopping Cart</h1>
  @php
    $totalPrice = 0;
  @endphp
  @foreach ($games as $game)
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-md-4 p-0">
          <a href="{{ route('games.show', ['slug' => $game->slug]) }}">
            <img src="{{ str_starts_with($game->image_url, 'https') ? $game->image_url : Storage::url($game->image_url) }}" alt="Card image cap" class="w-100">
          </a>
        </div>
        <div class="col-md-6 py-4 bg-white">
          <h5 class="card-title">{{ $game->title }}</h5>
          <p class="card-text">{{ $game->genre->name }}</p>
          <p>{{ formatRupiah($game->price) }}</p>
          <button type="button" class="btn btn-danger remove-game-btn" game_id="{{ $game->id }}">Remove</button>
        </div>
      </div>
    </div>

    @php
      $totalPrice += $game->price;
    @endphp
  @endforeach

  <form action="{{ route('delete-cookie') }}" method="post" id="form-delete-cookie">
    @csrf
    @method('delete')

    <input type="hidden" name="game_id" id="game-id-input">
  </form>

  <hr>

  <div class="container-fluid card d-flex" style="width: 100%; flex-direction: row">
    <div class="d-flex justify-content-center w-100 h-100 py-2">
      <div class="card-body" style="width: 60%;">
        <h3 class="card-title">Total Price : {{ formatRupiah($totalPrice) }}</h3>
        <a href="#" class="btn btn-primary">Check Out</a>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let removeGameButtons = document.getElementsByClassName('remove-game-btn')
    Array.from(removeGameButtons).forEach(function(element) {
        element.addEventListener('click', function(e) {
        let gameId = e.target.attributes.game_id.value

        Swal.fire({
          title: 'Do you want to delete some game from your carts?',
          showCancelButton: true,
          confirmButtonText: 'Yes',
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('game-id-input').value = gameId

            document.getElementById('form-delete-cookie').submit()
          } else {
            Swal.fire('Changes are not saved', '', 'info')
          }
        })
      })
    })
  </script>
@endpush
