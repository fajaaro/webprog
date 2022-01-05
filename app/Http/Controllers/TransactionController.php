<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function carts()
    {
        $games = $this->getGames();

        return view('transactions.carts', compact('games'));
    }

    public function informations()
    {
        $games = $this->getGames();

        if (count($games) == 0) return redirect()->route('transactions.carts')->with('failed', 'You don\'t have any game on your carts!');

        return view('transactions.informations', compact('games'));
    }

    public function checkout(Request $request)
    {

    }

    public function receipt($id)
    {
        $transaction = Transaction::find($id);

        return view('transactions.receipt', compact('transaction'));
    }

    private function getGames()
    {
        $games = [];

        if (isset($_COOKIE['carts'])) {
            $data = json_decode($_COOKIE['carts']);

            foreach ($data as $gameId) {
                $game = Game::find($gameId);

                if ($game) array_push($games, $game);
            }
        }

        return $games;
    }
}
