@extends('layouts.app')

@section('content')
<div class="progress">
    <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Shopping Cart</div>
    <div class="progress-bar bg-warning progress-bar-animated progress-bar-striped" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Transaction Information</div>
    <div class="progress-bar bg-success progress-bar-animated progress-bar-striped" role="progressbar" style="width: 34%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Transaction Receipt</div>

  </div>
<div>
    <h1>Transaction Receipt</h1>
</div>
<div class="container d-flex justify-content-center w-100 h-100 ">
    <div class="card d-flex " style="width: 60%;flex-direction: row">
      <div class="card-body" style="width: 60%;">
        <p>Transaction ID : </p>
        <p>Purchase Date : </p>
      </div>
    </div>
  </div>
<div class="container d-flex justify-content-center w-100 h-100">
<div class="card d-flex " style="width: 60%;flex-direction: row">
  <img class="" src="{{asset('pic1.jpg')}}" alt="Card image cap" style="width: 30%;">
  <div class="card-body" style="width: 60%;">
    <h5 class="card-title">Games Name</h5>
    <p class="card-text">Genre</p>
    <p>100000</p>
    <a href="#" class="btn btn-primary">Remove</a>
  </div>
</div>
</div>
<div class="container d-flex justify-content-center w-100 h-100">
  <div class="card d-flex " style="width: 60%;flex-direction: row">
    <img class="" src="{{asset('pic1.jpg')}}" alt="Card image cap" style="width: 30%;">
    <div class="card-body" style="width: 60%;">
      <h5 class="card-title">Games Name</h5>
      <p class="card-text">Genre</p>
      <p>100000</p>
      <a href="#" class="btn btn-primary">Remove</a>
    </div>
  </div>
</div>
<div class="container d-flex justify-content-center w-100 h-100 ">
  <div class="card d-flex " style="width: 60%;flex-direction: row">
    <div class="card-body" style="width: 60%;">
      <h5 class="card-title">Total Price : Rp.200000</h5>
    </div>
  </div>
</div>
<div class="" style="height: 200px">
</div>
@endsection
