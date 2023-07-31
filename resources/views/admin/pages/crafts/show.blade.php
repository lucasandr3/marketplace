@extends('layouts.app')

@section('title', 'Ofícios')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">{{$craft->subject}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
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
                                        <label class="control-label text-right col-md-3 font-weight-bold">Número:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$craft->number}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Unidade:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$craft->unit->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Responsável:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$craft->user->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Orgão:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$craft->organ->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Títutlo:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$craft->subject}} </p>
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
                                            <p class="form-control-static"> {{$craft->registration}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3 font-weight-bold">Última Atualização:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{\Carbon\Carbon::parse($craft->updated_at)->format('d/m/Y - H:i')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        </div>

                        <hr>
                        <div class="form-actions">
                            <div class="card-footer d-flex">
                                <a href="{{route('oficios.index')}}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Voltar</a>
                                <form method="post" action="{{route('oficios.destroy', $craft->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Excluir Ofício</button>
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
