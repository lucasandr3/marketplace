@extends('layouts.app')

@section('title', 'Fornecedores')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro Fornecedor</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('fornecedores.store')}}">
                @csrf
                @include('admin.includes.notification')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro Fornecedor</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="nome"
                                           placeholder="Informe o nome da empresa">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Fantasia: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="fantasia"
                                           placeholder="Informe o fantasia">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">E-mail: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="Informe o e-mail">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">CNPJ/CPF: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="documento"
                                           placeholder="Informe o documento">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Telefone Comercial:
                                        <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="tel" class="form-control" name="telefone"
                                           placeholder="Informe o telefone comercial">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Celular: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="celular"
                                           placeholder="Informe o celular">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Informações de Endereço</h4>
                    </div>
                    <div class="card-body">
                        <x-address></x-address>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Informações Administrativas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Tipo: </label>
                                    <div class="col-sm-9">
                                        <input name="tipo" type="radio" id="customControlValidation2" class="radio-col-green material-inputs" value="M" checked>
                                        <label for="customControlValidation2" class="mb-0 mt-2">Matriz</label>
                                        <input name="tipo" type="radio" id="customControlValidation3" class="radio-col-green material-inputs" value="F">
                                        <label for="customControlValidation3" class="mb-0 mt-2">Filial</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Status: </label>
                                    <div class="col-sm-9">
                                        <input name="ativo" type="radio" id="customControlValidation4" class="radio-col-green material-inputs" value="ativo" checked>
                                        <label for="customControlValidation4" class="mb-0 mt-2">Ativo</label>
                                        <input name="ativo" type="radio" id="customControlValidation5" class="radio-col-green material-inputs" value="inativo">
                                        <label for="customControlValidation5" class="mb-0 mt-2">Inativo</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('fornecedores.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Cancelar
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
