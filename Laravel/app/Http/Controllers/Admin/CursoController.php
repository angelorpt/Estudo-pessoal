<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }


    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
        
        $dados = $req->all();

        // dd($dados);

        // verifica o checkbox do publicado
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        // tratamento da imagem
        if ($req->hasFile('imagem')) {
            $imagem     = $req->file('imagem');
            $num        = rand(1111,9999);
            $dir        = "img/cursos/";
            $ext        = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ext;

            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados); // Salva os arquivos no banco de dados em massa

        return redirect()->route('admin.cursos');
    }

    public function editar($id){
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }


    public function atualizar(Request $req, $id)
    {        
        $dados = $req->all();

        // dd($dados);

        // verifica o checkbox do publicado
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        // tratamento da imagem
        if ($req->hasFile('imagem')) {
            $imagem     = $req->file('imagem');
            $num        = rand(1111,9999);
            $dir        = "img/cursos/";
            $ext        = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ext;

            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados); // Faz a atualização dos dados do registro
        
        return redirect()->route('admin.cursos');
    }    

    public function deletar($id) 
    {        
        Curso::find($id)->delete(); // Deleta o registro
        return redirect()->route('admin.cursos');
    }       

}
