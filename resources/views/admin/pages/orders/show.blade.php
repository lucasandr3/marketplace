@extends('layouts.app')

@section('title', "Categorias")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('categorias.index')}}">Categorias</a></li>
            <li class="breadcrumb-item active">{{$category->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$category->name}}</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Nome da Categoria:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$category->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Status:</label>
                                <div class="col-md-8">
                                    <p class="{{$category->status->class}} mb-0">
                                        {{$category->status->label}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($category->created_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($category->updated_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            @if($category->products->count() > 0)
                                <p>Não é possível excluir categoria, pois existem produtos cadastrados para ela.</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <a href="{{route('categorias.index')}}" class="btn btn-outline-secondary">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </a>
                    <form action="{{route('categorias.destroy', $category->id)}}" method="post" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" @if($category->products->count() > 0) disabled @endif>
                            <i class="fa fa-trash"></i> Excluir Categoria
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
