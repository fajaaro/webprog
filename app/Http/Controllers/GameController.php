<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
	public function index(Request $request)
	{
		if ($request->query) $games = Game::where('title', 'like', '%' . $request->query . '%')->latest()->paginate(8);
		else $games = Game::latest()->paginate(8);

        return view('games.index', compact('games'));
	}

	public function checkAge(Request $request)
	{
		$gameId = $request->game_id;

		return view('games.check-age', compact('gameId'));
	}

	public function processCheckAge(Request $request)
	{

	}

	public function show($id)
	{
		$game = Game::find($id);

		return view('games.show', compact('game'));
	}
}
