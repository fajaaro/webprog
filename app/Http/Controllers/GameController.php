<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{
	public function index(Request $request)
	{
		if ($request->q) $games = Game::where('title', 'like', '%' . $request->q . '%')->latest()->paginate(8);
		else $games = Game::latest()->paginate(8);

        return view('games.index', compact('games'));
	}

	public function checkAge($id)
	{
		$game = Game::find($id);

		return view('games.check-age', compact('game'));
	}

	public function processCheckAge(Request $request, $id)
	{
		$game = Game::find($id);

		$d = $request->day;
		$m = $request->month;
		$y = $request->year;
		$dob = date_create("$y-$m-$d");
		$age = Carbon::parse($dob)->age;

		Cache::put('is_adult', $age >= 17);

		return redirect()->route('games.show', ['slug' => $game->slug]);
	}

	public function show($slug)
	{
		$game = Game::where('slug', $slug)->firstOrFail();

		if ($game->is_adult_content) {
			if (Cache::has('is_adult')) {
				if (Cache::get('is_adult')) return view('games.show', compact('game'));
				else return redirect()->route('home')->with('failed', "Sorry, there is inappropriate content for you.");
			} else {
				return redirect()->route('games.check-age', ['id' => $game->id]);
			}
		} else {
			return view('games.show', compact('game'));
		}
	}
}
