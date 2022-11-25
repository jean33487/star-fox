@extends('layouts.app')

@section('content')
<?php $address=getAddress() ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <label> Insira o CEP: </label>
                        <input type="text" name="cep" value="<?php echo $address->cep ?>"> 
                        <input type="submit" value="Buscar"> <br />
                        <label>Rua:
                            <input name="rua" type="text" id="rua" size="60" value="<?php echo $address->logradouro ?>" readonly/></label><br />
                        <label>Bairro:
                            <input name="bairro" type="text" id="bairro" size="40" value="<?php echo $address->bairro ?>" readonly/></label><br />
                        <label>Estado:
                            <input name="uf" type="text" id="uf" size="2" value="<?php echo $address->uf ?>" readonly/></label><br />
                        <label>Casa:
                            <input name="casa" type="text" id="casa" size="4"/></label>
                    </form>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Endereço de Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="UsuarioOficial" class="col-md-4 col-form-label text-md-end">{{ __('Usuário Oficial') }}</label>

                            <div class="col-md-6">
                                <input id="UsuarioOficial" type="text" class="form-control @error('UsuarioOficial') is-invalid @enderror" name="UsuarioOficial" value="{{ old('UsuarioOficial') }}" required autocomplete="UsuarioOficial">

                                @error('UsuarioOficial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="FilmeFavorito" class="col-md-4 col-form-label text-md-end">{{ __('Filme favorito') }}</label>

                            <div class="col-md-6">
                                <input id="FilmeFavorito" type="text" class="form-control @error('FilmeFavorito') is-invalid @enderror" name="FilmeFavorito" value="{{ old('FilmeFavorito') }}" required autocomplete="FilmeFavorito">

                                @error('FilmeFavorito')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="CPF" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                        <div class="col-md-6">
                            <input id="CPF" type="text" class="form-control @error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" required autocomplete="CPF">

                            @error('CPF')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
