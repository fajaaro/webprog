<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGame;
use App\Http\Requests\UpdateGame;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $genres = Genre::all();
        $query = Game::latest();

        if ($request->q) $query->where('title', 'like', '%' . $request->q . '%');
        if ($request->genres) $query->whereIn('genre_id', $request->genres);

        $games = $query->paginate(8);

        return view('admin.games.index', compact('genres', 'games'));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('admin.games.create', compact('genres'));
    }

    public function store(StoreGame $request)
    {
        $imageUrl = uploadFile($request->file('image'), 'games-image');
        $trailerVideoUrl = uploadFile($request->file('trailer_video'), 'games-trailer-video');

        $game = Game::create([
            'genre_id' => $request->genre_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'image_url' => $imageUrl,
            'trailer_video_url' => $trailerVideoUrl,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'release_date' => now(),
            'developer' => $request->developer,
            'publisher' => $request->publisher,
            'price' => $request->price,
            'is_adult_content' => $request->is_adult_content ? 1 : 0,
        ]);

        return redirect()->route('admin.games.index')->with('success', 'Success add new game!');
    }

    public function edit($id)
    {
        $game = Game::find($id);
        $genres = Genre::all();

        return view('admin.games.edit', compact('game', 'genres'));
    }

    public function update(UpdateGame $request, $id)
    {
        $imageUrl = uploadFile($request->file('image'), 'games-image');
        $trailerVideoUrl = uploadFile($request->file('trailer_video'), 'games-trailer-video');

        $game = Game::find($id);

        Storage::delete($game->image_url);
        Storage::delete($game->trailer_video_url);

        $game->description = $request->description;
        $game->long_description = $request->long_description;
        $game->genre_id = $request->genre_id;
        $game->price = $request->price;
        $game->image_url = $imageUrl;
        $game->trailer_video_url = $trailerVideoUrl;
        $game->save();

        return redirect()->route('admin.games.index')->with('success', 'Success update game!');
    }

    public function delete(Request $request)
    {
        $game = Game::find($request->game_id);
        $gameTitle = $game->title;
        $game->delete();

        return back()->with('success', "$gameTitle has been deleted!");
    }
}
