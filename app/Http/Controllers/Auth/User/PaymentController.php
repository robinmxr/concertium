<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;

use App\Models\Payment;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showWallet()
    {
        $id = Auth::guard('user')->user()->id;
        $user = User::find($id);
        $ticket = Ticket::where('user_id',$id)->get();
        $payment = Payment::where('userrole','user')->where('username',$user->name)->get();
        return view('user.viewwallet',compact('user','ticket','payment'));
    }

    public function showWithdraw()
    {

        $user = Auth::guard('user')->user();

        return view('user.withdraw',compact('user'));
    }

    public function storeWithdraw(Request $request)
    {

        $user = Auth::guard('user')->user();
        if(Auth::guard('user')->attempt(array('email'=>$user->email,'password'=>$request->password))){
            $payment = new Payment;
            $payment->userrole = 'User';
            $payment->username = $user->name;
            $payment->bankname = $request->bankname;
            $payment->accname = $request->accname;
            $payment->accnum = $request->accnum;
            $payment->amount = $request->amount;

            $user->balance = $user->balance - $request->amount;
            $user->save();

            $payment->save();
            return back()->with('success','The Requested Amount Has been sent to The Given Account');


        }
    }
}
