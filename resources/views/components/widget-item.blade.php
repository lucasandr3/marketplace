@foreach($list as $item)
<div class="widget_item">
    <a href="">
        <div class="widget_info">
            <div class="widget_productname">{{$item->name }}</div>
            <div class="widget_price"><span>R$ {{number_format($item->price, 2, ',', '.')}}</span> R$ {{number_format($item->price, 2, ',', '.')}}</div>
        </div>
        <div class="widget_photo">
            @if($item->images()->count())
                <img src="{{asset("storage/".$item->images()->first()->image)}}" class="card-img-top image-product-widget" />
            @else
                <img src="{{asset('assets/images/default.png')}}" style="width: 100%" />
            @endif
        </div>
        <div style="clear:both;"></div>
    </a>
</div>
@endforeach
