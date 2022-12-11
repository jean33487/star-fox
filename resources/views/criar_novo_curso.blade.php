@extends('layouts.cursolayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crie um novo Curso') }}</div>

<form action="/criar_novo_curso" method="POST">
@csrf
    <div class="from-group">
        <div class="row mb-3">
            <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Curso') }}</label>

            <div class="col-md-6">
                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>

    <div class="from-group">
        <div class="row mb-3">
            <label for="professor" class="col-md-4 col-form-label text-md-end">{{ __('Professor') }}</label>

            <div class="col-md-6">
                <input id="professor" type="text" class="form-control @error('professor') is-invalid @enderror" name="professor" value="{{ old('professor') }}" required autocomplete="professor" autofocus>

                @error('professor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

</div>

    <div class="from-group">
    
        <div class="row mb-3">
            <label for="conteudo" class="col-md-4 col-form-label text-md-end">{{ __('Conteúdo') }}</label>

            <div class="col-md-6">
                <input id="conteudo" type="text" class="form-control @error('conteudo') is-invalid @enderror" name="conteudo" value="{{ old('conteudo') }}" required autocomplete="conteudo" autofocus>

                @error('conteudo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="from-group">
    
        <div class="row mb-3">
            <label for="descricao" class="col-md-4 col-form-label text-md-end">{{ __('Descrição') }}</label>

            <div class="col-md-6">
                <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" required autocomplete="descricao" autofocus>

                @error('descricao')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    <div class="from-group">
    
        <div class="row mb-3">
            <label for="tempo" class="col-md-4 col-form-label text-md-end">{{ __('Duração') }}</label>

            <div class="col-md-6">
                <input id="tempo" type="text" class="form-control @error('tempo') is-invalid @enderror" name="tempo" value="{{ old('tempo') }}" required autocomplete="tempo" autofocus>

                @error('tempo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Enviar') }}
            </button>
        </div>
    </div>
</form>

</div>

<a href="/register" class="button">VOLTA</a>