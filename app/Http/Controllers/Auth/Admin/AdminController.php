<?php

namespace App\Http\Controllers\Auth\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function profile()
    {
        $admin = new Admin;
        $id =  Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);
        return view('admin.profile',compact('admin'));
    }
    public function editprofile()
    {
        $admin = new Admin;
        $id =  Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);
        return view('admin.editprofile',compact('admin'));
    }
    public function updateprofile(Request $request)
    {
        $admin = new admin;
        $id =  Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);

        $admin->name = $request->name;

        $admin->phone = $request->phone;


        $admin->save();

        return back()->with('success','Profile Updated!');
    }



}
