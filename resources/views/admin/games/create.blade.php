@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Create Game</h1>

        <form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Game Name') }}</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Game Description') }}</label>
            <input placeholder="Write a single sentence about the game" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="long_description" class="col-md-4 col-form-label text-md-right">{{ __('Game Long Description') }}</label>
            <textarea placeholder="Write a few sentence about the game" id="long_description" type="text" class="form-control @error('long_description') is-invalid @enderror" name="long_description" required autocomplete="long_description">{{ old('long_description') }}</textarea>
            @error('long_description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="genre_id" class="col-md-4 col-form-label text-md-right">{{ __('Game Category') }}</label>
            <select class="form-control w-100 h-25" required name="genre_id">
                <option value="">Select Category</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" {{ Request::old('genre_id') == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>

            <label for="developer" class="col-md-4 col-form-label text-md-right">{{ __('Game Developer') }}</label>
            <input id="developer" type="text" class="form-control @error('developer') is-invalid @enderror" name="developer" value="{{ old('developer') }}" required autocomplete="developer">
            @error('developer')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="publisher" class="col-md-4 col-form-label text-md-right">{{ __('Game Publisher') }}</label>
            <input id="publisher" type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" value="{{ old('publisher') }}" required autocomplete="publisher">
            @error('publisher')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Game Price') }}</label>
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Game Cover Image URL') }}</label>
            <input id="image" type="file" accept="image/jpg" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="trailer_video" class="col-md-4 col-form-label text-md-right">{{ __('Game Trailer Video URL') }}</label>
            <input id="trailer_video" type="file" accept="video/webp" class="form-control @error('trailer_video') is-invalid @enderror" name="trailer_video" value="{{ old('trailer_video') }}" required autocomplete="trailer_video">
            @error('trailer_video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="checkbox" id="is_adult_content" name="is_adult_content" {{ Request::old('is_adult_content') ? 'checked' : '' }}>
            <label for="is_adult_content" class="col-md-4 col-form-label text-md-right">{{ __('Only For Adult ?') }}</label>

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
