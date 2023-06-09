<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarrierRequest;
use App\Models\{Carrier, User,};
use App\Services\AlertService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrierController extends Controller
{
    protected $user;
    protected $carriers;
    protected $alertService;

    public function __construct(
        User         $user,
        Carrier      $carriers,
        AlertService $alertService
    )
    {
        $this->user = $user;
        $this->carriers = $carriers;
        $this->alertService = $alertService;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->authorize('isAdmin', $user);

        $carriers = Carrier::where('deleted_at', null)->orderBy('id')->get();

        return view('noc.carriers.index', compact('user', 'carriers'));
    }

    public function search(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->authorize('isAdmin', $user);

        $search = $request->input('search');

        if ($search === null || $search === '') {
            $this->alertService->alert('success', 'Campo de pesquisa está vazio!');
            return redirect()->route('noc.carriers.index');
        }

        $carriers = Carrier::where('deleted_at', null)
            ->where('name', 'like', '%' . $search . '%')
            ->orderBy('id')->get();

        return view('noc.carriers.index', compact('user', 'carriers'));
    }

    public function create()
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->authorize('isAdmin', $user);

        return view('noc.carriers.create');
    }

    public function store(StoreCarrierRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->authorize('isAdmin', $user);

        $request = $request->validated();
        try {
            $carrier = Carrier::create($request);
            $this->alertService->alert('success', 'Operadora cadastrada com sucesso!');

            return redirect()->route('noc.carriers.index');
        } catch (PDOException $e) {
            $response['status'] = 0;
            $response['msg'] = "Ops, algo inesperado aconteceu...";
            $response['error'] = $e->getMessage();
        }

        return $response;
    }

    public function destroy(Carrier $carrier)
    {
        $user = User::findOrFail(Auth::user()->id);
        $this->authorize('isAdmin', $user);

        $carrier->delete();
        $this->alertService->alert('success', 'Operadora removida com sucesso!');

        return redirect()->route('noc.carriers.index');
    }
}
