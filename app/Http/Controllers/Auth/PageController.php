<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $venue = Venue::all();
        return view('welcome',compact('venue'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function showLogin()
    {
        return view('showloginpage');
    }



}
