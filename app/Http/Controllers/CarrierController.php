<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Facility,
    Carrier,
};

class CarrierController extends Controller
{
    protected $user;
    protected $facilities;
    protected $carriers;
    protected $carrier_facilities;

    public function __construct(
        User $user,
        Facility $facilities,
        Carrier $carriers,
    )
    {
        $this->user = $user;
        $this->facilities = $facilities;
        $this->carriers = $carriers;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $facilities = Facility::where('deleted_at', null)->get();
        $carriers = Carrier::where('deleted_at', null)->get();

        return view('noc.carriers.index', compact('user', 'facilities', 'carriers'));
    }
}
