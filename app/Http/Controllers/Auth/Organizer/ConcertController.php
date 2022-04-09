<?php

namespace App\Http\Controllers\Auth\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Date;
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

        $artist = Artist::find($id);
        $organizer = Auth::guard('organizer')->user();
        $venue = Venue::find($request->venue);
        if (($artist->cost + $venue->cost) > $organizer->balance ) {
            return back()->with('alert', 'Failed,Insufficient Balance');
        } else {
            $concert = new Concert;

            $concert->name = $request->name;
            $concert->songcount = $request->songcount;

            $concert->baseprice = $request->price;

            $concert->organizer_id = $organizer->id;
            $concert->artist_id = $id;
            $concert->venue_id = $request->venue;

            $concert->tickets = $venue->capacity;

            $date = Date::find($request->date);
            $concert->date = $date->date;
            $concert->save();

            return back()->with('success', 'Request has been sent to the Artist.The Stated Amount will Be Deducted from your wallet if the Artist Accepts the Offer');
        }
    }
}
