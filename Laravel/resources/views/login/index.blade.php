@extends('layout.site')

@section('titulo', 'Login')

@section('conteudo')

<div class="container">
    <h3 class="center">Entrar no Sistema</h3>

    <div class="row">

        <form method="post" action="{{ route('site.login.entrar') }}">
            {{ csrf_field() }}

            {{-- titulo --}}
            <div class="input-field">
                <input type="text" name="email">
                <label for="">E-mail</label>
            </div>

            {{-- descricao --}}
            <div class="input-field">
                <input type="password" name="senha">
                <label for="">Senha</label>
            </div>

            <button class="btn blue darken-4">Entrar</button>
        </form>

    </div>
</div>

@endsection