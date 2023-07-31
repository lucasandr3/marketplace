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
            <form action="{{route('arp.store.adesao', $process->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-2">Items da Arp - <small>Unidade {{$unit->name}}</small></h4>
                        <h6 class="card-subtitle">Basta clicar na palavra que deseja alterar e dar enter</h6>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong><i class="fa fa-bell"></i> Obs - </strong> Está Ata de Registro de Preços permite clientes aderirem a 50% do quantitativo registrado.
                        </div>
                        <div class="d-flex justify-content-between align-items-center gap-10" style="flex:1">
                            <div class="flex-1">
                                <select class="form-control select2" name="organ_id" required="required" style="width: 100%">
                                    <option value="selecione">Selecione o Orgão aderente</option>
                                    @foreach($organs as $organ)
                                        <option value="{{$organ->id}}">{{$organ->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex" style="gap:5px">
                                <a href="{{route('fornecedores.create')}}" class="btn btn-info" style="padding: 13px;">
                                    <i class="mdi mdi-file-document"></i> Cadastrar Fornecedor
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table editable-table table-bordered table-striped m-b-0">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Descrição</th>
                                    <th>Qtd. Homologada</th>
                                    <th>Valor Homologado</th>
                                    <th>Quantidade</th>
                                    <th>Max Qtd</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->item}}</td>
                                    <td>{{$item->product}}</td>
                                    <td>{{$item->quantity_registered}}</td>
                                    <td>
                                        <small>Valor Unit.</small></br> {{$item->unit_value}}</br>
                                        <small>Valor Total</small></br> {{$item->total_value}}
                                    </td>
                                    <td>
                                        <input type="text" name="items[{{$item->id}}][quantity]" />
                                    </td>
                                    <td>{{$item->max_quantity}}</td>
                                </tr>
                                <input type="hidden" name="items[{{$item->id}}][arp_item_id]" value="{{$item->item}}"/>
                                <input type="hidden" name="items[{{$item->id}}][max_quantity]" value="{{$item->max_quantity}}"/>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="arp_id" value="{{$arp->id}}"/>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('arp.index')}}" class="btn btn-outline-secondary">
                            <i class="mdi mdi-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-info"><i class="mdi mdi-check"></i> Salvar Adesão</button>
                    </div>
                </div>
            </form>
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
