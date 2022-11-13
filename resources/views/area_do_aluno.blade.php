@extends('layouts.main')
 
@section('title', 'Star-Fox Company')

@section('content')
    <h1>tela que vai mostra as informações dos alunos e tem a opção de auterar a senha essa tela vai aparecer depois da tela de alunos </h1>

    @foreach ($alunos as $alunos)
        <p>Nome: {{ $alunos->nome }}</p>
        <p>Matricula: {{ $alunos->matricula }}</p>
        <p>Curso: {{ $alunos->curso }}</p>
        <p>Senha: {{ $alunos->senha }}</p>
        
    @endforeach


@endsection