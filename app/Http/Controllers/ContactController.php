<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $email = $request->input('email');

        return view('home.contact', compact('email'));
    }

}
