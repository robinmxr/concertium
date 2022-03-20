<?php

namespace App\Http\Controllers\Auth\Artist;
use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    //
    public function profile()
    {
        $artist = new Artist;
        $id =  Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);
        return view('artist.profile',compact('artist'));
    }
    public function editprofile()
    {
        $artist = new Artist;
        $id =  Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);
        return view('artist.editprofile',compact('artist'));
    }
    public function updateprofile(Request $request)
    {
        $artist = new Artist;
        $id =  Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);

        $artist->name = $request->name;
        $artist->bandname = $request->bandname;
        $artist->phone = $request->phone;
        $artist->genre = $request->genre;
        $artist->cost = $request->cost;

        $artist->save();

        return back()->with('success','Profile Updated!');
    }

}
