<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

        'songcount',
    ];

    public function artist()
    {
        return $this->belongsTo('App\Models\Artist','artist_id');
    }

    public function organizer()
    {
        return $this->belongsTo('App\Models\Organizer','organizer_id');
    }

    public function venue()
    {
        return $this->belongsTo('App\Models\Venue','venue_id');
    }
}
