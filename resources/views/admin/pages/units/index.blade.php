@extends('layouts.app')

@section('title', 'Lojas')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Lojas</li>
        </ol>
    </div>
@endsection

@section('content')
{{--    @include('admin.includes.notification')--}}
    <div class="widget-content searchable-container list">
        <div class="card card-body mb-0">
            <form action="#" method="post">
                @csrf
                <div class="mb-2 p-2">
                    <div class="row mb-3">
                        <div class="flex-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title font-weight-bold text-dark mb-0">
                                        <i class="fa fa-building mr-2 text-dark"></i>
                                        Unidades do sistema<br>
                                        <small class="ml-1">
                                            <a href="#">
                                                Voltar para Configurações <i class="mdi mdi-arrow-right"></i>
                                            </a>
                                        </small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control col-10" style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                                   placeholder="Digite o nome da unidade" value="{{$filters['term'] ?? ''}}" name="term">

                            <div class="input-group-append ml-1">
                                <button type="submit" style="height: 60px !important;width: 100%; border-radius: 5px;"
                                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                                    APLICAR FILTRO
                                </button>
                            </div>
                            <div class="input-group-append ml-1">
                                <a href="{{route('stores.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                                    <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Cadastrar Unidade
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
                            <th class="text-light font-weight-bold">Logo</th>
                            <th class="text-light font-weight-bold">Nome</th>
                            <th class="text-light font-weight-bold">CNPJ</th>
                            <th class="text-light font-weight-bold">Cidade</th>
                            <th class="text-light font-weight-bold">Status</th>
                            <th class="text-light font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($units as $unit)
                            <!-- row -->
                            <tr class="search-items">
                                <td>
                                    <img src="{{url("assets/images/{$unit->logo}")}}" width="80" class="radius-3"/>
                                </td>
                                <td>
                                    {{$unit->name}}
                                </td>
                                <td>
                                    {{$unit->number_document}}
                                </td>
                                <td>
                                    {{$unit->address()->city}}
                                </td>
                                <td>
                                    <p class="{{$unit->status->class}} mb-0">
                                        {{$unit->status->label}}
                                    </p>
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('unidades.edit', $unit->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Editar">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
                                        <a href="{{route('unidades.show', $unit->id)}}"
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
                @if (isset($filters))
                    {!! $units->appends($filters)->links() !!}
                @else
                    {!! $units->links() !!}
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{url('painel/assets/js/pages/contact/contact.js')}}"></script>
@endsection
