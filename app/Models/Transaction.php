<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function transactionDetails()
    {
        return $this->hasMany('App\Models\TransactionDetail');
    }
}
