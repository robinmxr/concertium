<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueController extends Controller
{
    //
    public function showVenue()
    {
        $venue = Venue::all();
        return view('admin.venuelist',compact('venue'));
    }
    public function viewVenue($id)
    {
        $venue = Venue::find($id);
        return view('admin.viewvenue',compact('venue'));
    }


    public function createVenue()
    {
        return view('admin.createvenue');
    }

    public function storeVenue(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $venue = new Venue;
        $venue->name = $request->name;
        $venue->capacity = $request->capacity;
        $venue->cost = $request->cost;
        $venue->location = $request->location;
        $venue->admin_id = Auth::guard('admin')->user()->id;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/venue'), $imageName);
        $venue->image = $imageName;
        $venue->save();

        return back()->with('success','Venue has been Added');
    }


    public function deleteVenue($id)
    {
        $venue = Venue::find($id);
        if ($venue) {
            $venue->delete();
        }
        return redirect()->route('admin.venue.show');
    }
}
