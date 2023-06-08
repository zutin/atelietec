<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    TicketFacility,
};
use App\Notifications\TicketFinished;
use App\Services\AlertService;

class DashboardController extends Controller
{
    protected $user;
    protected $ticketFacilities;
    protected $alertService;

    public function __construct(
        User $user,
        TicketFacility $ticketFacilities,
        AlertService $alertService
    )
    {
        $this->user = $user;
        $this->ticketFacilities = $ticketFacilities;
        $this->alertService = $alertService;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $ticketFacilities = TicketFacility::withTrashed()->orderBy('deleted_at', 'asc')->orderBy('id')->get();

        return view('noc.index', compact('user', 'ticketFacilities'));
    }

    public function search(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $search = $request->input('search');

        if ($search === null || $search === '') {
            $this->alertService->alert('success', 'Campo de pesquisa está vazio!');
            return redirect()->route('noc.index');
        }

        $ticketFacilities = TicketFacility::whereHas('facility', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->orWhere('id', $search)
            ->orWhere('protocol', $search)->withTrashed()->get();

        return view('noc.index', compact('user', 'ticketFacilities'));
    }

    public function update(Request $request, $ticketFacility)
    {
        try {
            $request->validate([
                'protocol' => ['required', 'string', 'min:4', 'max:20'],
            ], [
                'protocol.required' => 'O número de protocolo é obrigatório.',
                'protocol.string' => 'O campo protocolo deve ser uma string.',
                'protocol.min' => 'O número de protocolo deve ter no mínimo :min caracteres.',
                'protocol.max' => 'O número de protocolo deve ter no máximo :max caracteres.',
            ]);

            $ticket = TicketFacility::withTrashed()->findOrFail($ticketFacility);
            $ticket->protocol = $request->input('protocol');
            $ticket->save();

            $this->alertService->alert('success', 'Protocolo da operadora adicionado com sucesso!');
            return redirect()->route('noc.index')->with('success', 'Protocolo da operadora adicionado com sucesso!');
        } catch (\Exception $e) {
            $this->alertService->alert('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function destroy(TicketFacility $call)
    {
        $call->delete();
        $this->alertService->alert('success', 'Chamado finalizado com sucesso!');
        $user = Auth::user();

        $user->notify(new TicketFinished($user, $call));

        return redirect()->route('noc.index');
    }

}
