<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Carrier,
};
use App\Http\Requests\StoreCarrierRequest;

class CarrierController extends Controller
{
    protected $user;
    protected $carriers;

    public function __construct(
        User $user,
        Carrier $carriers,
    )
    {
        $this->user = $user;
        $this->carriers = $carriers;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $carriers = Carrier::where('deleted_at', null)->get();

        return view('noc.carriers.index', compact('user',  'carriers'));
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

        return redirect()->route('noc.carriers.index');
    }
}
