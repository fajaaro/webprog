@extends('layouts.app')

@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div style="background-color: white; border-radius: 10px;" class="py-3 w-75 d-flex flex-row">
            <div class="px-3 h-100 w-25">
                <a href="{{ route('profiles.index') }}" style="text-decoration: none;color: black">Profile</a><br>
                <a href="{{ route('profiles.friends') }}" style="text-decoration: none;color: black">Friends</a><br>
                <a href="{{ route('profiles.transactions') }}"style="text-decoration: none;color: black">Transaction History</a><br>
            </div>
            <div class="h-100 w-75 d-flex flex-column">
                <h5 class="px-2">Transaction History</h5>
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
