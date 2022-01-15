@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Update Game</h1>

        <form action="{{ route('admin.games.update', ['id' => $game->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Game Description') }}</label>
            <input placeholder="Write a single sentence about the game" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $game->description) }}" required autocomplete="description">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="long_description" class="col-md-4 col-form-label text-md-right">{{ __('Game Long Description') }}</label>
            <textarea placeholder="Write a few sentence about the game" id="long_description" type="text" class="form-control @error('long_description') is-invalid @enderror" name="long_description" required autocomplete="long_description">{{ old('long_description', $game->long_description) }}</textarea>
            @error('long_description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="genre_id" class="col-md-4 col-form-label text-md-right">{{ __('Game Category') }}</label>
            <select class="form-control w-100 h-25" required name="genre_id">
                <option value="">Select Category</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $game->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>

            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Game Price') }}</label>
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $game->price) }}" required autocomplete="price">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Game Cover Image URL') }}</label>
            <input id="image" type="file" accept="image/jpg" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $game->image) }}" required autocomplete="image">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="trailer_video" class="col-md-4 col-form-label text-md-right">{{ __('Game Trailer Video URL') }}</label>
            <input id="trailer_video" type="file" accept="video/webp" class="form-control @error('trailer_video') is-invalid @enderror" name="trailer_video" value="{{ old('trailer_video', $game->trailer_video) }}" required autocomplete="trailer_video">
            @error('trailer_video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <hr>

            <a href="{{ route('admin.games.index') }}" class="btn btn-light">
                {{ __('Cancel') }}
            </a>
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </form>
    </div>
@endsection
