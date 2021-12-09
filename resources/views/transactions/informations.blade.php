@extends('layouts.app')

@section('content')
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

    <div class="" style=" display: flex;">
        <div class="" style="width: 1000px">
          <p>Expire Date</p>

          <input type="number" class="" style="width: 490px" placeholder="MM">
          <input type="number" class="" style="width: 490px" placeholder="YYYY">
        </div>
        <div style=width: 600px">
          <p>CVC /CVV</p>
          <input type="number" class="" style="width: 500px" placeholder="3 or 4 Digits Number">
        </div>
    </div><br>

    <div class="" style=" display: flex;">
      <div class="" style="width: 1000px">
        <p>Country</p>
        <input type="number" class="" style="width: 985px" placeholder="Country">
      </div>
      <div style=width: 600px">
        <p>ZIP</p>
        <input type="number" class="" style="width: 500px" placeholder="ZIP">
      </div><br>


  </div><br><br>

  <div class="" style=" display: flex;">
      <div class="" style="width: 1000px">
        <h1>Total Price : Rp.10000</h1>
      </div>
      <div style=width: 600px">
        <button> Cancel</button>
        <button >Checkout</button>
      </div><br>
</div>
</form>
@endsection
