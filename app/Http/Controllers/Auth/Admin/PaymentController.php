<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;

use App\Models\Payment;
use App\Models\Concert;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showWallet()
    {
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);
        $concert = Concert::all();
        $payment = Payment::where('userrole','admin')->where('userid',$admin->id)->get();
        return view('admin.viewwallet',compact('admin','payment','concert'));
    }

    public function showWithdraw()
    {

        $admin = Auth::guard('admin')->user();

        return view('admin.withdraw',compact('admin'));
    }

    public function storeWithdraw(Request $request)
    {

        $admin = Auth::guard('admin')->user();
        if(Auth::guard('admin')->attempt(array('email'=>$admin->email,'password'=>$request->password))){
            $payment = new Payment;
            $payment->userrole = 'admin';
            $payment->username = $admin->name;
            $payment->bankname = $request->bankname;
            $payment->accname = $request->accname;
            $payment->accnum = $request->accnum;
            $payment->amount = $request->amount;

            $admin->balance = $admin->balance - $request->amount;
            $admin->save();

            $payment->save();
            return back()->with('success','The Requested Amount Has been sent to The Given Account');


        }
    }
}
