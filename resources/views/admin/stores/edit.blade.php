@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <p><a href="{{route('stores')}}" class="btn btn-outline-secondary btn-sm">Voltar para lojas</a></p>
    @include('flash::message')
    <form action="{{route('stores.update', $store->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Nome Loja:</label>
            <input type="text" class="form-control" name="name" value="{{$store->name}}">
        </div>
        <div class="form-group mb-3">
            <label>Descrição:</label>
            <input type="text" class="form-control" name="description" value="{{$store->description}}">
        </div>
        <div class="form-group mb-3">
            <label>Telefone:</label>
            <input type="text" class="form-control" name="phone" value="{{$store->phone}}">
        </div>
        <div class="form-group mb-3">
            <label>Celular:</label>
            <input type="text" class="form-control" name="mobile_phone" value="{{$store->mobile_phone}}">
        </div>
        <div class="form-group mb-3">
            <p>
                <img src="{{asset("storage/{$store->logo}")}}" class="img-fluid"/>
            </p>
            <label>Logo da Loja:</label>
            <input type="file" name="logo" class="form-control"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar Loja</button>
        </div>
    </form>
@endsection
