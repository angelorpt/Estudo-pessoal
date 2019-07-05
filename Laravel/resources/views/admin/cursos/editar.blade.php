@extends('layout.site')

@section('titulo', 'Editar')

@section('conteudo')

    <div class="container">
        <h3 class="center">Alterando Cursos</h3>

        <div class="row">

            <form method="post" action="{{ route('admin.cursos.atualizar', $registro->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')
                <button class="btn blue darken-4">Atualizar</button>
            </form>
            
        </div>
    </div>

@endsection