@extends('layouts.app')

@section('content')
<div style="display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
    <div style="width: 70%;display: flex;flex-direction: row;background-color: white; border-radius: 10px;" class="py-3">
        <div style="height: 100%;width: 30%" class="px-3">
          <a href="" style="text-decoration: none;color: black">Profile</a><br>
          <a href="" style="text-decoration: none;color: black">Friends</a><br>
          <a href=""style="text-decoration: none;color: black">Transaction History</a><br>
        </div>
        <div style="display: flex;flex-direction: column;height: 100%;width: 70%;border-left: solid">
          <h5 class="px-2">Transaction History</h5><br>
        <div style="border-bottom: solid" class="px-2">


              <div style="width: 100%">
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
        <div style="" class="px-2">


          <div style="width: 100%">
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
<div style="height: 100px;">

</div>
@endsection
