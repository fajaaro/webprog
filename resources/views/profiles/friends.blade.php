@extends('layouts.app')

@push('styles')
    <style>
        .part {
            font-weight: bold;
        }
        .level {
            background-color: #4AFF92;
            padding: 1.5px 4px;
            margin-left: 10px;
        }
    </style>
@endpush

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
                <h6 class="mb-4">Friends</h6>

                <form action="{{ route('profiles.add-friend') }}" method="post">
                    @csrf
                    
                    <label for="username" class="part">Add Friend</label><br>
                    <input type="text" class="form-control d-inline-block w-25" name="username" id="username" placeholder="Username" required>
                    <button class="btn btn-secondary">Add</button>
                </form>

                <span class="part d-block mt-4">Incoming Friend Request</span>
                @forelse ($incomingFriends as $friend)
                    <div class="card bg-light mt-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <b>{{ $friend->full_name }}</b>
                                    <b class="level">{{ $friend->level }}</b>
                                    <br>
                                    <small class="text-secondary">{{ $friend->role }}</small>
                                </div>
                                <img src="{{ $friend->avatar_url ? Storage::url($friend->avatar_url) : 'https://github.com/mdo.png' }}" alt="mdo" width="40" height="40" class="rounded-circle">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <form action="{{ route('profiles.update-friend') }}" method="post">
                                        @csrf
                                        @method('put')

                                        <input type="hidden" name="id" value="{{ $friend->list_friend_id }}">
                                        <input type="hidden" name="status" value="accepted">

                                        <button class="btn btn-success w-100">Accept</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('profiles.update-friend') }}" method="post">
                                        @csrf
                                        @method('put')

                                        <input type="hidden" name="id" value="{{ $friend->list_friend_id }}">
                                        <input type="hidden" name="status" value="rejected">

                                        <button class="btn btn-danger w-100">Reject</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <small class="text-secondary">There is no incoming friend request.</small>
                @endforelse

                <span class="part d-block mt-4">Pending Friend Request</span>
                @forelse ($pendingFriends as $friend)
                    <div class="card bg-light mt-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <b>{{ $friend->full_name }}</b>
                                    <b class="level">{{ $friend->level }}</b>
                                    <br>
                                    <small class="text-secondary">{{ $friend->role }}</small>
                                </div>
                                <img src="{{ $friend->avatar_url ? Storage::url($friend->avatar_url) : 'https://github.com/mdo.png' }}" alt="mdo" width="40" height="40" class="rounded-circle">
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profiles.update-friend') }}" method="post">
                                @csrf
                                @method('put')

                                <input type="hidden" name="id" value="{{ $friend->list_friend_id }}">
                                <input type="hidden" name="status" value="cancel">

                                <button class="btn btn-warning w-100">Cancel</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <small class="text-secondary">There is no pending friend request.</small>
                @endforelse

                <span class="part d-block mt-4">Your Friends</span>
                @forelse ($acceptedFriends as $friend)
                    <div class="card bg-light mt-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <b>{{ $friend->full_name }}</b>
                                    <b class="level">{{ $friend->level }}</b>
                                    <br>
                                    <small class="text-secondary">{{ $friend->role }}</small>
                                </div>
                                <img src="{{ $friend->avatar_url ? Storage::url($friend->avatar_url) : 'https://github.com/mdo.png' }}" alt="mdo" width="40" height="40" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                @empty
                    <small class="text-secondary">There is no friend.</small>
                @endforelse
            </div>
        </div>
    </div>
@endsection
