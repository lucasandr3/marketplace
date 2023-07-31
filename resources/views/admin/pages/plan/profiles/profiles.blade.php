@extends('layouts.app')

@section('title', "Perfis do {$plan->name}")

@section('breadcrumb')
    <div class="col-md-12 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.index')}}">Planos</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.show', $plan->url)}}">{{$plan->name}}</a></li>
            <li class="breadcrumb-item active">Perfis Vinculados</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card card-body mb-0">
            @include('admin.includes.notification')
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="card-title">Perfis do - {{$plan->name}}</h4>
                </div>
                <div class="col-md-6 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <form class="flex-grow-1 mr-2">
                        <input type="text" class="form-control product-search" id="input-search"
                               placeholder="Pesquisar Perfis...">
                    </form>
                    <a href="{{route('planos.profiles.available', $plan->id)}}" class="btn btn-info"><i
                            class="mdi mdi-tag-plus font-16 mr-1 ml-2"></i> Vincular novo Perfil</a>
                </div>
            </div>
        </div>

        <div class="card card-body pt-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item">
                    <tr>
                        <th class="text-dark font-weight-bold">Nome</th>
                        <th class="text-dark font-weight-bold text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($profiles as $profile)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                {{$profile->name}}
                            </td>
                            <td class="text-right">
                                <div class="action-btn d-flex justify-content-end">
                                    <a href="{{ route('planos.profile.detach', [$plan->id, $profile->id]) }}"
                                       class="btn waves-effect waves-light btn-danger">
                                        <i class="mdi mdi-link-off"></i> DESVINCULAR
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
    </div>
@endsection
