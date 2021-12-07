<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.games.index');
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
