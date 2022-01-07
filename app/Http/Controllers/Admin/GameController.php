<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function store(array $data)
    {
        return Game::create([
            'genre_id' => $data['category'],
            'title' => $data['gamename'],
            'slug' => Str::slug($data['gamename'], '-'),
            'image_url' =>$data['cover'],
            'trailer_video_url' => $data['video'],
            'description' => $data['game_description'],
            'long_description' => $data['game_long_description'],
            'release_date' => Carbon::now(),
            'developer' =>$data['developer'],
            'publisher' => $data['publisher'],
            'price' =>$data['price'],
            'is_adult_content' => $data['adult'],
        ]);
    }

    public function edit($id)
    {
        return view('admin.games.edit');
    }

    public function update(array $data)
    {
        return Game::update([
            'genre_id' => $data['category'],
            'title' => $data['gamename'],
            'slug' => Str::slug($data['gamename'], '-'),
            'image_url' =>$data['cover'],
            'trailer_video_url' => $data['video'],
            'description' => $data['game_description'],
            'long_description' => $data['game_long_description'],
            'release_date' => Carbon::now(),
            'price' =>$data['price'],
            'is_adult_content' => $data['adult'],
        ]);


    }

    public function destroy($id)
    {

    }
}
