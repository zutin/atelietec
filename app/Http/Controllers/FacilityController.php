<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Facility,
    Carrier,
};
use App\Services\AlertService;
use App\Http\Requests\StoreFacilityRequest;

class FacilityController extends Controller
{
    protected $user;
    protected $alertService;
    protected $facilities;
    protected $carrier;

    public function __construct(
        User $user,
        Facility $facilities,
        AlertService $alertService,
        Carrier $carrier
    )
    {
        $this->user = $user;
        $this->facilities = $facilities;
        $this->carrier = $carrier;
        $this->alertService = $alertService;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $facilities = Facility::where('deleted_at', null)
            ->whereHas('carrier', function ($query) {
                $query->where('deleted_at', null);
            })->orderBy('id')->get();

        return view('noc.facilities.index', compact('user', 'facilities'));
    }

    public function search(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $search = $request->input('search');

        if ($search === null || $search === '') {
            $this->alertService->alert('success', 'Campo de pesquisa está vazio!');
            return redirect()->route('noc.facilities.index');
        }

        $facilities = Facility::where('deleted_at', null)
            ->whereHas('carrier', function ($query) {
                $query->where('deleted_at', null);
            })
            ->where('name', 'like', '%' . $search . '%')
            ->orderBy('id')->get();

        return view('noc.facilities.index', compact('user', 'facilities'));
    }

    public function create()
    {
        $carriers = Carrier::where('deleted_at', null)->get();

        return view('noc.facilities.create', compact('carriers'));
    }

    public function store(StoreFacilityRequest $request)
    {
        $request = $request->validated();
        $carrier = Carrier::where('deleted_at', null)->findOrFail($request['carrier_id']);

        try{
            $facility = $carrier->facilities()->create($request);
            $this->alertService->alert('success', 'Unidade cadastrada com sucesso!');

            return redirect()->route('noc.facilities.index');
        }
        catch(PDOException $e) {
            $response['status'] = 0;
            $response['msg']    = "Ops, algo inesperado aconteceu...";
            $response['error']  = $e->getMessage();
        }

        return $response;
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();
        $this->alertService->alert('success', 'Unidade excluída com sucesso!');

        return redirect()->route('noc.facilities.index');
    }

}
