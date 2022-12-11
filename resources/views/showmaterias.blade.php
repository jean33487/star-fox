<div id="materias-conteiner" class="col-md-12">
    <h2>Curso</h2>
    <p>pode escolher e se inscrever em um curso</p>
    <div id="card-conteiner" class="row">
        @foreach($materias as $materia)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$materia->nome}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$materia->professor}}</h6>
                <p class="card-text">{{$materia->conteudo}}</p>
                <p class="card-text">{{$materia->descricao}}</p>
                <p class="card-text">{{$materia->tempo}}</p>

            </div>
        </div>
        <form action="/materias/join/{{ $materia->id }}" method="POST">
            @csrf
            <a href="/materias/join/{{ $materia->id }}" 
                class="btn btn-primary"
                id="materias-submit"
                onclick="materia.preventDefault();
                this.closed('form').submit();">
                Inscrever-se
            </a>
        </form>
        @endforeach
    </div>
    <form action="/register">
    <button type='submit'>voltar</button>
    </form>

</div>