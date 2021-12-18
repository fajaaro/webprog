@extends('layouts.app')

@section('content')
<h1>Create Game</h1>
  <div style="width: 100%;height: 100%">
    <div>
        <form action="/">
            <p>Game Name</p>
            <input type="text" class="" style="width: 100%" name="game_name"><br>
            <p>Game Description</p>
            <input type="text" class="" style="width: 100%"name="game_description" placeholder="Write a single sentence obout the game"><br>
            <p>Game Long Description</p>
            <textarea class="" style="width: 100%;height: 200px" name="game_long_description" placeholder="Write a few sentence obout the game"></textarea><br>
            <p>Game Category</p>
            <select name="day" id="day" style="width: 100%" required name="category">
                <option value="horror">Horror</option>
                <option value="adventure">Adventure</option>
                <option value="action">Action</option>
                <option value="puzzle">Puzzle</option>
                <option value="strategy">Strategy</option>
                <option value="sports">Sports</option>
                <option value="roleplaying">Role-Playing</option>
                <option value="simulation">Simulation</option>
            </select>
            <p>Game Developer</p>
            <input type="text" class="" style="width: 100%" name="developer"><br>
            <p>Game Publisher</p>
            <input type="text" class="" style="width: 100%" name="publisher"><br>
            <p>Game Price</p>
            <input type="number" class="" style="width: 100%" name="price"><br>
            <p>Game Cover Image URL</p>
            <input type="text" class="" style="width: 100%" name="image"><br>
            <p>Game Trailer</p>
            <input type="text" class="" style="width: 100%" name="trailer"><br>

                <input type="checkbox" id="adult" name="adult" value="adult">
                <label for="adult">Only for Adult ?</label><br>

                <div class="d-flex flex-row-reverse bd-highlight">
                    <button style="background-color: grey" type="submit"> Confirm</button>
                    <button style="">Cancel</button>
                  </div>
        </form>

    </div>
    <div style="height: 200px">

    </div>
  </div>
@endsection
