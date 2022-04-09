<?php

namespace App\Http\Controllers\Auth\Artist;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Artist;
use App\Models\Organizer;
use App\Models\Concert;
use App\Models\Date;
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


        $organizer = Organizer::find($concert->organizer_id);
        $artist = Artist::find($concert->artist_id);
        $date = Date::where('artist_id',$artist->id)->where('date',$concert->date)->first();
        if($date!=null)
        {
            $date->delete();
        }

        $organizer->balance -= $artist->cost;
        $artist->balance += $artist->cost;

        $admin = Admin::find($concert->venue->admin_id);
        $admin->balance += $concert->venue->cost;
        $organizer->balance -= $concert->venue->cost;
        $organizer->save();
        $artist->save();
        $concert->save();
        $admin->save();
        return redirect()->route('artist.concert.list');
    }

    public function deleteConcert($id)
    {
        $concert = Concert::find($id);
        $concert->delete();
        return redirect()->route('artist.concert.list');
    }
}
