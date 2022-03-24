<?php

namespace App\Http\Controllers\Auth\Artist;

use App\Http\Controllers\Controller;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConcertController extends Controller
{
    public function showConcert()
    {

        $id = Auth::guard('artist')->user()->id;
        $concert = Concert::where('artist_id',$id)->get();
        return view('artist.concertlist',compact('concert'));
    }
    public function viewConcert($id)
    {
        $concert = Concert::find($id);
        return view('artist.viewconcert',compact('concert'));
    }
}
