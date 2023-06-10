<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketFacilityRequest;
use App\Models\{Facility, Ticket, TicketFacility, User,};
use App\Notifications\TicketCreated;
use App\Services\AlertService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class TicketController extends Controller
{
    protected $user;
    protected $facilities;
    protected $tickets;
    protected $ticket_facilities;
    protected $alertService;

    public function __construct(
        User           $user,
        Facility       $facilities,
        Ticket         $tickets,
        TicketFacility $ticket_facilities,
        AlertService   $alertService
    )
    {
        $this->user = $user;
        $this->facilities = $facilities;
        $this->tickets = $tickets;
        $this->ticket_facilities = $ticket_facilities;
        $this->alertService = $alertService;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);

        $facilities = collect([]);

        $tickets = Ticket::where('deleted_at', null)->orderBy('id')->get();

        return view('noc.tickets.index', compact('user', 'facilities', 'tickets'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        if ($searchTerm === null || $searchTerm === '' || strlen($searchTerm) < 3) {
            $this->alertService->alert('success', 'Campo de pesquisa precisa ter no mínimo 3 caracteres!');
            return redirect()->route('noc.tickets.index');
        }

        $facilities = Facility::where('name', 'like', "%{$searchTerm}%")->whereNull('deleted_at')->orderBy('id')->get();
        $tickets = Ticket::where('deleted_at', null)->orderBy('id')->get();

        return view('noc.tickets.index', compact('facilities', 'tickets'));
    }

    public function store(StoreTicketFacilityRequest $request)
    {
        $user = Auth::user();
        $request = $request->validated();

        $facility = Facility::where('deleted_at', null)->findOrFail($request['facility_id']);
        $ticket = Ticket::where('deleted_at', null)->findOrFail($request['ticket_id']);

        try {
            $date = now();
            $year = $date->format('Y');
            $month = $date->format('m');
            $day = $date->format('d');

            $latestProtocol = TicketFacility::where('noc_protocol', 'LIKE', $year.$month.$day.'%')
                ->orderBy('noc_protocol', 'desc')
                ->first();

            if ($latestProtocol) {
                $latestNumber = intval(substr($latestProtocol->noc_protocol, -1)) + 1;
                $noc_protocol = $year.$month.$day.$latestNumber;
            } else {
                $noc_protocol = $year.$month.$day.'1';
            }

            $ticketFacilityData = [
                'facility_id' => $facility->id,
                'ticket_id' => $ticket->id,
                'noc_protocol' => $noc_protocol,
            ];

            $ticketFacility = TicketFacility::create($ticketFacilityData);
            $this->alertService->alert('success', 'Alerta registrado com sucesso!');

            Notification::route('mail', 'noc@atelietec.com.br')->notify(new TicketCreated($user, $ticketFacility));
            $user->notify(new TicketCreated($user, $ticketFacility));

            return redirect()->route('noc.index');
        } catch (PDOException $e) {
            $response['status'] = 0;
            $response['msg'] = "Ops, algo inesperado aconteceu...";
            $response['error'] = $e->getMessage();

            return $response;
        }
    }

}
