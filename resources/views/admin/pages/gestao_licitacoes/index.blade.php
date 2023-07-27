@extends('layouts.app')

@section('title', 'Gestão de Licitações')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Gestão de Licitações</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card mb-2">
            <div class="card-body">
                <x-filtros route="gestao.filter" :filters="$filters"></x-filtros>
            </div>
        </div>

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
                        @foreach($process as $proc)
                            <!-- row -->
                            <tr class="search-items">
                                <td class="text-center">
                                    <b>{{$proc->modality}}</b>
                                </td>
                                <td class="text-center">
                                    <p class="mb-1">{{$proc->my_number}}</p>
                                    <span>Disputa:</span>
                                    <p class="mb-2">{{$proc->init_session}}</p>
                                    <small class="{{$proc->status->class}}">{{$proc->status->label}}</small>
                                </td>
                                <td>
                                    <span class="desc">{!! $proc->object !!}</span>
                                    <a class="ver-mais" onclick="showDescription('{{$proc->object}}')">ver mais <i class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    {{$proc->comprador}}
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('ganho.index', $proc->id)}}"
                                           class="btn waves-effect waves-light btn-megna" data-toggle="tooltip" title="Ganho">
                                            <i class="mdi mdi-trophy"></i>
                                        </a>
                                        <a href="{{route('checklist', $proc->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Checklist do processo">
                                            <i class="mdi mdi-file-document-box"></i>
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
                @if (isset($filters))
                    {!! $process->appends($filters)->links() !!}
                @else
                    {!! $process->links() !!}
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade " id="centermodaldesc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Descrição do processo</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="body-desc p-1"></div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection

