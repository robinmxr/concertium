<?php

namespace App\Http\Controllers\Auth\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Organizer;
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
}
