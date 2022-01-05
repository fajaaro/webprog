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
        <form action="">
            <div class="row">
                <div class="col-12">
                    <label for="card_name">Card Name</label>
                    <input class="form-control" name="card_name" id="card_name" placeholder="Card Name">
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-12">
                    <label for="card_number">Card Number</label>
                    <input class="form-control" name="card_number" id="card_number" placeholder="Card Number">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label for="expirate_date">Expirate Date</label>
                    <div class="d-flex">
                        <input type="number" name="month" class="form-control" placeholder="MM">
                        <input type="number" name="year" class="form-control" placeholder="YYYY">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="cvc">CVC / CVV</label>
                    <input type="number" name="cvc" id="cvc" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-8">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="form-control">
                        <option value="">Select Country</option>
                        <option value="Indonesia">Indonesia</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="zip">ZIP</label>
                    <input type="number" id="zip" name="zip" class="form-control" placeholder="ZIP">
                </div>
            </div>

            @php
                $totalPrice = 0;
                foreach ($games as $game) {
                    $totalPrice += $game->price;
                }
            @endphp
            <div class="row mt-3">
                <div class="col-md-3">
                    <p>Total Price: {{ formatRupiah($totalPrice) }}</p>
                </div>
                <div class="col-md-9">
                    <button class="btn btn-danger">Cancel</button>
                    <button class="btn btn-primary">Checkout</button>
                </div>
            </div>
        </form>
    </div>
@endsection
