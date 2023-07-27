@extends('layouts.app')

@section('title', 'Prefeituras')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Prefeituras</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="widget-content searchable-container list">

        <div class="card card-body mb-0">
            <form action="{{route("prefeitura.filter")}}" method="post">
                @csrf
                <div class="mb-2 p-2">
                    <div class="row mb-3">
                        <div class="flex-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title font-weight-bold text-dark mb-0">
                                        <i class="mdi mdi-bank mr-2 text-dark"></i>
                                        Orgão do sistema<br>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control col-10" style="height: 60px !important;width: 100%;"
                                   placeholder="Digite o nome do orgão" value="{{$filters['organ'] ?? ''}}" name="organ">

                            <input type="text" class="form-control col-10" style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                                   placeholder="Digite o CNPJ" value="{{$filters['document'] ?? ''}}" name="document">

                            <div class="input-group-append ml-1">
                                <button type="submit" style="height: 60px !important;width: 100%; border-radius: 5px;"
                                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                                    APLICAR FILTRO
                                </button>
                            </div>
                            <div class="input-group-append ml-1">
                                <a href="{{route('prefeitura.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                                    <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Cadastrar Orgão
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item bg-info">
                    <tr>
                        <th class="text-light font-weight-bold">Nome</th>
                        <th class="text-light font-weight-bold">Documento</th>
                        <th class="text-light font-weight-bold">Telefone</th>
                        <th class="text-light font-weight-bold">Celular</th>
                        <th class="text-light font-weight-bold text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($organs as $organ)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                {{$organ->name}}/{{$organ->estado}}
                            </td>
                            <td>
                                {{$organ->number_document}}
                            </td>
                            <td>
                                {{$organ->telefone}}
                            </td>
                            <td>
                                {{$organ->celular}}
                            </td>
                            <td class="text-right">
                                <div class="action-btn">
                                    <a href="{{route('prefeitura.edit', $organ->id)}}"
                                       class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Editar">
                                        <i class="mdi mdi-pen"></i>
                                    </a>
                                    <a href="{{route('prefeitura.show', $organ->id)}}" class="btn waves-effect waves-light btn-warning" data-toggle="tooltip" title="Ver">
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
            @if (isset($filters))
                {!! $organs->appends($filters)->links() !!}
            @else
                {!! $organs->links() !!}
            @endif
        </div>
    </div>
    </div>
@endsection