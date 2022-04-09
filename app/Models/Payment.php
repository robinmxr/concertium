<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'username',
        'userrole',
        'user_id',
        'amount',
        'bankname',
        'accname',
        'accnum',
    ];
}
