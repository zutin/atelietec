<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Carrier,
};
use App\Services\AlertService;
use App\Http\Requests\StoreCarrierRequest;

class CarrierController extends Controller
{
    protected $user;
    protected $carriers;
    protected $alertService;

    public function __construct(
        User $user,
        Carrier $carriers,
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
        $carriers = Carrier::where('deleted_at', null)->orderBy('id')->get();

        return view('noc.carriers.index', compact('user',  'carriers'));
    }

    public function search(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
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
        return view('noc.carriers.create');
    }

    public function store(StoreCarrierRequest $request)
    {
        $request = $request->validated();
        try{
            $carrier = Carrier::create($request);
            $this->alertService->alert('success', 'Operadora cadastrada com sucesso!');

            return redirect()->route('noc.carriers.index');
        }
        catch(PDOException $e) {
            $response['status'] = 0;
            $response['msg']    = "Ops, algo inesperado aconteceu...";
            $response['error']  = $e->getMessage();
        }

        return $response;
    }

    public function destroy(Carrier $carrier)
    {
        $carrier->delete();
        $this->alertService->alert('success', 'Operadora removida com sucesso!');

        return redirect()->route('noc.carriers.index');
    }
}
