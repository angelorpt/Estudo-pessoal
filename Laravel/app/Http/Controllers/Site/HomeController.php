<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    public function index(){
        // Paginacao
        $cursos = Curso::paginate(2);
        return view('home', compact('cursos'));
    }
}
