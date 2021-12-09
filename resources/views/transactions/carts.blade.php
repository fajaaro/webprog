@extends('layouts.app')

@section('content')
<div>
    <h1>Shopping Cart</h1>
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
<div class="container d-flex justify-content-center w-100 h-100 py-2">
  <div class="card d-flex " style="width: 60%;flex-direction: row">
    <div class="card-body" style="width: 60%;">
      <h3 class="card-title">Total Price : Rp.200000</h3>
      <a href="#" class="btn btn-primary">Check Out</a>
    </div>
  </div>
</div>
@endsection
