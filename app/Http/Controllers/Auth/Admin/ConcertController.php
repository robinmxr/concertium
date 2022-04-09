<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConcertController extends Controller
{
    public function showConcert()
    {
        $concert = Concert::all();
        return view('admin.concertlist',compact('concert'));
    }
    public function viewConcert($id)
    {
        $concert = Concert::find($id);
        return view('admin.viewconcert',compact('concert'));
    }


}
