<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->paginate(8);
        return view('admin.games.index', compact('games'));
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        return view('admin.games.edit');
    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {

    }
}
