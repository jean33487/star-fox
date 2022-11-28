@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Perfil')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->picture }}" alt="Foto de Perfil">
              </div>

              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

              <p class="text-muted text-center">Secretario/a</p>


              <a href="#" class="btn btn-primary btn-block"><b>Mudar foto</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Informações Pessoais</a></li>
                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Alterar Senha</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="personal_info">
                  <form class="form-horizontal" method="POST" action="{{ route('adminUpdateInfo') }}" id="AdminInfoForm">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Nome" value="{{ Auth::user()
                        ->name }}"name="name">

                        <span class="text-danger error-text name_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()
                        ->email }}"name="email">
                        <span class="text-danger error-text email_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Usuário Oficial</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Usuário Oficial" value="{{ Auth::user()
                        ->UsuarioOficial }}"name="UsuarioOficial">
                        <span class="text-danger error-text UsuarioOficial_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Filme Favorito</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Filme Favorito" value="{{ Auth::user()
                        ->FilmeFavorito }}"name="FilmeFavorito">
                        <span class="text-danger error-text FilmeFavorito_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Cep</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Cep" value="{{ Auth::user()
                        ->cep }}"name="cep">
                        <span class="text-danger error-text cep_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Rua</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Rua" value="{{ Auth::user()
                        ->rua }}"name="rua">
                        <span class="text-danger error-text rua_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Bairro</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Bairro" value="{{ Auth::user()
                        ->bairro }}"name="bairro">
                        <span class="text-danger error-text bairro_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">UF</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="UF" value="{{ Auth::user()
                        ->uf }}"name="uf">
                        <span class="text-danger error-text uf_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Cidade</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Cidade" value="{{ Auth::user()
                        ->cidade }}"name="cidade">
                        <span class="text-danger error-text cidade_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">CPF</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="CPF" value="{{ Auth::user()
                        ->CPF }}"name="CPF">
                        <span class="text-danger error-text CPF_error "></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Salvar Alterações</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="change_password">
                  <form class="form-horizontal" action="update" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Senha Antiga</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Digite a senha atual">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Nova Senha</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="newpassword" placeholder="Digite a nova senha">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Confirmar Nova Senha</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="cnewpassword" placeholder="Digite a nova senha novamente">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger" valeu="update" >Atualizar Senha</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection