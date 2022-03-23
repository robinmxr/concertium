<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }


}
