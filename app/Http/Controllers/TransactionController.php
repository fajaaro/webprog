<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function carts()
    {
        return view('transactions.carts');
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
