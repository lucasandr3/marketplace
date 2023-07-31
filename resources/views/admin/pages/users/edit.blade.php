@extends('layouts.app')

@section('title', "{$user->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('planos.index')}}">Usuários</a></li>
            <li class="breadcrumb-item active">Editar - {{$user->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('usuarios.update', $user->id)}}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$user->name}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Digite o nome do perfil"
                                   aria-label="name" aria-describedby="basic-addon1" name="name"
                                   value="{{ $user->name }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Informe o e-mail"
                                   aria-label="email" aria-describedby="basic-addon1"
                                   name="email"
                                   value="{{ $user->email }}" required autocomplete="email"
                                   autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Informe a senha"
                                   aria-label="password" aria-describedby="basic-addon1"
                                   name="password"
                                   value="{{ old('password') }}" autocomplete="password"
                                   autofocus>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('usuarios.index')}}" class="btn btn-outline-secondary">
                           <i class="fa fa-arrow-left"></i> Descartar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Salvar alterações
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
