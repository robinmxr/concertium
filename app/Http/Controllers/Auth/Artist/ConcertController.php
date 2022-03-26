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

    public function approveConcert($id)
    {
        $concert = Concert::find($id);
        $concert->status = 'approved';
        $concert->save();
        return redirect()->route('artist.concert.list');
    }

    public function deleteConcert($id)
    {
        $concert = Concert::find($id);
        $concert->delete();
        return redirect()->route('artist.concert.list');
    }
}
