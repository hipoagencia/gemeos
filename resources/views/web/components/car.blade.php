<div data-category="t-shirts" class="product cat_t-shirts is_inview">
    <a href="{{route('web.stockOpen', ['slug' => $car->slug])}}">
        <div class="product-image">
            <img alt="Carro"  src="{{$car->cover->url}}">
        </div>
    </a>

    <div class="produt-info">
        <b class="font-size-20">{{$car->marca}}</b>
        <div class="product-title">{{$car->modelo}}</div>
        <p>{{$car->versao}}</p>
        <div class="product-price">{{$car->preco}}</div>
    </div>
</div>


