@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <p><a href="{{route('products')}}" class="btn btn-outline-secondary btn-sm">Voltar para produtos</a></p>
    @include('flash::message')
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label>Nome Produto:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
            @error('name') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Descrição:</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
            @error('description') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Conteúdo:</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}"></textarea>
            @error('body') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Preço:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
            @error('price') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Categorias:</label>
            <select class="form-control" multiple name="categories[]">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label>Slug:</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{old('slug')}}">
            @error('slug') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Criar Produto</button>
        </div>
    </form>
@endsection
