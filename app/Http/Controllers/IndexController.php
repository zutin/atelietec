<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
