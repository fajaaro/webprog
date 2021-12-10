@extends('layouts.app')

@section('content')
<div style="display: flex;justify-content: center;align-items: center;width: 100%;height: 100%;">
    <div style="width: 70%;display: flex;flex-direction: row;background-color: white; border-radius: 10px;" class="py-3">
        <div style="height: 100%;width: 30%" class="px-3">
          <a href="" style="text-decoration: none;color: black">Profile</a><br>
          <a href="" style="text-decoration: none;color: black">Friends</a><br>
          <a href=""style="text-decoration: none;color: black">Transaction History</a><br>
        </div>
        <div style="height: 100%;width: 70%;border-left: solid" class="px-2">
              <h6>Name Profile</h6>
              <p>This information will be displayed public. So becarefull what you share</p>
              <div style="display: flex;flex-direction: row;justify-content: space-between">
                  <div style="width: 70%">
                  <div style=" width: 100%;height: auto;display: flex;flex-direction: row;justify-content: space-between">
                      <div style="width: 60%"">
                          <p>Username</p>
                          <input type="text" class="" style="width: 100%;border-radius: 10px;" placeholder=""><br>
                      </div>
                      <div style="width: 30%">
                          <p>Level</p>
                          <input type="text" class="" style="width: 100%;border-radius: 10px;" placeholder=""><br>
                      </div>

                  </div>
                  <div style="width: 100%">
                      <p>Full Name</p>
                      <input type="text" class="" style="width: 100%;border-radius: 10px;" placeholder=""><br>
                  </div>
                  </div>
                  <div style="width: 30%" class="px-2">
                      <p>Photo</p>
                      <div style="display: flex;justify-content: center">
                      <img src="{{asset('pic1.jpg')}}" class="" style="width: 70%;height: 70%">
                      </div>
                  </div>
              </div>

              <p>Current Password</p>
              <input type="password" class="" style="width: 100%;border-radius: 10px;" placeholder=""><br>
              <p style="color: gray">Fill out this field to check if you are authorized</p>
              <p>New Password</p>
              <input type="password" class="" style="width: 100%;border-radius: 10px;" placeholder=""><br>
              <p style="color: gray">Only if you want to change your password</p>
              <p>Confirm New Password</p>
              <input type="password" class="" style="width: 100%;border-radius: 10px;" placeholder=""><br>
              <p style="color: gray">Only if you want to change your password</p>

              <div class="d-flex flex-row-reverse">
                  <button style="border-radius: 10px">Update</button>
              </div>
        </div>
        <div style="height: 50px;">

      </div>
    </div>
</div>
@endsection
