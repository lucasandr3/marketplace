@extends('layouts.app')

@section('title', 'Planer')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Planer</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">

        <div class="card card-body mb-0">
            <form action="{{route("steps.filter")}}" method="post">
                @csrf
                <div class="mb-2 p-2">
                    <div class="row mb-3">
                        <div class="flex-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title font-weight-bold text-dark mb-0">
                                        <i class="mdi mdi-layers mr-2 text-dark"></i>
                                        Tarefas<br>
                                    </h4>
                                    <a href="{{route('configuracoes.index')}}">
                                        Voltar para Configurações <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control col-10" style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                                   placeholder="Digite o nome da tarefa" value="{{$filters['term'] ?? ''}}" name="term">

                            <div class="input-group-append ml-1">
                                <button type="submit" style="height: 60px !important;width: 100%; border-radius: 5px;"
                                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                                    APLICAR FILTRO
                                </button>
                            </div>
                            <div class="input-group-append ml-1">
                                <a href="{{route('steps.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                                    <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Cadastrar Tarefa
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
                            <th class="text-light font-weight-bold">Status</th>
                            <th class="text-light font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($steps as $step)
                            <!-- row -->
                            <tr class="search-items">
                                <td>
                                    {{$step->step}}
                                </td>
                                <td>
                                    <p class="{{$step->status->class}} mb-0">
                                        {{$step->status->label}}
                                    </p>
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('steps.edit', $step->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"
                                           title="Editar">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
                                        <a href="{{route('steps.show', $step->id)}}"
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
                    {!! $steps->appends($filters)->links() !!}
                @else
                    {!! $steps->links() !!}
                @endif
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{url('assets/js/pages/contact/contact.js')}}"></script>
@endsection
