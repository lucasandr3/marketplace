@extends('layouts.app')

@section('title', "Perfis do {$plan->name}")

@section('breadcrumb')
    <div class="col-md-12 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.index')}}">Planos</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.show', $plan->url)}}">{{$plan->name}}</a></li>
            <li class="breadcrumb-item active">Perfis Disponíveis</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card card-body mb-0">
            @include('admin.includes.notification')
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="card-title">Perfis disponíveis para - {{$plan->name}}</h4>
                </div>
                <div class="col-md-6 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <form class="flex-grow-1 mr-2">
                        <input type="search" class="form-control product-search" id="input-search"
                               placeholder="Pesquisar Perfis...">
                    </form>
                </div>
            </div>
        </div>

        <form action="{{ route('planos.profiles.attach', $plan->id) }}" method="POST">
            @csrf
        <div class="card">
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item">
                    <tr>
                        <th class="text-dark font-weight-bold">Nome</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($profiles as $profile)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" class="material-inputs contact-chkbox" name="profiles[]" value="{{$profile->id}}" id="checkbox{{$profile->id}}">
                                        <label class="" for="checkbox{{$profile->id}}">{{$profile->name}}</label>
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
                <a href="{{route('planos.index')}}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Voltar para Planos</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Vincular Selecionados</button>
            </div>
        </div>
        </form>
    </div>
@endsection
