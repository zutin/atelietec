<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Facility,
    Carrier,
};
use App\Http\Requests\StoreFacilityRequest;

class FacilityController extends Controller
{
    protected $user;
    protected $facilities;
    protected $carrier;

    public function __construct(
        User $user,
        Facility $facilities,
        Carrier $carrier
    )
    {
        $this->user = $user;
        $this->facilities = $facilities;
        $this->carrier = $carrier;
    }

    public function index()
    {
        $carrier = Carrier::findOrFail(1);
        $user = User::findOrFail(Auth::user()->id);
        $facilities = Facility::where('deleted_at', null)->get();

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

        return redirect()->route('noc.facilities.index');
    }

}
