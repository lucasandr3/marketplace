@extends('layouts.app')

@section('title', "Onlicitação")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('empresa.index', $company->id)}}">Dados da Empresa</a></li>
            <li class="breadcrumb-item active">{{$company->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dados da empresa {{$company->name}}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Nome da Empresa:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->name}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">E-mail:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">CNPJ:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->documento}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Logotipo:</label>
                                <div class="col-md-8">
                                    <img src="{{url("assets/images/{$company->logo}")}}" width="80" class="radius-3"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Dados do Plano</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Nome do Plano:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->plan->name}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">E-mail:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\App\Utils\Helpers::formatMoney($company->plan->price)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Subscrição Ativa:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">
                                        @if($company->subscription_active === 1)
                                            Ativo
                                        @else
                                            Inativo
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Subscrição Suspensa:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">
                                        @if($company->subscription_suspended === 1)
                                            Suspensa
                                        @else
                                            Ativa
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Descrição:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->plan->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-header">
                    <h4 class="card-title">Informações de Endereço</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">CEP:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->address()->zipcode}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">CEP:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->address()->street}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Cidade:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->address()->city}} - {{$company->address()->uf}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Bairro:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->address()->neighborhood}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Número:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->address()->number}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Complemento:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$company->address()->complement ?? 'Não Informado'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-header">
                        <h4 class="card-title">Informações Administrativas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Status:</label>
                                    <div class="col-md-8">
                                        <p class="{{$company->status->class}} mb-0">
                                            {{$company->status->label}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($company->created_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($company->updated_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex">
                        <a href="{{route('empresa.edit')}}" type="submit" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i> Editar Dados
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
