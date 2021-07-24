<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function home(Request $request) {
        return view('home');
    }
}
