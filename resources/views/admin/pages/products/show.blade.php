@extends('layouts.app')

@section('title', "{{$product->name}}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('products')}}">Produtos</a></li>
            <li class="breadcrumb-item active">Processo - {{$product->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="form-horizontal">
                    <div class="form-body">
                        {{--                        <hr class="mt-0 mb-5">--}}
                        <div class="card mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Informações Gerais</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Nome:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{$product->name}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Preço:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">R$ {{number_format($product->price, 2, ',','.')}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Descrição:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {!! $product->description !!} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Categoria:</label>
                                            <div class="col-md-9">
                                                @foreach($product->categories()->get() as $category)
                                                    <p class="form-control-static"> {{$category->name}} </p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                        </div>

                        <div class="card mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Informações Administrativas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Status:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{ucfirst($product->bol_active)}} </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Status:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{ucfirst($product->bol_publish)}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Data de Cadastro:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{\Carbon\Carbon::parse($product->created_at)->format('d/m/Y - H:i')}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3 font-weight-bold">Última Atualização:</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{\Carbon\Carbon::parse($product->updated_at)->format('d/m/Y - H:i')}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                        </div>

                        <div class="card mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Imagens do Produto</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($product->images()->get() as $image)
                                    <div class="col-md-2">
                                        <img src="{{$image->image}}" width="100px" height="100px" class="border-3 mb-4"/>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="card-footer d-flex">
                                <a href="{{route('products')}}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Voltar</a>
                                <form method="post" action="{{route('products.destroy', $product->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Excluir Produto</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
