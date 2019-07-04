<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{

    public function index() {
        $contatos = [
            ["nome"=>"Maria", "telefone"=>"1234564"],
            ["nome"=>"Pedro", "telefone"=>"6547894"]
        ];

        $contatos2 = [
            (object)["nome"=>"Maria", "telefone"=>"1234564"],
            (object)["nome"=>"Pedro", "telefone"=>"6547894"]
        ];   
        
        $objContato   = new Contato();
        $listaContato = $objContato->lista();

        dd($listaContato->nome);
        
        return view('contato.index', compact('contatos','contatos2'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Criar";
    }
    
    public function editar(){
        return "Editar";
    }    
}
