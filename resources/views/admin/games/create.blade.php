@extends('layouts.app')

@section('content')
<h1>Create Game</h1>
  <div style="width: 100%;height: 100%">
    <div>
        <form action="">
            <p>Game Name</p>
            <input type="text" class="" style="width: 100%" placeholder=""><br>
            <p>Game Description</p>
            <input type="text" class="" style="width: 100%" placeholder="Write a single sentence obout the game"><br>
            <p>Game Long Description</p>
            <textarea class="" style="width: 100%;height: 200px" placeholder="Write a few sentence obout the game"></textarea><br>
            <p>Game Category</p>
            <select name="day" id="day" style="width: 100%" required>
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
            <p>Game Developer</p>
            <input type="text" class="" style="width: 100%" placeholder=""><br>
            <p>Game Publisher</p>
            <input type="text" class="" style="width: 100%" placeholder=""><br>
            <p>Game Price</p>
            <input type="number" class="" style="width: 100%" placeholder=""><br>
            <p>Game Cover</p>
            <div class="drag-area" style="width: 100%;border: 2px dashed #fff;height: 200px;border-radius: 5px;display: flex;align-items: center;justify-content: center;flex-direction: column;">
                <div class="icon"><i class=""></i></div>
                <header>Drag & Drop to Upload File JPG up to 100kb</header>
                <span>OR</span>
                <button>Browse File</button>
                <input type="file" hidden>
              </div>
              <p>Game Trailer</p>
              <div class="drag-area" style="width: 100%;border: 2px dashed #fff;height: 200px;border-radius: 5px;display: flex;align-items: center;justify-content: center;flex-direction: column;">
                  <div class="icon"><i class=""></i></div>
                  <header>Drag & Drop to Upload File WEBM up to 100mb</header>
                  <span>OR</span>
                  <button>Browse File</button>
                  <input type="file" hidden>
                </div>
                <input type="checkbox" id="adult" name="adult" value="adult">
                <label for="adult">Only for Adult ?</label><br>
        </form>
        <div class="d-flex flex-row-reverse bd-highlight">
            <button style="background-color: grey"> Confirm</button>
            <button style="">Cancel</button>
          </div>
    </div>
    <div style="height: 200px">

    </div>
  </div>
@endsection
