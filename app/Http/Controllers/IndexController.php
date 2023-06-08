<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
};
use App\Services\AlertService;

class IndexController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        return redirect()->route('contact', ['email' => $email]);
    }

}
