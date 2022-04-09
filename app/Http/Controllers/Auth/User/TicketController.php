<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use App\Models\Concert;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    //
    public function showTicket($id)
    {
        $concert = Concert::find($id);
        return view('user.ticketclass',compact('concert'));
    }

    public function buyTicket($id,$class)
    {
        $ticket_class = $class;
        $concert = Concert::find($id);
        return view('user.buyticket',compact('ticket_class','concert') );


    }
    public function ownedTicket()
    {
        $ticket = Ticket::where('user_id',Auth::guard('user')->user()->id)->get();
        return view('user.ownedticketlist',compact('ticket'));
    }
    public function storeTicket(Request $request,$id)
    {

        //store a new ticket in the database
        //ticket details
        //money deducted from user and added to organizer wallet
        $user = User::find(Auth::guard('user')->user()->id);
        $concert = Concert::find($id);
        $organizer = Organizer::find($concert->organizer_id);
        $ticket = new Ticket;
        $ticket->user_id = $user->id;
        $ticket->class = $request->class;
        $ticket->name = $request->name;
        $ticket->phone = $request->phone;
        $ticket->email = $request->email;
        $ticket->numberofticket = $request->quantity;
        $ticket->concert_id = $id;

        if($request->class=='regular')
        {
            $price = $concert->baseprice * $request->quantity;
        }
        elseif ($request->class=='standard')
        {
            $price = $concert->baseprice * $request->quantity * 1.2;
        }
        else
        {
            $price = $concert->baseprice * $request->quantity * 1.5;
        }
        $ticket->totalprice = $price;
        $concert->tickets = $concert->tickets - $request->quantity;
        $user->balance = $user->balance - $price;
        $organizer->balance = $organizer->balance + $price;



        $ticket->save();
        $concert->save();
        $user->save();
        $organizer->save();
return back()->with('success','Ticket Has been purchased.The Price is deducted from your wallet');
    }

    public function refundTicket($id)
    {
        $ticket = Ticket::find($id);
        $user = User::find($ticket->user_id);
        $concert = Concert::find($ticket->concert_id);
        $organizer = Organizer::find($concert->organizer_id);
        $concert->tickets  = $concert->tickets+$ticket->numberofticket;
        $user->balance = $user->balance + $ticket->totalprice;
        $organizer->balance = $organizer->balance - $ticket->totalprice;
        $ticket->delete();
        $concert->save();
        $user->save();
        $organizer->save();
        return back()->with('alert','ticket has been successfully Refunded');
    }
}
