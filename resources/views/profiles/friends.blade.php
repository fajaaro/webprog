@extends('layouts.app')

@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div style="background-color: white; border-radius: 10px;" class="py-3 w-75 d-flex flex-row">
        <div class="px-3 h-100 w-25">
            <a href="{{ route('profiles.index') }}" style="text-decoration: none;color: black">Profile</a><br>
            <a href="{{ route('profiles.friends') }}" style="text-decoration: none;color: black">Friends</a><br>
            <a href="{{ route('profiles.transactions') }}"style="text-decoration: none;color: black">Transaction History</a><br>
        </div>
        <div style="border-left: solid" class="px-2 h-100 w-75">
              <h5>Friends</h5><br>
              <h6>Add Friend</h6>
              <form action="" style="border-radius: 10px" class="d-flex flex-row w-50">
                  <input class="form-control w-50 " type="search" placeholder="Search" aria-label="Search" style="border-radius: 10px;">
                  <button style="border-radius: 10px;"> Add</button>
              </form>
              <br>
              <h6>Incoming Friend Request</h6>
              <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 container-fluid">
                  <div class="card w-25" style="background-color: lightgray;">
                      <div class="card-body w-100 h-50 d-flex flex-column" style="background-color: lightgray;">
                          <div class="d-flex flex-row justify-content-around w-100 h-25">
                              <div class="d-flex flex-row justify-content-around">
                                  <div ><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="w-50 h-100">
                          </div>
                          <div class="h-50">
                              <p>member</p>
                          </div>

                          <div style="border-top: solid" class="d-flex justify-content-around-w100">
                              <div style="background-color: lightgreen" class="d-flex w-100 justify-content-center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Accept</a>
                              </div>
                              <div style="background-color: red " class="w-100 d-flex justify-content-center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Reject</a>
                              </div>
                          </div>
                      </div>


                    </div>
              </div>

              <br>
              <h6>Pending Friend Request</h6>
              <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 container-fluid">
                <div class="card w-25" style="background-color: lightgray;">
                    <div class="card-body w-100 h-50 d-flex flex-column" style="background-color: lightgray;">
                        <div class="d-flex flex-row justify-content-around w-100 h-25">
                            <div class="d-flex flex-row justify-content-around">
                                <div ><p style="">Name</p></div>
                                <div class="px-2"><p>Level</p></div>
                            </div>
                            <img src="{{asset('pic1.jpg')}}" class="w-50 h-100">
                        </div>
                        <div class="h-50">
                            <p>member</p>
                        </div>
                        <div style="border-top: solid" class="d-flex justify-content-around-w100">
                            <div style="background-color: red " class="w-100 d-flex justify-content-center">
                                <a href="#" class="card-link" style="text-decoration: none;color: black">Cancel</a>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>


              <br>
              <h6>Your Friend</h6>
              <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 container-fluid">
                <div class="card w-25" style="background-color: lightgray;">
                    <div class="card-body w-100 h-50 d-flex flex-column" style="background-color: lightgray;">
                        <div class="d-flex flex-row justify-content-around w-100 h-25">
                            <div class="d-flex flex-row justify-content-around">
                                <div ><p style="">Name</p></div>
                                <div class="px-2"><p>Level</p></div>
                            </div>
                            <img src="{{asset('pic1.jpg')}}" class="w-50 h-100">
                        </div>
                        <div class="h-50">
                            <p>member</p>
                        </div>
                        <div style="border-top: solid" class="d-flex justify-content-around-w100">
                            <div style="background-color: red " class="w-100 d-flex justify-content-center">
                                <a href="#" class="card-link" style="text-decoration: none;color: black">Remove</a>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>

</div>
<div style="height: 100px;">

</div>
@endsection
