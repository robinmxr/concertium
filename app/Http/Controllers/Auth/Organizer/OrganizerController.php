<?php

namespace App\Http\Controllers\Auth\Organizer;
use App\Http\Controllers\Controller;
use App\Models\Organizer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    //
    public function profile()
    {
        $organizer = new Organizer;
        $id =  Auth::guard('organizer')->user()->id;
        $organizer = Organizer::find($id);
        return view('organizer.profile',compact('organizer'));
    }
    public function editprofile()
    {
        $organizer = new Organizer;
        $id =  Auth::guard('organizer')->user()->id;
        $organizer = Organizer::find($id);
        return view('organizer.editprofile',compact('organizer'));
    }
    public function updateprofile(Request $request)
    {
        $organizer = new Organizer;
        $id =  Auth::guard('organizer')->user()->id;
        $organizer = Organizer::find($id);

        $organizer->name = $request->name;

        $organizer->phone = $request->phone;


        $organizer->save();

        return back()->with('success','Profile Updated!');
    }

}
