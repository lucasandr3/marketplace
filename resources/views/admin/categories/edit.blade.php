@extends('layouts.app')

@section('content')
    <h1>Editar Categoria</h1>
    <p><a href="{{route('stores')}}" class="btn btn-outline-secondary btn-sm">Voltar para lojas</a></p>
    @include('flash::message')
    <form action="{{route('categories.update', $category->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Nome:</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        <div class="form-group mb-3">
            <label>Descrição:</label>
            <input type="text" class="form-control" name="description" value="{{$category->description}}">
        </div>
        <div class="form-group mb-3">
            <label>Slug:</label>
            <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar Categoria</button>
        </div>
    </form>
@endsection
