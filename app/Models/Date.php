<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Date extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'date',
    ];

    public function artist()
    {
        return $this->belongsTo('App\Models\Artist','artist_id');
    }

    public function setnewDateFormat($value)
    {
        $this->attributes['date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getnewDateFormat($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }
}
