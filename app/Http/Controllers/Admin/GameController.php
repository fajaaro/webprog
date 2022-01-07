<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
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
        return view('admin.games.create');
    }

    public function store(Request $request)
    {
        return Game::create([
            'genre_id' => $request->genre_id,
            'title' => $request->title,
            'slug' => Str::slug($request->gamename, '-'),
            'image_url' => $request->image_url,
            'trailer_video_url' => $request->trailer_video_url,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'release_date' => now(),
            'developer' => $request->developer,
            'publisher' => $request->publisher,
            'price' => $request->price,
            'is_adult_content' => $request->is_adult_content,
        ]);
    }

    public function edit($id)
    {
        return view('admin.games.edit');
    }

    public function update(Request $request)
    {
        return Game::update([
            'genre_id' => $request->genre_id,
            'title' => $request->title,
            'slug' => Str::slug($request->gamename, '-'),
            'image_url' => $request->image_url,
            'trailer_video_url' => $request->trailer_video_url,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'release_date' => now(),
            'price' => $request->price,
            'is_adult_content' => $request->is_adult_content,
        ]);
    }

    public function delete(Request $request)
    {
        $game = Game::find($request->game_id);
        $gameTitle = $game->title;
        $game->delete();

        return back()->with('success', "$gameTitle has been deleted!");
    }
}
