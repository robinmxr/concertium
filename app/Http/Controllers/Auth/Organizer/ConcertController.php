<?php

namespace App\Http\Controllers\Auth\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Organizer;
use App\Models\Concert;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConcertController extends Controller
{
    public function showRequest($id)
    {
        $organ_id = Auth::guard('organizer')->user()->id;
        $artist = Artist::find($id);
        $organizer = Organizer::find($organ_id);
        $venue = Venue::all();
        return view('organizer.requestconcert',compact('artist','organizer','venue'));
    }
    public function makeRequest(Request $request,$id)
    {
        $concert = new Concert;
        $concert->name = $request->name;
        $concert->songcount = $request->songcount;
        $concert->date = $request->date;
        $concert->baseprice  = $request->price;

        $concert->organizer_id = Auth::guard('organizer')->user()->id;
        $concert->artist_id = $id;
        $venue = Venue::find($request->venue);
        $concert->tickets = $venue->capacity;
        $concert->save();

        return back()->with('success','Request has been sent to the Artist');
    }
}
