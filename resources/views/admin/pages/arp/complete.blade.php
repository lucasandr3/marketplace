@extends('layouts.app')

@section('title', 'ARP')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">ARP</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
{{--        <div class="card mb-2">--}}
{{--            <div class="card-body">--}}
{{--                <x-filter-arp></x-filter-arp>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped search-table v-middle">
                        <thead class="header-item bg-info">
                        <tr>
                            <th class="text-light font-weight-bold">Modalidade</th>
                            <th class="text-light font-weight-bold">Processo</th>
                            <th class="text-light font-weight-bold">Informações</th>
                            <th class="text-light font-weight-bold">Comprador</th>
                            <th class="text-light font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($process as $proc)--}}
{{--                            <!-- row -->--}}
{{--                            <tr class="search-items">--}}
{{--                                <td>--}}
{{--                                    {{$proc->modality}}<br>--}}
{{--                                    <small class="{{$proc->status->class}}">{{$proc->status->label}}</small>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$proc->number}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {!! $proc->object !!}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$proc->comprador}}--}}
{{--                                </td>--}}
{{--                                <td class="text-right">--}}
{{--                                    <div class="action-btn">--}}
{{--                                        <a href="{{route('arp.items', $proc->id)}}"--}}
{{--                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Items da Arp">--}}
{{--                                            <i class="fa fa-cubes"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="{{route('arp.adesao', $proc->id)}}"--}}
{{--                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Nova Adesão">--}}
{{--                                            <i class="mdi mdi-account-multiple-plus"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="{{route('arp.complete', $proc->id)}}"--}}
{{--                                           class="btn waves-effect waves-light btn-megna" data-toggle="tooltip" title="ARP">--}}
{{--                                            <i class="fa fa-dollar-sign"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <!-- /.row -->--}}
{{--                        @endforeach--}}
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

