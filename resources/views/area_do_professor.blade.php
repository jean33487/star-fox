@extends('layouts.main')
 
@section('title', 'Area do Professor')

@section('content')
    <h1>tela que vai mostra as informações dos alunos e tem a opção de auterar a senha essa tela vai aparecer depois da tela de alunos </h1>

    @foreach ($professores as $professor)
    <p>ID: {{ $professor->RA }}</p>
    <p>Nome: {{ $professor->nome }}</p>
    <p>Filme: {{ $professor->filme }}</p>
    <p>Senha: {{ $professor->senha }}</p>
    <p>Email: {{ $professor->email }}</p>
    <p>CPF: {{ $professor->CPF }}</p>    
@endforeach


@endsection