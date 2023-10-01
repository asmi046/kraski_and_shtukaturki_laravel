<div class="categoty-top-sec__filter-block filter-block">

    <a href="{{route('catalog')}}" class="filter-block__btn btn _active">Каталог товаров</a>
	@foreach ($all_cat as $item)
        <a href="{{route("category", $item->slug)}}" class="filter-block__btn btn">{{$item->name}}</a>
    @endforeach

</div>
