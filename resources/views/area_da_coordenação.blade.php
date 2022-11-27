@extends('layouts.main')
 
@section('title', 'Star-Fox Company')

@section('content')
    <h1>Essa é a area logada da coordenação onde ela vai poder criar cusrso alunos e administrar todo o resto </h1>
    
    <a href="/register" class="button">Cadastrar Alunos</a>
    <a href="/cadastro_professores" class="button">Cadastrar Professores</a>

    <a href="/criar_novo_curso" class="button">Novo Curso</a>
@endsection