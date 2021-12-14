@extends('layouts.app')

@section('content')
  <div>
    <h1>Manage Game</h1>
    <h6>Filter by Game Name</h6>
    <form class="">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width: 300px"> <br>
      <h6>Filter by Game Category</h6>
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-2">
              <input type="checkbox" id="idle" name="idle" value="idle">
              <label for="idle">Idle</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="horror" name="horror" value="horror">
              <label for="horror">Horror</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="adventure" name="adventure" value="adventure">
              <label for="adventure">Adventure</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="action" name="action" value="action">
              <label for="action">Action</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="sport" name="sport" value="sport">
              <label for="sport">Sport</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="strategy" name="strategy" value="strategy">
              <label for="strategy">Strategy</label>
            </div>            
          </div>
          <div class="row">
            <div class="col-md-2">
              <input type="checkbox" id="visualnovel" name="visualnovel" value="visualnovel">
              <label for="visualnovel">Visual Novel</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="vr" name="vr" value="vr">
              <label for="vr">VR</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="scifi" name="scifi" value="scifi">
              <label for="scifi">Sci - Fi</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="casual" name="casual" value="casual">
              <label for="casual">Casual</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="boardgame" name="boardgame" value="boardgame">
              <label for="boardgame">Board Game</label>
            </div>
            <div class="col-md-2">
              <input type="checkbox" id="mmo" name="mmo" value="mmo">
              <label for="mmo">MMO-RPG</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <input type="checkbox" id="simulation" name="simulation" value="simulation">
              <label for="simulation">Simulation</label>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-outline-success px-2 mt-3" type="submit">Search</button>
    </form>
  </div>
  <hr>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
      <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
        <div class="card-body">
          <p class="card-text">Game Name.</p>
          <p class="card-text">Genre.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <button type="button" class="btn btn-sm btn-primary mr-2">Update</button>
              <button type="button" class="btn btn-sm btn-danger">Delete</button>              
            </div>
            <small class="text-muted">Rp.1000000</small>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
