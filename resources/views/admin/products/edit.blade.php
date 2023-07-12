@extends('layouts.app')

@section('content')
    <h1>Atualizar Produto</h1>
    <p><a href="{{route('products')}}" class="btn btn-outline-secondary btn-sm">Voltar para produtos</a></p>
    @include('flash::message')
    <form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Nome Produto:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group mb-3">
            <label>Descrição:</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}">
        </div>
        <div class="form-group mb-3">
            <label>Conteúdo:</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$product->body}}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>Preço:</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group mb-3">
            <label>Categorias:</label>
            <select class="form-control" multiple name="categories[]">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                        @if($product->categories()->get()->contains($category)) selected @endif
                    >{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Imagens do produto:</label>
            <input type="file" name="photos[]" multiple class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Slug:</label>
            <input type="text" class="form-control" name="slug" value="{{$product->slug}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar Produto</button>
        </div>
    </form>

    <hr>

    <div class="row">
        @foreach($product->images()->get() as $image)
            <div class="col-4 text-center">
                <img src="{{asset("storage/{$image->image}")}}"  class="img-fluid"/>
                <form action="{{route('products.photos.destroy', $image->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Remover foto</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
