@extends('layouts.main')
 
@section('title', 'Star-Fox Company')

@section('content')
    <h1>tela que vai mostra as informações dos alunos e tem a opção de auterar a senha essa tela vai aparecer depois da tela de alunos </h1>

    @foreach ($alunos as $aluno)
    <p>ID: {{ $aluno->id }}</p>
    <p>Nome: {{ $aluno->nome }}</p>
    <p>Matricula: {{ $aluno->filme }}</p>
    <p>Senha: {{ $aluno->senha }}</p>
    
@endforeach


@endsection