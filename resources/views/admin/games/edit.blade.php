@extends('layouts.app')

@section('content')
<h1>Edit Game</h1>
  <div style="width: 100%;height: 100%">
    <div>
        <form action="{{ route('admin.games.create') }}" method="POST">
            @csrf

            <label for="gamename" class="col-md-4 col-form-label text-md-right">{{ __('Game Name') }}</label>
            <input id="gamename" type="text" class="form-control @error('gamename') is-invalid @enderror" name="gamename" value="{{ old('gamename') }}" required autocomplete="gamename">
            @error('gamename')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="game_description" class="col-md-4 col-form-label text-md-right">{{ __('Game Description') }}</label>
            <input placeholder="Write a single sentence obout the game" id="game_description" type="text" class="form-control @error('game_description') is-invalid @enderror" name="game_description" value="{{ old('game_description') }}" required autocomplete="game_description">
            @error('game_description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="game_long_description" class="col-md-4 col-form-label text-md-right">{{ __('Game Long Description') }}</label>
            <textarea placeholder="Write a few sentence obout the game" id="game_long_description" type="text" class="form-control @error('game_long_description') is-invalid @enderror" name="game_long_description" value="{{ old('game_long_description') }}" required autocomplete="game_long_description"></textarea>
            @error('game_long_description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Game Category') }}</label>
            <select name="day" id="day" class="form-control w-100 h-25" required name="category">
                <option value="horror">Horror</option>
                <option value="adventure">Adventure</option>
                <option value="action">Action</option>
                <option value="puzzle">Puzzle</option>
                <option value="strategy">Strategy</option>
                <option value="sports">Sports</option>
                <option value="roleplaying">Role-Playing</option>
                <option value="simulation">Simulation</option>
            </select>

            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Game Price') }}</label>
            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="cover" class="col-md-4 col-form-label text-md-right">{{ __('Game Cover Image URL') }}</label>
            <input id="cover" type="text" class="form-control @error('cover') is-invalid @enderror" name="cover" value="{{ old('cover') }}" required autocomplete="cover">
            @error('cover')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Game Trailer Video URL') }}</label>
            <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" required autocomplete="video">
            @error('video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                <input type="checkbox" id="adult" name="adult" value="adult">
                <label for="adult">Only for Adult ?</label><br>

                <div class="row mt-3 d-flex ">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary ">
                            {{ __('Create Game') }}
                        </button>
                    </div>
                </div>
        </form>

    </div>
    <div style="height: 200px">

    </div>
  </div>
@endsection
