@extends('layouts.main')

@section('title', 'Professor')

@section('content')
    <h1>Seção para os professores ver as materias dele e o perfio dele</h1>

    @foreach ($professores as $professor)
        <p>ID: {{ $professor->id }}</p>
        <p>Nome: {{ $professor->nome }}</p>
        <p>Matricula: {{ $professor->filme }}</p>
        <p>Senha: {{ $professor->senha }}</p>
    
@endforeach

@endsection