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
              <h5>Friends</h5><br>
              <h6>Add Friend</h6>
              <form action="" style="border-radius: 10px;display: flex;flex-direction: row;width: 50%;justify-content: space-around">
                  <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width: 300px;border-radius: 10px;">
                  <button style="border-radius: 10px;"> Add</button>
              </form>
              <br>
              <h6>Incoming Friend Request</h6>
              <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="card" style="width: 30%;background-color: lightgray;">
                      <div class="card-body" style="width: 100% ;display: flex;flex-direction: column;height: 50%;background-color: lightgray;">
                          <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;height: 30%">
                              <div style="display: flex;flex-direction: row;justify-content: space-around">
                                  <div style=""><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="" style="width: 50%;height: 200%">
                          </div>
                          <div style="height: 50%">
                              <p>member</p>
                          </div>
                          <div style="display: flex;justify-content: space-around;border-top: solid;width: 100%">
                              <div style="background-color: lightgreen;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Accept</a>
                              </div>
                              <div style="background-color: red;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Reject</a>
                              </div>
                          </div>
                      </div>


                    </div>
              </div>

              <br>
              <h6>Pending Friend Request</h6>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 px-2">
                  <div class="card" style="width: 30%;background-color: lightgray;">
                      <div class="card-body" style="width: 100% ;display: flex;flex-direction: column;height: 50%;background-color: lightgray;">
                          <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;height: 30%">
                              <div style="display: flex;flex-direction: row;justify-content: space-around">
                                  <div style=""><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="" style="width: 50%;height: 200%">
                          </div>
                          <div style="height: 50%">
                              <p>member</p>
                          </div>
                          <div style="display: flex;justify-content: center;border-top: solid;width: 100%">
                              <div style="background-color: red;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Cancel</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="card" style="width: 30%;background-color: lightgray;">
                      <div class="card-body" style="width: 100% ;display: flex;flex-direction: column;height: 50%;background-color: lightgray;">
                          <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;height: 30%">
                              <div style="display: flex;flex-direction: row;justify-content: space-around">
                                  <div style=""><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="" style="width: 50%;height: 200%">
                          </div>
                          <div style="height: 50%">
                              <p>member</p>
                          </div>
                          <div style="display: flex;justify-content: center;border-top: solid;width: 100%">
                              <div style="background-color: red;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Cancel</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="card" style="width: 30%;background-color: lightgray;">
                      <div class="card-body" style="width: 100% ;display: flex;flex-direction: column;height: 50%;background-color: lightgray;">
                          <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;height: 30%">
                              <div style="display: flex;flex-direction: row;justify-content: space-around">
                                  <div style=""><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="" style="width: 50%;height: 200%">
                          </div>
                          <div style="height: 50%">
                              <p>member</p>
                          </div>
                          <div style="display: flex;justify-content: center;border-top: solid;width: 100%">
                              <div style="background-color: red;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Cancel</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="card" style="width: 30%;background-color: lightgray;">
                      <div class="card-body" style="width: 100% ;display: flex;flex-direction: column;height: 50%;background-color: lightgray;">
                          <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;height: 30%">
                              <div style="display: flex;flex-direction: row;justify-content: space-around">
                                  <div style=""><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="" style="width: 50%;height: 200%">
                          </div>
                          <div style="height: 50%">
                              <p>member</p>
                          </div>
                          <div style="display: flex;justify-content: center;border-top: solid;width: 100%">
                              <div style="background-color: red;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Cancel</a>
                              </div>
                          </div>
                      </div>
                    </div>
              </div>


              <br>
              <h6>Your Friend</h6>
              <div class="px-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="card" style="width: 30%;background-color: lightgray;">
                      <div class="card-body" style="width: 100% ;display: flex;flex-direction: column;height: 50%;background-color: lightgray;">
                          <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;height: 30%">
                              <div style="display: flex;flex-direction: row;justify-content: space-around">
                                  <div style=""><p style="">Name</p></div>
                                  <div class="px-2"><p>Level</p></div>
                              </div>
                              <img src="{{asset('pic1.jpg')}}" class="" style="width: 50%;height: 200%">
                          </div>
                          <div style="height: 50%">
                              <p>member</p>
                          </div>
                          <div style="display: flex;justify-content: space-around;border-top: solid;width: 100%">
                              <div style="background-color: lightgreen;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Accept</a>
                              </div>
                              <div style="background-color: red;width: 100%;display: flex;justify-content: center">
                                  <a href="#" class="card-link" style="text-decoration: none;color: black">Reject</a>
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
