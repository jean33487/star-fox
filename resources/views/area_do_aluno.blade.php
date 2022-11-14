@extends('layouts.main')
 
@section('title', 'Star-Fox Company')

@section('content')
    <h1>tela que vai mostra as informações dos alunos e tem a opção de auterar a senha essa tela vai aparecer depois da tela de alunos </h1>

    @foreach ($alunos as $aluno)
    <p>ID: {{ $aluno->RA }}</p>
    <p>Nome: {{ $aluno->nome }}</p>
    <p>Filme: {{ $aluno->filme }}</p>
    <p>Senha: {{ $aluno->senha }}</p>
    <p>Email: {{ $aluno->email }}</p>
    <p>CPF: {{ $aluno->CPF }}</p>    
@endforeach


@endsection