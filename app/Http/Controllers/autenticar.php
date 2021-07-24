<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastros;

class autenticar extends Controller
{
    public function login(Request $request){
        $user = cadastros::where('email', '=' , $request->email)->first();

        if($user){
            Session::put('usuario', ['nome' => 'Wallace']);
            echo "sessão iniciada";
        }else{
            echo "sessão não iniciada";
        }

    }
}
