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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-2">Items da Arp</h4>
                    <h6 class="card-subtitle">Basta clicar na palavra que deseja alterar e dar enter</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table editable-table table-bordered table-striped m-b-0">
                            <thead>
                            <tr>
                                <th>Item</th>
                                <th>Descrição</th>
                                <th>Quantidade</th>
                                <th>Valor Unit.</th>
                                <th>Total</th>
                                <th>Max. Quantidade</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{$item->item}}</td>
                                <td>{{$item->product}}</td>
                                <td>{{$item->quantity_registered}}</td>
                                <td>{{$item->unit_value}}</td>
                                <td>{{$item->total_value}}</td>
                                <td>{{$item->max_quantity}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('arp.index')}}" class="btn btn-outline-secondary"><i class="mdi mdi-arrow-left"></i> Voltar</a>
                </div>
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
