@extends('layouts.app')

@section('title', "Perfis do {$user->name}")

@section('breadcrumb')
    <div class="col-md-12 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('usuarios.index')}}">Usuarios</a></li>
            <li class="breadcrumb-item active"><a href="{{route('usuarios.show', $user->id)}}">{{$user->name}}</a></li>
            <li class="breadcrumb-item active">Cargos Disponíveis</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">

        <div class="card card-body mb-0">
            <form action="{{route("usuarios.cargo.available.filter", $user->id)}}" method="post">
                @csrf
                <div class="mb-2 p-2">
                    <div class="row mb-3">
                        <div class="flex-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title font-weight-bold text-dark mb-0">
                                        <i class="fa fa-users mr-2 text-dark"></i>
                                        Perfis disponíveis para - {{$user->name}}<br>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control col-12" style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                                   placeholder="Digite o nome do perfil" value="{{$filters['term'] ?? ''}}" name="term">

                            <div class="input-group-append ml-1">
                                <button type="submit" style="height: 60px !important;width: 100%; border-radius: 5px;"
                                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                                    APLICAR FILTRO
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item bg-info">
                    <tr>
                        <th class="text-light font-weight-bold">Nome</th>
                        <th class="text-light font-weight-bold text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                {{$role->name}}
                            </td>
                            <td class="text-right">
                                <div class="action-btn d-flex justify-content-end">
                                    <a href="{{ route('usuarios.cargo.attach', [$user->id, $role->id]) }}"
                                       class="btn waves-effect waves-light btn-success">
                                        <i class="mdi mdi-link-off"></i> VINCULAR
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
                {!! $roles->appends($filters)->links() !!}
            @else
                {!! $roles->links() !!}
            @endif
        </div>
    </div>
    </div>
@endsection
