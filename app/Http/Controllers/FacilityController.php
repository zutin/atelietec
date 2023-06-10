<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilityRequest;
use App\Rules\CarrierExistsRule;
use App\Models\{Carrier, Facility, User,};
use App\Services\AlertService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{
    protected $user;
    protected $alertService;
    protected $facilities;
    protected $carrier;

    public function __construct(
        User         $user,
        Facility     $facilities,
        AlertService $alertService,
        Carrier      $carrier
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
        $this->authorize('isAdmin', $user);

        $facilities = Facility::where('deleted_at', null)
        ->whereHas('carrier', function ($query) {
            $query->where('deleted_at', null);
        })->orderBy('id')->get();

        return view('noc.facilities.index', compact('user', 'facilities'));
    }

    public function search(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->authorize('isAdmin', $user);

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
        $user = Auth::user();
        $this->authorize('isAdmin', $user);

        $carriers = Carrier::where('deleted_at', null)->get();

        return view('noc.facilities.create', compact('carriers'));
    }

    public function store(StoreFacilityRequest $request)
    {
        $user = Auth::user();
        $this->authorize('isAdmin', $user);

        $request = $request->validated();
        $carrier = Carrier::where('deleted_at', null)->findOrFail($request['carrier_id']);

        try {
            $facility = $carrier->facilities()->create($request);
            $this->alertService->alert('success', 'Unidade cadastrada com sucesso!');

            return redirect()->route('noc.facilities.index');
        } catch (PDOException $e) {
            $response['status'] = 0;
            $response['msg'] = "Ops, algo inesperado aconteceu...";
            $response['error'] = $e->getMessage();
        }

        return $response;
    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        $carriers = Carrier::where('deleted_at', null)->get();

        if (!$facility) {
            $this->alertService->alert('success', 'Unidade não encontrada!');
            return redirect()->back();
        }

        return view('noc.facilities.edit', compact('facility', 'carriers'));
    }

    public function update(Request $request, $id)
    {
        try {
            $facility = Facility::findOrFail($id);

            if (!$facility) {
                $this->alertService->alert('success', 'Unidade não encontrada!');
                return redirect()->route('noc.facilities.index');
            }

            $validatedData = $request->validate([
                'name' => ['required', 'max:255'],
                'address' => ['required', 'max:255'],
                'designation' => ['max:255'],
                'carrier_id' => ['required', new CarrierExistsRule],
            ]);

            $facility->name = $validatedData['name'];
            $facility->address = $validatedData['address'];
            $facility->designation = $validatedData['designation'];
            $facility->carrier_id = $validatedData['carrier_id'];

            $facility->save();

            $this->alertService->alert('success', 'Unidade atualizada com sucesso!');
            return redirect()->route('noc.facilities.index');
        } catch (\Exception $e) {
            $this->alertService->alert('success', 'Ocorreu um erro ao atualizar a unidade: ' . $e->getMessage());
            return redirect()->route('noc.facilities.index');
        }
    }

    public function destroy(Facility $facility)
    {
        $user = Auth::user();
        $this->authorize('isAdmin', $user);

        $facility->delete();
        $this->alertService->alert('success', 'Unidade excluída com sucesso!');

        return redirect()->route('noc.facilities.index');
    }

}
