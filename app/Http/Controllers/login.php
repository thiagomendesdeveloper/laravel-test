<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastros;

class login extends Controller
{
    //
    public function login(){
        return view('pages/cadastrar');
    }

    public function cadastros(Request $request){
        // dd($request->all());

        $user = cadastros::where('email', '=' , $request->email)->first();

        if($user){
            echo "usuario já existente";
        }else{
            cadastros::create([
                'nome'=>$request->nome,
                'email'=>$request->email,
                'custo'=>$request->email,
                'telefone'=>$request->fone,
                'senha'=>$request->pass,
            ]);

            echo "usuario cadastrado com sucesso";
        }

        // cadastros::create([
        //     'nome'=>$request->nome,
        //     'email'=>$request->email,
        //     'custo'=>$request->email,
        //     'telefone'=>$request->fone,
        //     'senha'=>$request->pass,
        // ]);

        // return view("home")->width('msg', "usuario cadastrado com sucesso");
        //para poder usar acrescete um if na pagina de home com session('msg')
    }

    public function entrar(){
        return view('pages/entrar');
    }


}
