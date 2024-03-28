<div class="category-sec__sidebar sidebar">
    <h2 class="sidebar__title">Фильтр</h2>

    <div class="page__sidebar-filter-block-mob filterMob">
        <p class="page__sidebar-filter-block-mob-text">Фильтры</p>
    </div>

    <form action="{{url()->current()}}" method="GET" class="sidebar__filters filters-sidebar sidebarBody">

        <input type="hidden" name="search_str" value="{{Request::get('search_str')}}">

        {{-- <div class="filters-sidebar__price price-filter">
            <div class="price-filter__input-block">
                <div class="price-filter__input-block-item">
                    <label for="price-1" class="price-filter__label">От</label>
                    <input type="number" name="minprice" value="{{ value_check('minprice', '', 100)}}" class="input">
                </div>
                <div class="price-filter__input-block-item">
                    <label for="price-1" class="price-filter__label">До</label>
                    <input type="number" name="maxprice" value="{{ value_check('maxprice', '', 60000)}}" class="input">
                </div>
            </div>

            <button type="submit" class="price-filter__btn btn">Применить</button>
        </div> --}}

        <div class="filters-sidebar__block spollers-block" data-spollers data-one-spoller>

            <x-filter.blk name="Категории товаров">
                @foreach ($all_cat as $item)
                    <a href="{{route("category", $item->slug)}}" @class(['filter_cat', '_active' => url()->current() == route("category", $item->slug)])>{{$item->name}}</a>
                @endforeach
            </x-filter.blk>

            <x-filter.blk name="Торговая марка">
                <x-filter.chec-blk id="tm0" parametr="tm" value="San Marco" valuetext="San Marco"></x-filter.chec-blk>
                <x-filter.chec-blk id="tm1" parametr="tm" value="DECORAZZA" valuetext="DECORAZZA"></x-filter.chec-blk>
            </x-filter.blk>

            <x-filter.blk name="Визуальный эффект">
                @foreach ($visual_effects as $item)
                    <x-filter.chec-blk id="ve{{$item->id}}" parametr="ve" value="{{$item->name}}" valuetext="{{$item->name}}"></x-filter.chec-blk>
                @endforeach


            </x-filter.blk>

        </div>
        <button type="submit" class="price-filter__btn btn">Применить</button>
        <a href="{{url()->current()}}" class="filters-sidebar__btn-reset btn">Сбросить фильтр</a>
    </form>
</div>
