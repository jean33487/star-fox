@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Settings')

@section('content')

   <form action="/showmaterias">
    <button type="submit">Veja materias</button>
   </form>

    @foreach($user->materiasAsParticipant as $materiasusuario)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$materiasusuario->nome}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$materiasusuario->professor}}</h6>
                <p class="card-text">{{$materiasusuario->conteudo}}</p>
                <p class="card-text">{{$materiasusuario->descricao}}</p>
                <p class="card-text">{{$materiasusuario->tempo}}</p>
            </div>
        </div>
    @endforeach

@endsection