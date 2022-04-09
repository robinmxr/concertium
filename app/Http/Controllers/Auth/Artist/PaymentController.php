<?php

namespace App\Http\Controllers\Auth\Artist;

use App\Http\Controllers\Controller;

use App\Models\Concert;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showWallet()
    {
        $id = Auth::guard('artist')->user()->id;
        $artist = Artist::find($id);
        $concert = Concert::where('artist_id',$id)->get();
        $payment = Payment::where('userrole','artist')->where('userid',$artist->id)->get();
        return view('artist.viewwallet',compact('artist','payment','concert'));
    }

    public function showWithdraw()
    {

        $artist = Auth::guard('artist')->user();

        return view('artist.withdraw',compact('artist'));
    }

    public function storeWithdraw(Request $request)
    {

        $artist = Auth::guard('artist')->user();
        if(Auth::guard('artist')->attempt(array('email'=>$artist->email,'password'=>$request->password))){
            $payment = new Payment;
            $payment->userrole = 'artist';
            $payment->username = $artist->name;
            $payment->userid = $artist->id;
            $payment->bankname = $request->bankname;
            $payment->accname = $request->accname;
            $payment->accnum = $request->accnum;
            $payment->amount = $request->amount;
            $artist->balance = $artist->balance - $request->amount;
            $artist->save();

            $payment->save();
            return back()->with('success','The Requested Amount Has been sent to The Given Account');


        }
    }
}
