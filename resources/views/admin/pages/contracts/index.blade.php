@extends('layouts.app')

@section('title', 'Contratos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contratos</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="widget-content searchable-container list">
        <div class="card mb-2">
            <div class="card-body pb-0 pt-2 pl-4 pr-4">
                <x-filter-contracts></x-filter-contracts>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#home1" data-toggle="tab" aria-expanded="false"
                           class="nav-link active">
                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block font-weight-bold">Contratos Vigentes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile1" data-toggle="tab" aria-expanded="true"
                           class="nav-link">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block font-weight-bold">Contratos Vencidos</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="home1">
                        <table class="table table-striped search-table v-middle">
                            <thead class="header-item">
                            <tr>
                                <th class="text-dark font-weight-bold">Orgão</th>
                                <th class="text-dark font-weight-bold">Número</th>
                                <th class="text-dark font-weight-bold">Início Vigência</th>
                                <th class="text-dark font-weight-bold">Final Vigência</th>
                                <th class="text-dark font-weight-bold text-right">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activeContracts as $activeContract)
                                <!-- row -->
                                <tr class="search-items">
                                    <td>
                                        {{$activeContract->organ->nome}}
                                    </td>
                                    <td>
                                        {{$activeContract->number}}
                                    </td>
                                    <td>
                                        {{$activeContract->beginning_validity}}
                                    </td>
                                    <td>
                                        <p class="{{$activeContract->end_contract->class}} mb-0">
                                            {{$activeContract->end_contract->end_term}}<br>
                                            <small>{{$activeContract->end_contract->label}}</small>
                                        </p>
                                    </td>
                                    <td class="text-right">
                                        <div class="action-btn">
                                            <a href="{{route('fornecedores.edit', $activeContract->id)}}"
                                               class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Editar">
                                                <i class="mdi mdi-pen"></i>
                                            </a>
                                            <a href="{{route('fornecedores.show', $activeContract->id)}}" class="btn waves-effect waves-light btn-warning" data-toggle="tooltip" title="Ver">
                                                <i class="mdi mdi-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- /.row -->
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="profile1">
                        <table class="table table-striped search-table v-middle">
                            <thead class="header-item">
                            <tr>
                                <th class="text-dark font-weight-bold">Orgão</th>
                                <th class="text-dark font-weight-bold">Número</th>
                                <th class="text-dark font-weight-bold">Início Vigência</th>
                                <th class="text-dark font-weight-bold">Final Vigência</th>
                                <th class="text-dark font-weight-bold text-right">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($finalizedContracts as $finalizedContract)
                                <!-- row -->
                                <tr class="search-items">
                                    <td>
                                        {{$finalizedContract->organ->nome}}
                                    </td>
                                    <td>
                                        {{$finalizedContract->number}}
                                    </td>
                                    <td>
                                        {{$finalizedContract->beginning_validity}}
                                    </td>
                                    <td>
                                        <p class="{{$finalizedContract->end_contract->class}} mb-0">
                                            {{$finalizedContract->end_contract->end_term}}<br>
                                            <small>{{$finalizedContract->end_contract->label}}</small>
                                        </p>
                                    </td>
                                    <td class="text-right">
                                        <div class="action-btn">
                                            <a href="{{route('fornecedores.edit', $finalizedContract->id)}}"
                                               class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Editar">
                                                <i class="mdi mdi-pen"></i>
                                            </a>
                                            <a href="{{route('fornecedores.show', $finalizedContract->id)}}" class="btn waves-effect waves-light btn-warning" data-toggle="tooltip" title="Ver">
                                                <i class="mdi mdi-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- /.row -->
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- end card-body-->
        </div> <!-- end card-->

{{--        <div class="card-footer">--}}
{{--            @if(!empty($paginacao))--}}
{{--                <x-paginacao :data='$paginacao'></x-paginacao>--}}
{{--            @endif--}}
{{--        </div>--}}
    </div>
@endsection
