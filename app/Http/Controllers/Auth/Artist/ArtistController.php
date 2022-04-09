<?php

namespace App\Http\Controllers\Auth\Artist;
use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Date;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    //
    public function profile()
    {

        $id =  Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);
        $date = Date::where('artist_id',$id)->get();
        return view('artist.profile',compact('artist','date'));
    }
    public function editprofile()
    {

        $id =  Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);
        $date = Date::where('artist_id',$id)->get();
        return view('artist.editprofile',compact('artist','date'));
    }
    public function updateprofile(Request $request)
    {


        $id =  Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);

        $artist->name = $request->name;
        $artist->bandname = $request->bandname;
        $artist->phone = $request->phone;
        $artist->genre = $request->genre;
        $artist->cost = $request->cost;

        if($request->check == 'true') {
            if (count($request->date) > 0) {
                $olddate = Date::where('artist_id',$id)->delete();

                foreach ($request->date as $dt) {


                    $date = new Date;
                    $date->artist_id = $id;
                    $date->date = $dt;
                    $date->save();
                }
            }
        }
        if($request->image!=NULL) {

            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('img/artist'), $imageName);
            $artist->image = $imageName;
        }
        $artist->save();



        return back()->with('success','Profile Updated!');
    }

}
