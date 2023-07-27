@extends('layouts.app')

@section('title', 'Contratos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Ofícios</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card mb-2">
            <div class="card-body pb-0 pt-2 pl-4 pr-4">
                <x-filter-craft></x-filter-craft>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped search-table v-middle">
                        <thead class="header-item bg-info">
                        <tr>
                            <th class="text-white font-weight-bold">Número</th>
                            <th class="text-white font-weight-bold">Título</th>
                            <th class="text-white font-weight-bold">Emitente</th>
                            <th class="text-white font-weight-bold">Data Ofício</th>
                            <th class="text-white font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($crafts as $craft)
                            <!-- row -->
                            <tr class="search-items">
                                <td>
                                    <p class="mb-0">{{$craft->organ->name}}</p>
                                    <p class="mb-0 badge badge-secondary"><small>{{$craft->number}}</small></p>
                                </td>
                                <td>
                                    {{$craft->subject}}
                                </td>
                                <td>
                                    {{$craft->unit->name}}
                                </td>
                                <td>
                                    {{$craft->registration}}
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('oficios.download', $craft->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Fazer download PDF">
                                            <i class="mdi mdi-download"></i>
                                        </a>
                                        <a href="{{route('oficios.print', $craft->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Imprimir">
                                            <i class="mdi mdi-printer"></i>
                                        </a>
                                        <a href="{{route('oficios.edit', $craft->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Editar">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
                                        <a href="{{route('oficios.show', $craft->id)}}"
                                           class="btn waves-effect waves-light btn-warning" data-toggle="tooltip"
                                           title="Ver">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.row -->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                @if(!empty($pagination))
                    <x-paginacao :data='$pagination'></x-paginacao>
                @endif
            </div>
        </div>
    </div>
@endsection
