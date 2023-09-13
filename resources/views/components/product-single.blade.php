<div class="row">
    <div class="col-sm-5">
        <div class="product_tags">
            @if($product->sale)
                <div class="product_tag product_tag_red">Promoção</div>
            @endif
            @if($product->bestseller)
                <div class="product_tag product_tag_green">Mais Vendidos</div>
            @endif
            @if($product->new)
                <div class="product_tag product_tag_blue">Novo</div>
            @endif
        </div>
        <div class="mainphoto">
            @if($product->images()->count())
                <img src="{{asset("storage/".$product->images()->first()->image)}}" class="card-img-top image-product"/>
            @else
                <img src="{{asset('assets/images/default.png')}}" style="width: 100%"/>
            @endif
        </div>
        <div class="gallery">
            @foreach($product->images()->get() as $img)
                <div class="photo_item">
                    <img src="{{asset("storage/".$product->images()->first()->image)}}"/>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-sm-7">
        <h2 class="product-title">{{$product->name}}</h2>
        <small>{{$product->brands()->first()->name_brand}}</small><br/>
        <hr/>
        <p>
            @if(rand(0, 1) === 1)
                <span class="text-disponivel"><i class="fa fa-check"></i> Dísponivel no estoque</span></br>
                <small>Produto pronta entrega</small>
            @else
                <span class="text-indisponivel">
                    <i class="fa fa-times"></i>
                    Indísponivel
                </span>
                </br>
                <small>Fora de estoque me <a href="">Avise quando dísponivel</a></small>
            @endif
        </p>
        <hr/>
        De: <span class="price_from">R$ {{number_format($product->price, 2, '.', ',')}}</span><br/>
        Por: <span class="original_price">R$ {{number_format($product->price, 2, '.', ',')}}</span>
        <div id="resultado" class="mt-10">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" class="frete mt-20">
            <div class="d-flexcs">

                <input type="text" class="form-control-custom flex-1" name="cep_destino" placeholder="Digite o CEP de destino">
                <button class="frete_submit process-frete-disable sr-only" type="button" disabled>
                    <i class="fa fa-circle-notch fa-spin"></i>
                </button>
                <button type="submit" class="frete_submit process-frete">Calcular Frete</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <form method="POST" class="addtocartform" action="{{route('cart.add')}}">
            @csrf
            <input type="hidden" name="product[name]" value="{{$product->name}}">
            <input type="hidden" name="product[price]" value="{{$product->price}}">
            <input type="hidden" name="product[slug]" value="{{$product->slug}}">
            <input type="hidden" name="product[shipping]" value="0" class="shipping-product">
            <input type="hidden" name="product[quantity]" value="1" class="quantity-product">
            <button data-action="decrease">-</button>
            <input type="text" name="qt_product" value="1" class="addtocart_qt" disabled/>
            <button data-action="increase">+</button>
            <input class="addtocart_submit" type="submit" value="Adicionar ao Carrinho"/>
            <input class="addtocart_submit" type="submit" value="Cotar"/>
        </form>
    </div>
</div>

<div class="row mt-50">
    <div class="col-md-12">
        <div class="tab-holder">

            <ul class="nav nav-tabs simple">
                <li class="active"><a href="#description" data-toggle="tab" aria-expanded="true">Descrição</a></li>
                <li class=""><a href="#supply" data-toggle="tab" aria-expanded="false">Fornecedor</a></li>
                <li class=""><a href="#process" data-toggle="tab" aria-expanded="false">Processo</a></li>
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <p>{{$product->description}}</p>
                    <p>{{$product->body}}</p>
                    <h5 class="mt-20"><strong>Especificação</strong></h5>
                    <div class="meta-row">
                        <div class="inline">
                            <label>SKU:</label>
                            <span>54687621</span>
                        </div><!-- /.inline -->

                        <span class="seperator">/</span>

                        <div class="inline">
                            <label>categoria:</label>
                            <span>
                                <a href="{{route('category.products', $product->categories()->first()->slug)}}">{{$product->categories()->first()->name_category}}</a></span>
                        </div><!-- /.inline -->
                    </div><!-- /.meta-row -->
                </div><!-- /.tab-pane #description -->

                <div class="tab-pane" id="supply">
                    <ul class="tabled-data">
                        <li>
                            <label>Fornecedor:</label>
                            <div class="value">{{$product->supply->name}}</div>
                        </li>
                        <li>
                            <label>CNPJ:</label>
                            <div class="value">{{$product->supply->document}}</div>
                        </li>
                        <li>
                            <label>Cidade:</label>
                            <div class="value">{{$product->supply->city}}</div>
                        </li>
                        <li>
                            <label>Loja:</label>
                            <div class="value">
                                <a href="{{route('store.index', $product->store->slug)}}">ver loja <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                    </ul><!-- /.tabled-data -->
                </div><!-- /.tab-pane #additional-info -->


                <div class="tab-pane" id="process">
                    <ul class="tabled-data">
                        <li>
                            <label>Process:</label>
                            <div class="value">{{$product->process->number}}</div>
                        </li>
                        <li>
                            <label>Data Homologação:</label>
                            <div class="value">{{\Illuminate\Support\Carbon::parse($product->process->homologation_date)->format('d/m/Y')}}</div>
                        </li>
                        <li>
                            <label>Orgão:</label>
                            <div class="value">{{$product->process->organ}}</div>
                        </li>
                        <li>
                            <label>Processo:</label>
                            <div class="value">
                                <a href="">ver processo <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.tab-pane #reviews -->
            </div><!-- /.tab-content -->

        </div>
    </div>
</div>


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
                    let valor = data.valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                    resultadoDiv.innerHTML = `<p>Valor do frete: <strong>${valor}</strong></p><p>Prazo: ${data.prazo} dias úteis</p>`;
                    document.querySelector('.process-frete-disable').classList.add('sr-only')
                    document.querySelector('.process-frete').classList.remove('sr-only')
                    document.querySelector('.shipping-product').value = data.valor;
                });
        });
    </script>
@endsection
