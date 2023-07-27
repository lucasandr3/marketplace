@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('register.user') }}">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h3 class="h3 mb-3 fw-normal">Cadastro Usuário</h3>

        <div class="form-floating">
            <input type="text" class="form-control" name="name" placeholder="Nome">
            <label>Nome</label>
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
            <label>E-mail</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="password" placeholder="Senha">
            <label>Senha</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha">
            <label>Confirme a senha</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Criar conta</button>
        <div class="mt-2">
            <a href="{{route('login')}}">já tenho conta</a>
        </div>
    </form>
@endsection
