@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <br><br>

                        <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                        @error('full_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <br><br>

                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <br><br>

                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                        <select name="role" id="role" required>
                            <option value="member">Member</option>
                            <option value="admin">Admin</option>
                        </select>

                        <br><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3 ">
                                <button type="submit" class="btn btn-primary col-md-11">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <a class="btn btn-link offset-md-4" href="{{ route('password.request') }}">
                            {{ __('Already Have Account?') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="card-group w-100 h-100">
    <div class="card">
      <div class="card-body">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <br>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br><br>

                    <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                    @error('full_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br><br>

                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br><br>

                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                    <select name="role" id="role" required>
                        <option value="member">Member</option>
                        <option value="admin">Admin</option>
                    </select>

                    <br><br>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3 ">
                            <button type="submit" class="btn btn-primary col-md-11">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    <a class="btn btn-link offset-md-4" href="{{ route('password.request') }}">
                        {{ __('Already Have Account?') }}
                    </a>
                </form>
            </div>
        </div>
      </div>
    </div>
    <div class="card">
        <img src="{{asset('pic1.jpg')}}" class="w-100 h-100">
    </div>
  </div>
@endsection
