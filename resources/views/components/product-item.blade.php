<div class="product_item">
    <a href="{{route('product.single', $product->slug)}}">
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
        <div class="product_image">
            @if($product->images()->count())
                <img src="{{asset("storage/".$product->images()->first()->image)}}" class="card-img-top image-product" />
            @else
                <img src="{{asset('assets/images/default.png')}}" style="width: 100%" />
            @endif
        </div>
        <div class="product_name">{{$product->name}}</div>
        <div class="product_brand">{{$product->brands()->first()->name}}</div>
        <div class="product_price_from">
            @if($product->price != 0)
                R$ {{number_format($product->price, 2, ',', '.')}}
            @endif
        </div>
        <div class="product_price">R$ {{number_format($product->price, 2, ',', '.'); }}</div>
        <div style="clear:both"></div>
    </a>
</div>
