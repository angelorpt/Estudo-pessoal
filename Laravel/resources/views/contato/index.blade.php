@extends('layout.site')
@section('titulo', 'Contatos')

@section('conteudo')
    <h2>Teste</h2>
    @foreach ($contatos2 as $contato)
        <p>{{$contato->nome}} - {{$contato->telefone}}</p>
    @endforeach
@endsection