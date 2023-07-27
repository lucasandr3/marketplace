@extends('layouts.app')

@section('title', 'Unidades')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('stores')}}">Loja</a></li>
            <li class="breadcrumb-item active">Nova Loja</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('stores.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro de Loja</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror @error('name') is-invalid @enderror" name="name"
                                           placeholder="Informe o nome da unidade">
                                    @error('name') <span class="invalid-feedback">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Descrição: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="description"
                                           placeholder="Informe a descrição">
                                    @error('description') <span class="invalid-feedback">{{$message}}</span> @enderror
                                </div>
                            </div>
{{--                            <div class="col-sm-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label col-form-label">E-mail: <small class="text-primary">( obrigatório )</small></label>--}}
{{--                                    <input type="email" class="form-control @error('name') is-invalid @enderror" name="email"--}}
{{--                                           placeholder="Informe o e-mail">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <div class="row">
{{--                            <div class="col-sm-12 col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label col-form-label">CNPJ: <small class="text-primary">( obrigatório )</small></label>--}}
{{--                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="number_document"--}}
{{--                                           placeholder="Informe o documento">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Telefone:
                                        <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                           placeholder="Informe o telefone comercial">
                                    @error('phone') <span class="invalid-feedback">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Ramal / Telefone 2:</label>
                                    <input type="tel" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone"
                                           placeholder="Informe o ramal ou outro telefone">
                                    @error('mobile_phone') <span class="invalid-feedback">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="card-header">--}}
{{--                        <h4 class="card-title">Informações de Endereço</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <x-address></x-address>--}}
{{--                    </div>--}}

                    <div class="card-header">
                        <h4 class="card-title">Logo da Empresa</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">Logotipo: <small class="text-primary">( obrigatório )</small></label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                                @error('logo') <span class="invalid-feedback">{{$message}}</span> @enderror
                            </div>
                        </div>
                    </div>

{{--                    <div class="card-header">--}}
{{--                        <h4 class="card-title">Informações de Status</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label col-form-label">Status: </label>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <input name="bol_active" type="radio" id="customControlValidation4" class="radio-col-green material-inputs" value="1" checked>--}}
{{--                                        <label for="customControlValidation4" class="mb-0 mt-2">Ativo</label>--}}
{{--                                        <input name="bol_active" type="radio" id="customControlValidation5" class="radio-col-green material-inputs" value="0">--}}
{{--                                        <label for="customControlValidation5" class="mb-0 mt-2">Inativo</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

                    <div class="card-footer">
                        <a href="{{route('stores')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Voltar
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
