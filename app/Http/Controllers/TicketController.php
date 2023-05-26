<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Facility,
    Ticket,
    TicketFacility,
};

class TicketController extends Controller
{
    protected $user;
    protected $facilities;
    protected $tickets;
    protected $ticket_facilities;

    public function __construct(
        User $user,
        Facility $facilities,
        Ticket $tickets,
        TicketFacility $ticket_facilities,
    )
    {
        $this->user = $user;
        $this->facilities = $facilities;
        $this->tickets = $tickets;
        $this->ticket_facilities = $ticket_facilities;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $facilities = Facility::all();
        $tickets = Ticket::all();
        $ticket_facilities = TicketFacility::all();

        return view('noc.tickets.index', compact('user', 'facilities', 'tickets', 'ticket_facilities'));
    }
}
