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
                <h6 class="px-2">Transaction History</h5>
                <div class="px-2">
                    <div class="w-100">
                        @foreach($transactions as $trans)
                            @php
                                $totalPrice = 0;
                            @endphp
                            <div>
                                <b>Transaction ID</b>: {{ $trans->id }} <br>
                                <b>Purchase Date</b>: {{ $trans->created_at }} <br><br>
                            </div>

                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                                @foreach($trans->transactionDetails as $transDetail)
                                    <img src="{{ str_starts_with($transDetail->game->image_url, 'https') ? $transDetail->game->image_url : Storage::url($transDetail->game->image_url) }}" alt="game pic" class="w-25">

                                    @php
                                        $totalPrice += $transDetail->price;
                                    @endphp
                                @endforeach
                            </div>
                            <p class="mt-3"><b>Total Price</b>: {{ formatRupiah($totalPrice) }}</p>

                            @if(!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
