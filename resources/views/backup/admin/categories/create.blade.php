@extends('layouts.app')

@section('content')
    <h1>Criar Categoria</h1>
    <p><a href="{{route('stores')}}" class="btn btn-outline-secondary btn-sm">Voltar para lojas</a></p>
    @include('flash::message')
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label>Nome:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
            @error('name') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Descrição:</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
            @error('description') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
{{--        <div class="form-group mb-3">--}}
{{--            <label>Slug:</label>--}}
{{--            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{old('slug')}}">--}}
{{--            @error('slug') <span class="invalid-feedback">{{$message}}</span> @enderror--}}
{{--        </div>--}}
        <div class="form-group">
            <button type="submit" class="btn btn-success">Criar Categoria</button>
        </div>
    </form>
@endsection
