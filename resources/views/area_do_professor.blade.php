@extends('layouts.main')
 
@section('title', 'Area do Professor')

@section('content')
    <h1>Tela que mostrará as informações dos professores, também com a opção de alterar a senha. Essa tela aparecerá depois da tela de professores.</h1>

    @foreach ($professores as $professor)
    <p>ID: {{ $professor->RA }}</p>
    <p>Nome: {{ $professor->nome }}</p>
    <p>Filme: {{ $professor->filme }}</p>
    <p>Senha: {{ $professor->senha }}</p>
    <p>Email: {{ $professor->email }}</p>
    <p>CPF: {{ $professor->CPF }}</p>    
@endforeach


@endsection