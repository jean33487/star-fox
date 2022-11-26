@extends('layouts.main')
 
@section('title', $aluno->name)

@section('content')
    
<p>Nome: {{ $aluno->name }}</p>
<p>Filme: {{ $aluno->FilmeFavorito }}</p>
<p>Senha: {{ $aluno->senha }}</p>
<p>Email: {{ $aluno->email }}</p>
<p>CPF: {{ $aluno->CPF }}</p> 
<p>CEP: {{ $aluno->cep }}</p> 
<p>Rua: {{ $aluno->rua }}</p> 
<p>Bairro: {{ $aluno->bairro }}</p> 
<p>Cidade: {{ $aluno->cidade}}</p> 
<p>Estado: {{ $aluno->uf }}</p> 


@endsection