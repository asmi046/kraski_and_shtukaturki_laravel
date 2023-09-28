<div class="popular__column">
    <div class="popular__card card-popular">
        <div class="card-popular__img _ibg">
            @if(!empty($item["img"]))
                <img loading="lazy" src="{{$item["img"]}}" alt="Купить {{$item["title"]}}">
            @else
                <img loading="lazy" src="{{asset('img/no_photo.jpg')}}" alt="Купить {{$item["title"]}}">
            @endif
        </div>
        <div class="card-popular__descp">
            <h3 class="card-popular__descp-title">{{$item["title"]}}</h3>
            <p class="card-popular__descp-subtitle">
                @if (!empty($item["short_description"]) )
                    {{mb_strimwidth(strip_tags($item["short_description"]), 0, 50, "...")}}
                @else
                    {{mb_strimwidth(strip_tags ($item["description"]), 0, 50, "...")}}
                @endif
            </p>
            <div class="card-popular__descp-price">{{$item["price"]}} руб.</div>
        </div>
        <a href="{{route('product')}}" class="card-popular__btn">Подробнее...</a>
    </div>
</div>
