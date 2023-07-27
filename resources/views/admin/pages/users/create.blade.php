@extends('layouts.app')

@section('title', 'Usuários')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('planos.index')}}">Usuários</a></li>
            <li class="breadcrumb-item active">Novo Usuário</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('usuarios.store')}}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Usuários</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Digite o nome do usuário"
                                   aria-label="name" aria-describedby="basic-addon1" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Informe o e-mail"
                                   aria-label="email" aria-describedby="basic-addon1"
                                   name="email"
                                   value="{{ old('email') }}" required autocomplete="email"
                                   autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Informe a senha"
                                   aria-label="password" aria-describedby="basic-addon1"
                                   name="password"
                                   value="{{ old('password') }}" required autocomplete="password"
                                   autofocus>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('usuarios.index')}}" class="btn btn-outline-secondary">
                           <i class="fa fa-arrow-left"></i> Descartar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
