@extends('layouts.app')

@section('title', "Permissões do {$role->name}")

@section('breadcrumb')
    <div class="col-md-12 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('cargos.index')}}">Cargos</a></li>
            <li class="breadcrumb-item active"><a href="{{route('cargos.show', $role->id)}}">{{$role->name}}</a></li>
            <li class="breadcrumb-item active">Permissões Disponíveis</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card mb-2">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <x-filter-permission
                        :role="$role->id"
                        :newRegister="false"
                        :showBtn="false"
                    ></x-filter-permission>
                </form>
            </div>
        </div>

        <form action="{{ route('cargos.permissions.attach', $role->id) }}" method="POST">
            @csrf
        <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item bg-info">
                    <tr>
                        <th class="text-light font-weight-bold">Nome</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $permission)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" class="material-inputs contact-chkbox" name="permissions[]" value="{{$permission->id}}" id="checkbox{{$permission->id}}">
                                        <label class="" for="checkbox{{$permission->id}}">{{$permission->description}}</label>
                                    </div>
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
            <div class="card-footer">
                <a href="{{route('cargos.index')}}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Voltar para Cargos</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Vincular Selecionados</button>
            </div>
        </div>
        </form>
    </div>
@endsection
