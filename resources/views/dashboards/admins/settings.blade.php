@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Cadastros')

@section('content')

<form action="/register">
    <button type="submit">Registrar Users</button>
   </form>
   <form action="/criar_novo_curso">
    <button type="submit">Criar Curso</button>
   </form>

   <form action="/showmaterias">
    <button type="submit">Veja materias</button>
   </form>
@endsection