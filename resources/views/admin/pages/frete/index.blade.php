@extends('layouts.app')

@section('title', 'Categorias')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Frete</li>
        </ol>
    </div>
@endsection

@section('content')
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
                                        <i class="mdi mdi-truck-delivery mr-2 text-dark"></i>
                                        Configurações de Frete<br>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control col-10" style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                                   placeholder="Digite o nome do serviço" value="{{$filters['term'] ?? ''}}" name="term">

                            <div class="input-group-append ml-1">
                                <button type="submit" style="height: 60px !important;width: 100%; border-radius: 5px;"
                                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                                    APLICAR FILTRO
                                </button>
                            </div>
                            <div class="input-group-append ml-1">
                                <a href="{{route('frete.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                                    Cadastrar Serviço <i class="mdi mdi-arrow-right font-16 mr-1"></i>
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
                            <th class="text-light font-weight-bold">Serviço</th>
                            <th class="text-light font-weight-bold">Ativo</th>
                            <th class="text-light font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <!-- row -->
                            <tr class="search-items">
                                <td>
                                    {{$service->shipping_name}}
                                </td>
                                <td>
                                    teste
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('frete.edit', $service->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Editar">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
{{--                                        <form action="{{route('frete.destroy', $service->id)}}" method="post" style="display: inline-flex;">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip"--}}
{{--                                                    title="Excluir"><i class="mdi mdi-delete"></i></button>--}}
{{--                                        </form>--}}
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
                    {!! $services->appends($filters)->links() !!}
                @else
                    {!! $services->links() !!}
                @endif
            </div>
        </div>
    </div>
@endsection