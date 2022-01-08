@extends('layouts.app')

@section('content')
    <div class="container bg-white" id="container-profile">
        @include('flash')
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('profiles.index') }}" class="link {{ request()->is('profiles') ? 'text-info' : '' }}">Profile</a><br>
                @if ($user->inRole('member'))
                    <a href="{{ route('profiles.friends') }}" class="link {{ request()->is('profiles/friends') ? 'text-info' : '' }}">Friends</a><br>
                    <a href="{{ route('profiles.transactions') }}" class="link {{ request()->is('profiles/transactions') ? 'text-info' : '' }}">Transaction History</a><br>
                @endif
            </div>
            <div class="col-md-9">
                <h6>{{ $user->username }} Profile</h6>
                <p>This information will be displayed public. So becarefull what you share</p>
                
                <form action="{{ route('profiles.update') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="level">Level</label>
                            <input type="text" name="level" id="level" class="form-control @error('level') is-invalid @enderror" value="{{ $user->level }}" disabled>
                        </div>
                        <div class="col-md-5">
                            <label for="avatar">Photo</label>
                            <input type="file" name="avatar" id="avatar" class="form-control @error('avatar') is-invalid @enderror" required>
                            @if (!$user->avatar_url)
                                <small><em>You don't have any avatar right now.</em></small>
                            @endif
                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ $user->full_name }}" required>
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror">
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                        
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror">
                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                        
                        <div class="col-md-6">
                            <label for="new_password_confirmation">New Password Confirmation</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror">
                            @error('new_password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                        
                    </div>

                    <button class="btn btn-secondary mt-3">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
