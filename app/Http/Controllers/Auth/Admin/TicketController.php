<?php

namespace App\Http\Controllers\Auth\Admin;

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
    public function showTicket()
    {
        $ticket = Ticket::all();
        return view('admin.ticketlist',compact('ticket'));
    }




    public function deleteTicket($id)
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
        return back()->with('danger','Ticket Has been deleted.The Price has been refunded to the Customer');
    }
}
