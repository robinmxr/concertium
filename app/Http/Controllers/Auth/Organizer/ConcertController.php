<?php

namespace App\Http\Controllers\Auth\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Organizer;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConcertController extends Controller
{
    public function showRequest($id)
    {
        $organ_id = Auth::guard('organizer')->user()->id;
        $artist = Artist::find($id);
        $organizer = Organizer::find($organ_id);
        return view('organizer.requestconcert',compact('artist','organizer'));
    }
    public function makeRequest(Request $request,$id)
    {
        $concert = new Concert;
        $concert->name = $request->name;
        $concert->songcount = $request->songcount;
        $concert->organizer_id = Auth::guard('organizer')->user()->id;
        $concert->artist_id = $id;

        $concert->save();

        return back()->with('success','Request has been sent to the Artist');
    }
}
