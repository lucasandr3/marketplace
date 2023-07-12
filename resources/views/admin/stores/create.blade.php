@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <p><a href="{{route('stores')}}" class="btn btn-outline-secondary btn-sm">Voltar para lojas</a></p>
    @include('flash::message')
    <form action="{{route('stores.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label>Nome Loja:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
            @error('name') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Descrição:</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
            @error('description') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Telefone:</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">
            @error('phone') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Celular:</label>
            <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" value="{{old('mobile_phone')}}">
            @error('mobile_phone') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Logo da Loja:</label>
            <input type="file" name="logo" class="form-control" />
        </div>
        <div class="form-group mb-3">
            <label>Slug:</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{old('slug')}}">
            @error('slug') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Criar Loja</button>
        </div>
    </form>
@endsection
