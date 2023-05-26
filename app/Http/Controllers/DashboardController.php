<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Facility,
};

class DashboardController extends Controller
{
    protected $user;
    protected $facilities;

    public function __construct(
        User $user,
        Facility $facilities,
    )
    {
        $this->user = $user;
        $this->facilities = $facilities;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $facilities = Facility::where('deleted_at', null)->get();

        return view('noc.index', compact('user', 'facilities'));
    }
}
