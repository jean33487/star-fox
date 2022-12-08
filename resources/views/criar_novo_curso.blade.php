
<h1>Crie um novo Curso</h1>

<div id="materia-create-container" class="col-md-6 offset-md-3">

<h1>Crie um Curso</h1>

<form action="/criar_novo_curso" method="POST">
@csrf
    <div class="from-group">
    
            <label for="title">Nome do Curso:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Curso">

    </div>

    <div class="from-group">
    
        <label for="title">Professor:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="professor">

</div>

    <div class="from-group">
    
        <label for="title">Conteudo:</label>
        <input type="text" class="form-control" id="conteudo " name="conteudo" placeholder="Conteudo do Curso">

    </div>

    <div class="from-group">
    
    <label for="title">Descrição:</label>
    <textarea name="descricao" id="descricao" class="form-control" placeholder="descreva um pouco esse curso"></textarea>

    <div class="from-group">
    
        <label for="title">Duração:</label>
        <input type="text" class="form-control" id="tempo" name="tempo" placeholder="Tempo de duração">

    </div>

    <input type="submit" class="btn btm-primary" valeu="Criar Curso">

</form>

</div>

<a href="/register" class="button">VOLTA</a>