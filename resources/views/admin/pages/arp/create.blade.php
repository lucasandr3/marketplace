@extends('layouts.app')

@section('title', 'Arp')

@once
    @push('styles')
        <!-- This Page CSS -->
        <link href="{{url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">ARP</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <form action="{{route('arp.store')}}" method="post">
                    @csrf
                    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center"
                         style="background-color: rgba(0,0,0,.03);">
                        <h4 class="card-title mb-0 -weight-bold text-dark">
                            <i class="fa fa-filter mr-2 text-dark"></i>
                            <span id="contrato-header">Cadastro de ARP</span><br>
                            <small class="ml-1">Informe os dados iniciais da arp</small>
                        </h4>
                    </div>

                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <label for="tipoContratoId" class="control-label col-form-label">Processo <small
                                            class="text-primary">( obrigatório )</small></label>
                                    <select class="form-control select2" name="process_id" style="width: 100%;">
                                        <option value="1">Selecione o processo</option>
                                        @foreach($process as $proc)
                                            <option value="{{$proc->id}}">{{$proc->my_number}} - {{$proc->comprador}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
{{--                            <div class="col-sm-12 col-md-6">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label for="tipoContratoId" class="control-label col-form-label">Orgãos <small--}}
{{--                                            class="text-primary">( obrigatório )</small></label>--}}
{{--                                    <select class="form-control select2" name="organ_id" style="width: 100%;">--}}
{{--                                        <option value="1">Selecione o Orgão</option>--}}
{{--                                        @foreach($organs as $organ)--}}
{{--                                            <option value="{{$organ->id}}">{{$organ->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="numeroContratoEmpenho" class="control-label col-form-label">Número da
                                        ARP <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="text" class="form-control" name="number" required="true" placeholder="Número da ARP">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label class="control-label col-form-label">Validade da ARP
                                        <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="date" class="form-control" name="validity" required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 border-top d-flex gap-10">
                        <a href="{{route('arp.index')}}" class="btn btn-outline-secondary"><i class="mdi mdi-arrow-left"></i> Voltar</a>
                        <div class="text-end">
                            <button type="submit" class="
                          btn btn-info
                          px-4
                          waves-effect waves-light
                        "
                                    id="salvar-contrato-pncp"
                            >
                                <i class="fa fa-check"></i> Criar ARP
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
        <script src="{{url('assets/extra-libs/tiny-editable/mindmup-editabletable.js')}}"></script>
        <script src="{{url('assets/extra-libs/tiny-editable/numeric-input-example.js')}}"></script>
        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
            $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
            $(function () {
                $('#editable-datatable').DataTable();
            });
        </script>
    @endpush
@endonce
