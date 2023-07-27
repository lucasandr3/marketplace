@extends('layouts.app')

@section('title', 'Contratos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Gestão de Documentos</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="widget-content searchable-container list">
        <div class="card mb-2">
            <div class="card-body pb-0 pt-2 pl-4 pr-4">
                <x-filter-documents :typeDocuments="$tagsDocuments" :unit="$unit"></x-filter-documents>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped search-table v-middle">
                        <thead class="header-item bg-info">
                        <tr>
                            <th class="text-white font-weight-bold">Número</th>
                            <th class="text-white font-weight-bold">Assunto</th>
                            <th class="text-white font-weight-bold">Responsável</th>
                            <th class="text-white font-weight-bold">Tipo</th>
                            <th class="text-white font-weight-bold">Data</th>
                            <th class="text-white font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $document)
                            <!-- row -->
                            <tr class="search-items">
                                <td>
                                    {{$document->number_document}}
                                </td>
                                <td>
                                    {{$document->subject}}
                                </td>
                                <td>
                                    {{$document->user->name}}
                                </td>
                                <td>
                                    <span class="badge text-light" style="background-color: {{$document->tagDocument->color}};">{{$document->tagDocument->type}}</span>
                                </td>
                                <td>
                                    {{$document->created_at}}
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('fornecedores.edit', $document->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Editar">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
                                        <a href="{{route('documents.show', [$unit->id, $document->id])}}"
                                           class="btn waves-effect waves-light btn-warning" data-toggle="tooltip"
                                           title="Ver">
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
            <div class="card-footer">
                @if(!empty($pagination))
                    <x-paginacao :data='$pagination'></x-paginacao>
                @endif
            </div>
        </div>
    </div>
@endsection
