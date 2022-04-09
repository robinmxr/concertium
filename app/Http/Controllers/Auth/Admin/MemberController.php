<?php

namespace App\Http\Controllers\Auth\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\Organizer;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    //
    public function showUser()
    {
    $user = User::all();
    return view('admin.userlist',compact('user'));
    }
    public function editUser($id)
    {
    $user = User::find($id);
    return view('admin.edituser',compact('user'));
    }
    public function updateUser(Request $request,$id)
    {  $user = User::find($id);

        $user->balance = $request->balance;
        $user->save();

        return back()->with('success','balance Has been updated');

    }
    public function deleteUser($id)
    {
       $user = User::find($id);
       if($user!=null) {
           $user->delete();
           return back()->with('warning','User Has been Deleted');
       }
       return back()->with('warning','Something Wrong');

    }
    public function addUser()
    {
    return  view('admin.adduser');
    }

    public function storeUser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success','User Has been Added');
    }

    public function showOrganizer()
    {
        $organizer = Organizer::all();
        return view('admin.organizerlist',compact('organizer'));
    }
    public function editOrganizer($id)
    {
        $organizer = Organizer::find($id);
        return view('admin.editorganizer',compact('organizer'));
    }
    public function updateOrganizer(Request $request,$id)
    {  $organizer = Organizer::find($id);

        $organizer->balance = $request->balance;
        $organizer->save();

        return back()->with('success','balance Has been updated');

    }
    public function deleteOrganizer($id)
    {
        $organizer = Organizer::find($id);
        $organizer->delete();
        return back()->with('warning','Organizer Has been Deleted');

    }
    public function addOrganizer()
    {
        return  view('admin.addorganizer');
    }

    public function storeOrganizer(Request $request)
    {
        $organizer = new Organizer;
        $organizer->name = $request->name;
        $organizer->email = $request->email;
        $organizer->phone = $request->phone;
        $organizer->password = Hash::make($request->password);
        $organizer->save();
        return back()->with('success','Organizer Has been Added');
    }

    public function showArtist()
    {
        $artist = Artist::all();
        return view('admin.artistlist',compact('artist'));
    }

    public function editArtist($id)
    {
        $artist = Artist::find($id);
        return view('admin.editartist',compact('artist'));
    }
    public function updateArtist(Request $request,$id)
    {  $artist = Artist::find($id);

        $artist->balance = $request->balance;
        $artist->save();

        return back()->with('success','balance Has been updated');

    }

    public function deleteArtist($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return back()->with('warning','Artist Has been Deleted');

    }
    public function addArtist()
    {
        return  view('admin.addartist');
    }

    public function storeArtist(Request $request)
    {
        $artist = new Artist;
        $artist->name = $request->name;
        $artist->bandname = $request->bandname;
        $artist->genre = $request->genre;
        $artist->cost = $request->cost;
        $artist->email = $request->email;
        $artist->phone = $request->phone;
        $artist->password = Hash::make($request->password);
        $artist->save();
        return back()->with('success','Artist Has been Added');
    }



}
