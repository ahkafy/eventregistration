<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'method',
        'bk_reference',
        'bk_status',
        'receive_amount',
        'note',
    ];
}
