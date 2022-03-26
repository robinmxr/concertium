<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'description',
        'cost',
    ];
    public function concert()
    {
        return $this->hasMany('App\Models\Concert');
    }
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin','admin_id');
    }
}
