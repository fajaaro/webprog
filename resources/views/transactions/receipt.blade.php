@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="progress">
            <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Shopping Cart</div>
            <div class="progress-bar bg-warning progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Transaction Information</div>
            <div class="progress-bar bg-success progress-bar-animated progress-bar-striped" role="progressbar" style="width: 34%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Transaction Receipt</div>
        </div>

        <h1>Transaction Receipt</h1>

        <div class="bg-white p-3 mb-2">
            <p>Transaction ID : {{ $transaction->id }}</p>
            <p>Purchase Date : {{ $transaction->created_at }}</p>
        </div>

        @php
            $totalPrice = 0;
        @endphp

        @foreach($transaction->transactionDetails as $detail)
            <div class="bg-white p-3 mb-2">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ str_starts_with($detail->game->image_url, 'https') ? $detail->game->image_url : Storage::url($detail->game->image_url) }}" alt="game pic" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <p><b>{{ $detail->game->title }}</b></p>
                        <p>{{ formatRupiah($detail->game->price) }}</p>
                    </div>
                </div>
            </div>

            @php
                $totalPrice += $detail->price;
            @endphp
        @endforeach

        <div class="bg-white p-3">
            <p>Total Price: <b>{{ formatRupiah($totalPrice) }}</b></p>

        </div>
    </div>
@endsection
