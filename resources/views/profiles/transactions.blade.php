@extends('layouts.app')

@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div style="background-color: white; border-radius: 10px;" class="py-3 w-75 d-flex flex-row">
        <div class="px-3 h-100 w-25">
            <a href="{{ route('profiles.index') }}" style="text-decoration: none;color: black">Profile</a><br>
            <a href="{{ route('profiles.friends') }}" style="text-decoration: none;color: black">Friends</a><br>
            <a href="{{ route('profiles.transactions') }}"style="text-decoration: none;color: black">Transaction History</a><br>
        </div>
        <div style="border-left: solid" class="h-100 w-75 d-flex flex-column">
          <h5 class="px-2">Transaction History</h5><br>
        <div style="border-bottom: solid" class="px-2">


              <div class="w-100">
                  <div>
                  Transaction ID : dsadjasjdhakjds-98sadasd7a89sd-asda8sd7d <br>
                  Purchase Date: 10-10-2010 08:10:23 <br><br>
                  </div>

                  <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                      <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                      <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                      <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                      <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                  </div><br>
                  <h3>Total Price : 1000000</h3>
              </div>
        </div>
        <div class="px-2">


          <div class="w-100">
              <div style="">
              Transaction ID : dsadjasjdhakjds-98sadasd7a89sd-asda8sd7d <br>
              Purchase Date: 10-10-2010 08:10:23 <br><br>
              </div>

              <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                  <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                  <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                  <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
                  <img src="{{asset('pic1.jpg')}}" class="" style="width: 25%">
              </div><br>
              <h3>Total Price : 1000000</h3>
          </div>
    </div>
    </div>



    </div>

</div>
<br><br><br>

</div>
@endsection
