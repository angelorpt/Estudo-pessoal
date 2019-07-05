<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth; // validação do usuário


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $request)
    {
        $dados    = $request->all();
        $email    = $dados['email'];
        $password = $dados['senha'];

        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('site.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }

}
