<?php

namespace App\Http\Controllers\Auth\Organizer;

use App\Http\Controllers\Controller;

use App\Models\Concert;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showWallet()
    {
        $id = Auth::guard('organizer')->user()->id;
        $organizer = Organizer::find($id);
        $ticket = Ticket::where('user_id',$id)->get();
        $payment = Payment::where('userrole','organizer')->where('username',$organizer->name)->get();
        $concert = Concert::where('organizer_id',$id)->get();
        return view('organizer.viewwallet',compact('organizer','ticket','payment','concert'));
    }

    public function showWithdraw()
    {

        $organizer = Auth::guard('organizer')->user();

        return view('organizer.withdraw',compact('organizer'));
    }

    public function storeWithdraw(Request $request)
    {

        $organizer = Auth::guard('organizer')->user();
        if(Auth::guard('organizer')->attempt(array('email'=>$organizer->email,'password'=>$request->password))){
            $payment = new Payment;
            $payment->userrole = 'organizer';
            $payment->username = $organizer->name;
            $payment->bankname = $request->bankname;
            $payment->accname = $request->accname;
            $payment->accnum = $request->accnum;
            $payment->amount = $request->amount;

            $organizer->balance = $organizer->balance - $request->amount;
            $organizer->save();

            $payment->save();
            return back()->with('success','The Requested Amount Has been sent to The Given Account');


        }
        return back()->with('danger','Request Failed.Try Again');
    }
}
