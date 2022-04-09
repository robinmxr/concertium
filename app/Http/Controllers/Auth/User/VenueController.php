<?php

namespace App\Http\Controllers\Auth\User;

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
        return view('user.venuelist',compact('venue'));
    }
    public function viewVenue($id)
    {
        $venue = Venue::find($id);
        return view('user.viewvenue',compact('venue'));
    }



}
