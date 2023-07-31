@extends('layouts.app')

@section('title', 'Ofícios')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edição Ofício</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="formulario-contrato-pncp">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center"
                         style="background-color: rgba(0,0,0,.03);">
                        <h4 class="card-title mb-0 -weight-bold text-dark">
                            <i class="mdi mdi-database-plus mr-2 text-dark"></i>
                            <span id="contrato-header">Edição de Ofício</span><br>
                            <small class="ml-1">Informe os dados do ofício</small>
                        </h4>
                    </div>
                    <form action="{{route('oficios.update', $craft->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="numeroContratoEmpenho" class="control-label col-form-label">Número do
                                            ofício <small class="text-primary">( obrigatório
                                                )</small></label>
                                        <input type="text" class="form-control" name="number" value="{{$craft->number ?? old('number')}}" required="true"
                                               data-campo="Número do Contrato no sistema de origem"
                                               placeholder="Número do ofício">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="numeroContratoEmpenho" class="control-label col-form-label">Título <small class="text-primary">( obrigatório
                                                )</small></label>
                                        <input type="text" class="form-control" name="subject" value="{{$craft->subject ?? old('subject')}}" required="true"
                                               data-campo="Número do Contrato no sistema de origem"
                                               placeholder="Título do ofício">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="dataAssinatura" class="control-label col-form-label">Data
                                            <small class="text-primary">( obrigatório )</small></label>
                                        <input type="date" class="form-control" name="registration" value="{{$craft->registration}}" required="true"
                                               data-campo="Data de Assinatura" placeholder="dd/mm/aaaa">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="categoriaProcessoId" class="control-label col-form-label">
                                            Emitente<small class="text-primary">( obrigatório )</small>
                                        </label>
                                        <select class="form-control" name="unit_id" required="true"
                                                data-campo="Categoria do Processo">
                                            <optgroup label="Emitente atual">
                                                <option value="{{$craft->unit->id}}">{{$craft->unit->name}}</option>
                                            </optgroup>
                                            <optgroup label="Emitentes">
                                                @foreach($units as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="categoriaProcessoId" class="control-label col-form-label">
                                            Responsável <small class="text-primary">( obrigatório )</small>
                                        </label>
                                        <select class="form-control" name="user_id" required="true"
                                                data-campo="Categoria do Processo">
                                            <optgroup label="Responsável atual">
                                                <option value="{{$craft->user->id}}">{{$craft->user->name}}</option>
                                            </optgroup>
                                            <optgroup label="Responsáveis">
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="categoriaProcessoId" class="control-label col-form-label">
                                            Orgão <small class="text-primary">( obrigatório )</small>
                                        </label>
                                        <select class="form-control" name="organ_id" required="true"
                                                data-campo="Categoria do Processo">
                                            <optgroup label="Emitente atual">
                                                <option value="{{$craft->organ->id}}">{{$craft->organ->name}}</option>
                                            </optgroup>
                                            <optgroup label="Orgãos">
                                                @foreach($organs as $organ)
                                                    <option value="{{$organ->id}}">{{$organ->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="objetoContrato" class="control-label col-form-label">Ofício <small
                                                class="text-primary">( obrigatório )</small></label>
                                        <textarea cols="80" id="mymce" class="form-control" rows="3" name="craft" required="true"
                                                  data-sample="1" data-sample-short required>{{$craft->craft}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border-top d-flex gap-10">
                            <a href="{{route('oficios.index')}}" class="btn btn-outline-secondary">
                                <i class="mdi mdi-arrow-left"></i> Voltar
                            </a>
                            <div class="text-end">
                                <button type="submit" class="
                              btn btn-info
                              px-4
                              waves-effect waves-light
                            "
                                        id="salvar-contrato-pncp"
                                >
                                    <i class="fa fa-check"></i> Salvar ofício
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/libs/tinymce/tinymce.min.js')}}"></script>
        <script>
            $(function () {
                if ($("#mymce").length > 0) {
                    tinymce.init({
                        selector: "textarea#mymce",
                        theme: "modern",
                        height: 300,
                        content_style: "p {margin: 0}",
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    });
                }
            });
        </script>
    @endpush
@endonce
