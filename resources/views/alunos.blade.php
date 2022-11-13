@extends('layouts.main')
 
@section('title', 'Star-Fox Company')

@section('content')
    <h1>tela onde o aluno vai inserri os dados para acessar seu cadastro</h1>

    @foreach ($aluno as $aluno)
        <p>Nome: {{ $aluno->nome }}</p>
        <p>Matricula: {{ $aluno->filme }}</p>
        <p>Senha: {{ $aluno->senha }}</p>
        
    @endforeach

@endsection