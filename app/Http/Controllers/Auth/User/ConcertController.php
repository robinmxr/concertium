<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConcertController extends Controller
{
    public function showConcerts()
    {
        $concert = Concert::all();
        return view('user.concertlist',compact('concert'));
    }

}
