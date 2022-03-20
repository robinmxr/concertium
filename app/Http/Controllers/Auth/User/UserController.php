<?php

namespace App\Http\Controllers\Auth\User;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function profile()
    {
        $user = new User;
        $id =  Auth::guard('user')->user()->id;
        $user = User::find($id);
        return view('user.profile',compact('user'));
    }
    public function editprofile()
    {
        $user = new User;
        $id =  Auth::guard('user')->user()->id;
        $user = User::find($id);
        return view('user.editprofile',compact('user'));
    }
    public function updateprofile(Request $request)
    {
        $user = new User;
        $id =  Auth::guard('user')->user()->id;
        $user = User::find($id);

        $user->name = $request->name;

        $user->phone = $request->phone;


        $user->save();

        return back()->with('success','Profile Updated!');
    }

}
