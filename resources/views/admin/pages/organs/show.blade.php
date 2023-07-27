@extends('layouts.app')

@section('title', 'Prefeituras')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">{{$organ->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @include('admin.includes.notification')
                <div class="form-horizontal">
                    <div class="form-body">
{{--                        <hr class="mt-0 mb-5">--}}
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informações Gerais</h4>
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Nome:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">E-mail:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->email}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">CNPJ/CPF:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->number_document}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Telefone Comercial:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->telefone}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Celular:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->celular}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Data de Cadastro:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{\Carbon\Carbon::parse($organ->created_at)->format('d/m/Y - H:i')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Última Atualização:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{\Carbon\Carbon::parse($organ->updated_at)->format('d/m/Y - H:i')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informações de Endereço</h4>
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">CEP:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->cep}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Logradouro:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->logradouro}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Cidade:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->cidade}} - {{$organ->estado}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Número:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->numero}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Bairro:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$organ->bairro}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4 font-weight-bold">Complemento:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{$organ->complemento}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informações Administrativas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Status:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{ucfirst($organ->bol_active)}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="card-footer d-flex">
                                <a href="{{route('prefeitura.index')}}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Voltar</a>
                                <form method="post" action="{{route('prefeitura.destroy', $organ->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Desativar Prefeitura</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{url('assets/js/pages/contact/contact.js')}}"></script>
@endsection
