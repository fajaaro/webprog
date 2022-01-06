@extends('layouts.app')

@section('content')
<h1>Update Game</h1>
<div style="width: 100%;height: 100%">
  <div>
      <form action="">
          <p>Game Name</p>
          <input type="text" class="form-control w-100" placeholder=""><br>
          <p>Game Description</p>
          <input type="text" class="form-control w-100" placeholder="Write a single sentence obout the game"><br>
          <p>Game Long Description</p>
          <textarea class="form-control w-100 h-50" name="game_long_description" placeholder="Write a few sentence obout the game"></textarea><br>
          <p>Game Category</p>
          <select name="day" id="day" class="form-control w-100" required>
              <option value="idle">Idle</option>
              <option value="horror">Horror</option>
              <option value="adventure">Adventure</option>
              <option value="action">Action</option>
              <option value="sport">Sport</option>
              <option value="strategy">Strategy</option>
              <option value="visualnovel">Visual Novel</option>
              <option value="vr">VR</option>
              <option value="scifi">Sci-Fi</option>
              <option value="casual">Casual</option>
              <option value="boardgame">Board Game</option>
              <option value="mmo">MMO-RPG</option>
              <option value="simulation">Simulation</option>
          </select>
          <p>Game Price</p>
          <input type="number" class="form-control w-100" name="price"><br>
          <p>Game Cover Image URL</p>
            <input type="text" class="form-control w-100" name="image"><br>
            <p>Game Trailer</p>
            <input type="text" class="form-control w-100" name="trailer"><br>

                <input type="checkbox" id="adult" name="adult" value="adult">
                <label for="adult">Only for Adult ?</label><br>

                <div class=" d-flex justify-content-end ">
                    <a href="{{ route('transactions.carts') }}" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-primary">Update</button>
                </div>
      </form>

  </div>
</div>
<div style="height: 100px;">

</div>
@endsection
