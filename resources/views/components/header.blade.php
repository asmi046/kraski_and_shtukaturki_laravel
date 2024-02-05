<header id="header" class="header">

    <x-header-menu></x-header-menu>

	<div class="header__bottom">
		<div class="header__bottom-container _container">

			<a href="{{route('home')}}" class="logo-icon header__logo">
                <x-svg.logo></x-svg.logo>
			</a>

			<div class="search header__search">
				<form role="search" method="GET" action="{{route('show_search_page')}}" id="searchform" class="search__form">
					<input type="text" placeholder="Поиск" class="search__input input" value="{{ old('search_str') }}" name="search_str" id="s">
					<button type="submit" tabindex="2" value="" id="searchsubmit" class="search__btn"></button>
				</form>
			</div>

            <button class="mob-search-btn header__mob-search-btn"></button>

			<a href="{{route('favorites')}}" class="header__favorit favorit">
                <x-svg.favorites></x-svg.favorites>
                <favorites-counter></favorites-counter>
				Избранное
			</a>

			<a href="{{route('bascet')}}" class="header__bascet bascet">
                <x-svg.bascet></x-svg.bascet>
                <bascet-counter></bascet-counter>
				Корзина
			</a>

				<button type="button" class="icon-menu" >
					<span></span>
					<span></span>
					<span></span>
				</button>

		</div>
	</div>

</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<x-header-menu-punkts></x-header-menu-punkts>
	</ul>

    <h2>Каталог</h2>
    <ul>
        @foreach ($all_cat as $item)
            <li><a @class(['active' => (Request::is('catalog/'.$item->slug) )]) href="{{route("category", $item->slug)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>

    <h2>Эффекты</h2>
    <ul>
        @foreach ($visual_effects as $item)
            <li><a @class(['active' => (Request::is('visual-effect/'.$item->slug) )]) href="{{route("effect_page", $item->slug)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>

<!-- Строка мобильного поиска -->
<div class="search header__search-mob">
	<form role="search" method="get" action="{{route('show_search_page')}}" id="searchform_mob" class="search__form">
		<input type="text" class="search__input input" placeholder="Поиск" value="" name="search_str"
			id="s_mob">
		<button type="submit" id="searchsubmit_mob" class="search__btn" tabindex="2" value=""></button>
	</form>
</div>
