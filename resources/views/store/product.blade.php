@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @if($product->images()->count())
                <img src="{{asset("storage/".$product->images()->first()->image)}}" alt="" class="card-img-top img-fluid" />
            @else
                <img src="{{asset('assets/images/nophoto3.png')}}" alt="" class="card-img-top img-fluid" />
            @endif
            <div class="row mt-3">
                @foreach($product->images as $image)
                    <div class="col-md-4">
                        <img src="{{asset("storage/".$image->image)}}" alt="" class="img-fluid" />
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
                <h3>R$ {{number_format($product->price, 2, ',', '.')}}</h3>
                <span>{{$product->store->name}}</span>
            </div>
            <div class="product-add col-md-12">
                <hr>
                <form action="{{route('cart.add')}}" method="post">
                    @csrf
                    <input type="hidden" name="product[name]" value="{{$product->name}}">
                    <input type="hidden" name="product[price]" value="{{$product->price}}">
                    <input type="hidden" name="product[slug]" value="{{$product->slug}}">
                    <div class="form-group">
                        <label class="mb-1">Quantidade:</label>
                        <input type="number" name="product[quantity]" value="1" class="form-control" style="width: 20%" />
                    </div>
                    <button class="btn btn-success mt-2">Comprar</button>
                </form>
                <form action="{{route('quotation.add')}}" method="post">
                    @csrf
                    <input type="hidden" name="product[name]" value="{{$product->name}}">
                    <input type="hidden" name="product[price]" value="{{$product->price}}">
                    <input type="hidden" name="product[slug]" value="{{$product->slug}}">
                    <div class="form-group">
                        <label class="mb-1">Quantidade:</label>
                        <input type="number" name="product[quantity]" value="1" class="form-control" style="width: 20%" />
                    </div>
                    <button class="btn btn-success mt-2">Cotar preço</button>
                </form>
                <hr>
                <form action="/calcular-frete" method="POST" class="frete">
                    <div class="d-flex" style="gap: 10px">
                        <div>
                            <input type="text" class="form-control" name="cep_destino" placeholder="Digite o CEP de destino">
                        </div>
                        <button class="btn btn-primary process-frete-disable sr-only" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span></span>
                        </button>
                        <button type="submit" class="btn btn-primary process-frete">Calcular Frete</button>
                    </div>
                </form>

                <div id="resultado"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
            {{$product->body}}
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const form = document.querySelector('form.frete');
        const resultadoDiv = document.querySelector('#resultado');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            document.querySelector('.process-frete-disable').classList.remove('sr-only')
            document.querySelector('.process-frete').classList.add('sr-only')

            const cepDestino = form.querySelector('input[name="cep_destino"]').value;

            fetch('/calcular-frete', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '{{csrf_token()}}'
                },
                body: JSON.stringify({ cep_destino: cepDestino })
            })
                .then(response => response.json())
                .then(data => {
                    resultadoDiv.innerHTML = `Valor: R$ ${data.valor}<br>Prazo: ${data.prazo} dias úteis`;
                    document.querySelector('.process-frete-disable').classList.add('sr-only')
                    document.querySelector('.process-frete').classList.remove('sr-only')
                });
        });
    </script>
@endsection
