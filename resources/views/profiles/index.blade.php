@extends('layouts.app')

@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center" >
    <div class="d-flex flex-row w-75 py-3" style="background-color: white; border-radius: 10px;">
        <div class="px-3 h-100 w-25">
          <a href="{{ route('profiles.index') }}" style="text-decoration: none;color: black">Profile</a><br>
          <a href="{{ route('profiles.friends') }}" style="text-decoration: none;color: black">Friends</a><br>
          <a href="{{ route('profiles.transactions') }}"style="text-decoration: none;color: black">Transaction History</a><br>
        </div>
        <div style="border-left: solid" class="px-2 h-100 w-75">
              <h6>Name Profile</h6>
              <p>This information will be displayed public. So becarefull what you share</p>
              <div class="d-flex flex-row justify-content-between">
                  <div  class="w-75">
                  <div  class="d-flex flex-row justify-content-between w-100 h-auto">
                      <div class="w-50">
                          <p>Username</p>
                          <input type="text" class="w-100" style="border-radius: 10px;" placeholder=""><br>
                      </div>
                      <div class="w-25">
                          <p>Level</p>
                          <input type="number" class="w-100" style="border-radius: 10px;" placeholder=""><br>
                      </div>

                  </div>
                  <div class="w-100">
                      <p>Full Name</p>
                      <input type="text" class="w-100" style="border-radius: 10px;" placeholder=""><br>
                  </div>
                  </div>
                  <div class="px-2 w-25">
                      <p>Photo</p>
                      <div class="d-flex justify-content-center">
                      <img src="{{asset('pic1.jpg')}}" class="w-75 h-75">
                      </div>
                  </div>
              </div>

              <p>Current Password</p>
              <input type="password" class="w-100" style="border-radius: 10px;" placeholder=""><br>
              <p style="color: gray">Fill out this field to check if you are authorized</p>
              <p>New Password</p>
              <input type="password" class="w-100" style="border-radius: 10px;" placeholder=""><br>
              <p style="color: gray">Only if you want to change your password</p>
              <p>Confirm New Password</p>
              <input type="password" class="w-100" style="border-radius: 10px;" placeholder=""><br>
              <p style="color: gray">Only if you want to change your password</p>

              <div class="d-flex flex-row-reverse">
                  <button style="border-radius: 10px">Update</button>
              </div>
        </div>
        <div class="h-50">

      </div>
    </div>
</div>
@endsection
