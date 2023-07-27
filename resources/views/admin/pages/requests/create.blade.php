@extends('layouts.app')

@section('title', 'Pedidos')

@once
    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/css/samples.css')}}">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('unidades.index')}}">Unidades</a></li>
            <li class="breadcrumb-item active">Nova Unidade</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('pedidos.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro de Pedido</h4>
                    </div>
                    <div class="card-body">

                        <div class="input-group mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Digite o assunto" />
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-control select2" name="agent_id" style="width: 100%;">
                                <option value="">Selecione o Agente</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-control select2" name="unit_id" style="width: 100%;">
                                <option value="">Selecione a unidade</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <textarea class="form-control" cols="80" id="editorTextarea" data-sample="1" rows="3" name="body"
                                  data-campo="Objeto" aria-invalid="false"></textarea>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-file-document"></i></span>
                            </div>
                            <input type="file" name="file[]" class="form-control" multiple />
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('pedidos.index')}}" class="btn btn-outline-secondary">
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

@once
    @push('scripts')
        <script src="{{url('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{url('assets/extra-libs/jquery.repeater/repeater-init.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/samples/js/sample.js')}}"></script>
        <script data-sample="1">
            CKEDITOR.replace('editorTextarea', {
                height: 150
            });
        </script>
    @endpush
@endonce
