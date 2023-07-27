@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded">
            <div id="loginform">
                <div class="logo text-center">
                    {{--                    <h3 class="box-title mb-3">OnLicitação</h3>--}}
                    <img src="{{url('painel/images/logo-blue.png')}}" width="80px"/>
                    <h2>Marketplace</h2>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal mt-3" method="post" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Digite seu e-mail"
                                       aria-label="Username" aria-describedby="basic-addon1" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Digite sua senha"
                                       aria-label="Username" aria-describedby="basic-addon1" name="password" required>
                            </div>
                            <div class="form-group">
                                <div class="d-flex">
                                    <div class="checkbox checkbox-info pt-0">
                                        <input id="checkbox-signup" type="checkbox"
                                               class="material-inputs chk-col-indigo" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="checkbox-signup"> Manter Conectado </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center mt-4">
                                <div class="col-xs-12">
                                    <button
                                        class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                        type="submit">Entrar
                                    </button>
                                </div>
                            </div>
                            {{--                            <div class="form-group mb-0 mt-4">--}}
                            {{--                                <div class="col-sm-12 justify-content-center d-flex">--}}
                            {{--                                    <p>Esqueceu a senha? <a href="{{ route('password.request') }}"--}}
                            {{--                                                            class="text-info font-weight-normal ml-1">Clique aqui</a>--}}
                            {{--                                    </p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

