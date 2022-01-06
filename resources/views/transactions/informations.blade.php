@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="progress">
            <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Shopping Cart</div>
            <div class="progress-bar bg-warning progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Transaction Information</div>
        </div>
    </div>

    <div class="container-fluid">
        <h1>Transaction Information</h1>
        <form action="{{ route('transactions.checkout') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-12">
                    <label for="card_name">Card Name</label>
                    <input class="form-control @error('card_name') is-invalid @enderror @error('card_name') is-invalid @enderror" name="card_name" id="card_name" placeholder="Card Name" required value="{{ old('card_name') }}">
                    {!! errorMessage($errors, 'card_name') !!}
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-12">
                    <label for="card_number">Card Number</label>
                    <input class="form-control @error('card_number') is-invalid @enderror" name="card_number" id="card_number" placeholder="0000 0000 0000 0000" required value="{{ old('card_number') }}">
                    {!! errorMessage($errors, 'card_number') !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label for="expirate_date">Expirate Date</label>
                    <div class="d-flex">
                        <div class="w-50">
                            <input type="number" name="card_exp_month" class="form-control @error('card_exp_month') is-invalid @enderror" placeholder="MM" min="1" max="12" required value="{{ old('card_exp_month') }}">
                            {!! errorMessage($errors, 'card_exp_month') !!}
                        </div>
                        <div class="w-50">
                            <input type="number" name="card_exp_year" class="form-control @error('card_exp_year') is-invalid @enderror" placeholder="YYYY" min="2021" max="2050" required value="{{ old('card_exp_year') }}">
                            {!! errorMessage($errors, 'card_exp_year') !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="card_cvc">CVC / CVV</label>
                    <input type="number" name="card_cvc" id="card_cvc" class="form-control @error('card_cvc') is-invalid @enderror" placeholder="CVC / CVV" required value="{{ old('card_cvc') }}">
                    {!! errorMessage($errors, 'card_cvc') !!}
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-8">
                    <label for="country_id">Country</label>
                    <select name="country_id" id="country_id" class="form-control @error('country_id') is-invalid @enderror" required>
                        <option value="">Select Country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ Request::old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    {!! errorMessage($errors, 'country_id') !!}
                </div>
                <div class="col-md-4">
                    <label for="zip_code">ZIP</label>
                    <input type="text" id="zip_code" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror" placeholder="ZIP Code" required value="{{ old('zip_code') }}">
                    {!! errorMessage($errors, 'zip_code') !!}
                </div>
            </div>

            @php
                $totalPrice = 0;
                foreach ($games as $game) {
                    $totalPrice += $game->price;
                }
            @endphp

            <div class="row mt-3 ">
                <div class="col-md-3">
                    <p>Total Price: {{ formatRupiah($totalPrice) }}</p>
                </div>
                <div class="col-md-9">
                    <a href="{{ route('transactions.carts') }}" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-primary">Checkout</button>
                </div>
            </div>
        </form>
    </div>
@endsection
