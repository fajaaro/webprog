<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function carts()
    {
        $games = [];

        if (isset($_COOKIE['carts'])) {
            $data = json_decode($_COOKIE['carts']);

            foreach ($data as $gameId) {
                $game = Game::find($gameId);

                if ($game) array_push($games, $game);
            }
        }

        return view('transactions.carts', compact('games'));
    }

    public function informations()
    {
        return view('transactions.informations');
    }

    public function checkout(Request $request)
    {
                
    }

    public function receipt($id)
    {
        $transaction = Transaction::find($id);

        return view('transactions.receipt', compact('transaction'));
    }
}
