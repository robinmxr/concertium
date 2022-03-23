<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    //
    public function showVenue()
    {
        $venue = Venue::all();
        return view('admin.venuelist',compact('venue'));
    }

    public function createVenue()
    {
        return view('admin.createvenue');
    }

    public function storeVenue(Request $request)
    {
        $venue = new Venue;
        $venue->name = $request->name;
        $venue->capacity = $request->capacity;
        $venue->cost = $request->cost;
        $venue->save();

        return back()->with('success','Venue has been Added');
    }
}
