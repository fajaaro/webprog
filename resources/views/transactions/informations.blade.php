@extends('layouts.app')

@section('content')
<div class="progress">
    <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Shopping Cart</div>
    <div class="progress-bar bg-warning progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Transaction Information</div>
  </div>
<div>
    <h1>Transaction Information</h1>
</div>
<div>
    <form action="">
    <p>Card Name</p>
    <input class="form-control me-2" placeholder="Card Name">
    <p>Card Number</p>
    <input type="text" class="w-100 form-control me-2" placeholder="0000 0000 0000 0000">
    <p class="text-secondary">Visa or Master Card</p>

    <div class="" style=" display: flex; width: 100%">
        <div class="" style="width: 1000px;display: flex;flex-direction: column">
          <p>Expire Date</p>
            <div style="display: flex; flex-direction: row">
                <input type="number" class="form-control me-2" style="width:50%" placeholder="MM">
                <input type="number" class="form-control me-2" style="width: 50%" placeholder="YYYY">
            </div>
        </div>
        <div style=width: 600px">
          <p>CVC /CVV</p>
          <input type="number" class="form-control me-2" style="width: 100%" placeholder="3 or 4 Digits Number">
        </div>
    </div><br>

    <div class="" style=" width: 100% ;display: flex; ">
      <div class="" style="width: 1000px">
        <p>Country</p>
        <input type="text" class=form-control me-2"" style="width: 880px" placeholder="Country">
      </div>
      <div style=width: 600px">
        <p>ZIP</p>
        <input type="number" class="form-control me-2" style="width: 500px" placeholder="ZIP">
      </div><br>


  </div>
  <br><br>

  <div class="" style=" display: flex;">
      <div class="" style="width: 1000px">
        <h1>Total Price : Rp.10000</h1>
      </div>
      <div style="width: 600px; display: flex; ">
        <button class="form-control me-2 bg-danger"> Cancel</button>
        <button class="form-control me-2 bg-success" >Checkout</button>
      </div><br>
</div>
</form>
<br><br><br>
@endsection
