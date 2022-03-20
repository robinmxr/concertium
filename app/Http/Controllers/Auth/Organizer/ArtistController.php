<?php

namespace App\Http\Controllers\Auth\Organizer;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function showArtist()
    {
        $artist = new Artist;
        $artist = Artist::get();
        return view('organizer.showartist',compact('artist'));
    }
    public function viewArtist($id)
    {
        $artist = Artist::find($id);
        return view('organizer.artistprofile',compact('artist'));
    }
}
