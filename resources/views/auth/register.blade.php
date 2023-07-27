@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="max-width: 1120px;">
            <div id="loginform">
                <div class="logo text-center mb-3">
                    {{--                    <h3 class="box-title mb-3">OnLicitação</h3>--}}
                    <img src="{{url('assets/images/logo-blue.png')}}" width="80px"/>
                    <h2>Venda Mais</h2>
                    <h4><strong>{{session('plan')->name}}</strong></h4>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Informações de Contato</strong></h4>
                        <form class="form-horizontal mt-3" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label col-form-label">CNPJ/CPF: <small class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" placeholder="Digite seu Documento"
                                               aria-label="Username" aria-describedby="basic-addon1" name="documento"
                                               value="{{ old('documento') }}" required autocomplete="documento" autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label col-form-label">Razão Social: <small class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" placeholder="Digite a razão social"
                                               aria-label="Username" aria-describedby="basic-addon1" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label col-form-label">Nome Fantasia: <small class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" placeholder="Digite o nome fantasia"
                                               aria-label="Username" aria-describedby="basic-addon1" name="fantasy"
                                               value="{{ old('fantasy') }}" required autocomplete="fantasy" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label col-form-label">E-mail: <small class="text-primary">( obrigatório )</small></label>
                                        <input type="email" class="form-control" placeholder="Digite o e-mail"
                                               aria-label="Username" value="{{old('email')}}" aria-describedby="basic-addon1" name="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label col-form-label">Crie uma Senha: <small class="text-primary">( obrigatório )</small></label>
                                        <input type="password" class="form-control" placeholder="Digite a senha"
                                               aria-label="Username" aria-describedby="basic-addon1" name="fantasy"
                                                required autocomplete="fantasy" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label col-form-label">Repita a Senha: <small class="text-primary">( obrigatório )</small></label>
                                        <input type="password" class="form-control" placeholder="Digite sua senha"
                                               aria-label="Username" aria-describedby="basic-addon1" name="password" required>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mt-4"><strong>Informações de Endereço</strong></h4>
                            <x-address></x-address>


                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group text-center mt-4">
                                        <div class="col-md-12" style="margin-left: -15px;">
                                            <button
                                                class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                                type="submit">Cadastrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-4">
                                <div class="col-sm-12 justify-content-center d-flex">
                                    <p>Venda Mais {{date('Y')}}</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

