<div class="row">
    <div class="col-sm-5">
        <div class="mainphoto">
            @if($product->images()->count())
                <img src="{{asset("storage/".$product->images()->first()->image)}}" class="card-img-top image-product" />
            @else
                <img src="{{asset('assets/images/default.png')}}" style="width: 100%" />
            @endif
        </div>
        <div class="gallery">
            @foreach($product->images() as $img)
            <div class="photo_item">
                <img src="{{asset("storage/".$product->images()->first()->image)}}" />
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-sm-7">
        <h2>{{$product->name}}</h2>
        <small>{{$product->brands()->first()->name_brand}}</small><br/>
{{--        <?php if($product_info['rating'] != '0'): ?>--}}
{{--            <?php for($q=0;$q<intval($product_info['rating']);$q++): ?>--}}
{{--        <img src="<?php echo BASE_URL; ?>assets/images/star.png" border="0" height="15" />--}}
{{--        <?php endfor; ?>--}}
{{--        <?php endif; ?>--}}
        <hr/>
        <p>{{$product->description}}</p>
        <hr/>
        De: <span class="price_from">R$ {{number_format($product->price, 2, '.', ',')}}</span><br/>
        Por: <span class="original_price">R$ {{number_format($product->price, 2, '.', ',')}}</span>

        <form method="POST" class="addtocartform" action="">
            <input type="hidden" name="id_product" value="{{$product->info}}" />
            <input type="hidden" name="qt_product" value="1" />
            <button data-action="decrease">-</button><input type="text" name="qt" value="1" class="addtocart_qt" disabled /><button data-action="increase">+</button>
            <input class="addtocart_submit" type="submit" value="Adicionar ao Carrinho" />
        </form>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-sm-6">
        <h3>Especificações</h3>
{{--        <?php foreach($product_options as $po): ?>--}}
{{--        <strong><?php echo $po['name']; ?></strong>: <?php echo $po['value']; ?><br/>--}}
{{--        <?php endforeach; ?>--}}
    </div>
    <div class="col-sm-6">
        <h3>Reviews</h3>
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
</div>
