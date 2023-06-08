<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
};
use App\Services\AlertService;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $email = $request->input('email');

        return view('home.contact', compact('email'));
    }

}
