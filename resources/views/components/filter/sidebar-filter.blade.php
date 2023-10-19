<div class="category-sec__sidebar sidebar">
    <h2 class="sidebar__title">Фильтр</h2>

    <div class="page__sidebar-filter-block-mob filterMob">
        <p class="page__sidebar-filter-block-mob-text">Фильтры</p>
    </div>

    <form action="{{url()->current()}}" method="GET" class="sidebar__filters filters-sidebar sidebarBody">

        <input type="hidden" name="search_str" value="{{Request::get('search_str')}}">

        <div class="filters-sidebar__price price-filter">
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
        </div>

        <div class="filters-sidebar__block spollers-block" data-spollers data-one-spoller>

            <div class="spollers-block__item">
                <div class="spollers-block__title _active" data-spoller>Торговая марка</div>
                <div class="spollers-block__body">
                    <div class="checkbox-item">

                        <label for="check" class="checkbox">
                            <input id="check" class="checkbox__input" type="checkbox" {{ value_check('tm', 'San Marco')?"checked":""}} value="San Marco" name="tm[]">
                            <span class="checkbox__text"><span>San Marco</span></span>
                        </label>

                        <label for="check1" class="checkbox">
                            <input id="check1" class="checkbox__input" type="checkbox" {{ value_check('tm', 'DECORAZZA')?"checked":""}} value="DECORAZZA" name="tm[]">
                            <span class="checkbox__text"><span>DECORAZZA</span></span>
                        </label>

                    </div>
                </div>


            </div>

            <div class="spollers-block__item">
                <div class="spollers-block__title _active" data-spoller>Объем</div>
                <div class="spollers-block__body">
                    <div class="checkbox-item">
                        <x-filter.chec-blk id="v1" parametr="volume" value="1" valuetext="1 л."></x-filter.chec-blk>
                        <x-filter.chec-blk id="v2" parametr="volume" value="4" valuetext="4 л."></x-filter.chec-blk>
                        <x-filter.chec-blk id="v3" parametr="volume" value="5" valuetext="5 л."></x-filter.chec-blk>
                        <x-filter.chec-blk id="v4" parametr="volume" value="10" valuetext="10 л."></x-filter.chec-blk>
                        <x-filter.chec-blk id="v5" parametr="volume" value="25" valuetext="25 л."></x-filter.chec-blk>

                    </div>
                </div>

            </div>

        </div>
        <button type="submit" class="price-filter__btn btn">Применить</button>
        <a href="{{url()->current()}}" class="filters-sidebar__btn-reset btn">Сбросить фильтр</a>
    </form>
</div>
