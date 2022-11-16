@extends('layouts.main')
 
@section('title', 'Star-Fox Company')

@section('content')
    <h1>Tela que mostrará as informações dos alunos, também com a opção de alterar a senha. Essa tela aparecerá depois da tela de alunos.</h1>

    @foreach ($alunos as $aluno)
    <p>ID: {{ $aluno->RA }}</p>
    <p>Nome: {{ $aluno->nome }}</p>
    <p>Filme: {{ $aluno->filme }}</p>
    <p>Senha: {{ $aluno->senha }}</p>
    <p>Email: {{ $aluno->email }}</p>
    <p>CPF: {{ $aluno->CPF }}</p>    
@endforeach


@endsection