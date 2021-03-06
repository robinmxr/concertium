<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Artist extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $guard = 'artist';


    protected $fillable = [
        'name',
        'email',
        'password',
        'bandname',
        'genre',
        'cost',
        'balance',
        ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function concert()
    {
        return $this->hasMany('App\Models\Concert');
    }

    public function date()
    {
        return $this->hasMany('App\Models\Date');
    }

    public function delete()
    {
        $this->concert()->delete();
        $this->date()->delete();
        return parent::delete();
    }
}

