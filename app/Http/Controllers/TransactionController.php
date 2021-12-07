<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function checkout($id)
    {
        $transaction = Transaction::find($id);

        return view('transactions.checkout', compact('transaction'));
    }
}
