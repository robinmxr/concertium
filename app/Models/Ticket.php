<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'numberofticket',
        'totalprice',
    ];

    public function concert()
    {
        return $this->belongsTo('App\Models\Concert','concert_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
