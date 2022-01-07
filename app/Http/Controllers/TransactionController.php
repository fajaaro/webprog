<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutTransaction;
use App\Models\Country;
use App\Models\Game;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function carts()
    {
        $games = getGames();

        return view('transactions.carts', compact('games'));
    }

    public function informations()
    {
        $games = getGames();
        $countries = Country::orderBy('name', 'asc')->get();

        if (count($games) == 0) return redirect()->route('transactions.carts')->with('failed', 'You don\'t have any game on your carts!');

        return view('transactions.informations', compact('games', 'countries'));
    }

    public function checkout(CheckoutTransaction $request)
    {
        $games = getGames();

        $user = Auth::user();

        $trans = new Transaction();
        $trans->id = Str::random(50);
        $trans->user_id = $user->id;
        $trans->save();

        foreach ($games as $game) {
            $transDetail = new TransactionDetail();
            $transDetail->transaction_id = $trans->id;
            $transDetail->game_id = $game->id;
            $transDetail->price = $game->price;
            $transDetail->save();

            $user->level += 1;
            $user->save();
        }

        unsetCookie('carts');

        return redirect()->route('transactions.receipt', ['id' => $trans->id])->with('success', 'Transaction success!');
    }

    public function receipt($id)
    {
        $transaction = Transaction::find($id);

        return view('transactions.receipt', compact('transaction'));
    }
}
