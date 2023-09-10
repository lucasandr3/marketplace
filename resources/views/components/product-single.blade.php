<div class="row">
    <div class="col-sm-5">
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
        <h2>{{$product->name}}</h2>
        <small>{{$product->brands()->first()->name_brand}}</small><br/>
        <hr/>
        <p>{{$product->description}}</p>
        <hr/>
        De: <span class="price_from">R$ {{number_format($product->price, 2, '.', ',')}}</span><br/>
        Por: <span class="original_price">R$ {{number_format($product->price, 2, '.', ',')}}</span>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" class="frete mt-20">
            <div class="d-flexcs">

                <input type="text" class="form-control-custom flex-1" name="cep_destino" placeholder="Digite o CEP de destino">
                <button class="btn btn-primary process-frete-disable sr-only" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span></span>
                </button>
                <button type="submit" class="frete_submit process-frete">Calcular Frete</button>
            </div>
        </form>

        <div id="resultado"></div>
    </div>
    <div class="col-md-6">
        <form method="POST" class="addtocartform" action="">
            <input type="hidden" name="id_product" value="{{$product->info}}"/>
            <input type="hidden" name="qt_product" value="1"/>
            <button data-action="decrease">-</button>
            <input type="text" name="qt" value="1" class="addtocart_qt" disabled/>
            <button data-action="increase">+</button>
            <input class="addtocart_submit" type="submit" value="Adicionar ao Carrinho"/>
            <input class="addtocart_submit" type="submit" value="Cotar"/>
        </form>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-sm-4 text-center">
        <h3>Especificações</h3>
        <span>Processo 0001</span>
        {{--        <?php foreach($product_options as $po): ?>--}}
        {{--        <strong><?php echo $po['name']; ?></strong>: <?php echo $po['value']; ?><br/>--}}
        {{--        <?php endforeach; ?>--}}
    </div>
    <div class="col-sm-4 text-center">
        <h3>Reviews</h3>
        <span>Testando</span>
        {{--        <?php foreach($product_rates as $rate): ?>--}}
        {{--        <strong><?php echo $rate['user_name']; ?></strong> ---}}
        {{--            <?php for($q=0;$q<intval($rate['points']);$q++): ?>--}}
        {{--        <img src="<?php echo BASE_URL; ?>assets/images/star.png" border="0" height="15" />--}}
        {{--        <?php endfor; ?>--}}
        {{--        <br/>--}}
        {{--        "<?php echo $rate['comment']; ?>"--}}
        {{--        <hr/>--}}
        {{--        <?php endforeach; ?>--}}
    </div>
    <div class="col-sm-4 text-center">
        <h3>Teste</h3>
        <span>testando</span>
    </div>
</div>
