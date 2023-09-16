<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="index.html" class="logo-icon header__logo">
				<p class="logo-icon__text">Название <span>текст logo</span></p>
			</a>

			<div class="header__navigation">
				<div class="header__menu-block">
					<ul class="menu-list header__menu-list d-flex">
						<li class="menu-list__item"><a href="#" class="menu-list__link">Пункт 1</a></li>
						<li class="menu-list__item"><a href="#" class="menu-list__link">Пункт 2</a></li>
						<li class="menu-list__item"><a href="#" class="menu-list__link">Пункт 3</a></li>
						<li class="menu-list__item"><a href="#" class="menu-list__link">Пункт 4</a></li>
						<li class="menu-list__item"><a href="#" class="menu-list__link">Пункт 5</a></li>
					</ul>

					<div class="search header__search">
						<form role="search" method="get" action="" id="searchform"
							class="search__form">
							<input type="text" placeholder="Поиск" class="search__input input"
								value="" name="s" id="s">
							<button type="submit" tabindex="2" value="" id="searchsubmit" class="search__btn"></button>
						</form>
					</div>
				</div>
				<button class="mob-search-btn header__mob-search-btn"></button>

				<div class="contacts header__contacts d-flex">
					<a href="tel:84951700000" class="contacts__phone header__phone">8 (495) 170-00-00</a>
					<p class="contacts__time-phone header__time-phone">Звонить с 08:00 до 22:00</p>
					<a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
				</div>
				<a href="tel:84951700000" class="mob-phone-icon header__mob-phone-icon"></a>

				<a href="#" class="bascket-icon"><span class="bascket-icon__number bascet_counter">1</span></a>

				<button type="button" class="icon-menu" aria-label="Иконка бургера">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>

		</div>

	</div>
	<!-- Полоса прокрутки в шапке -->
	<div id="scroll-progress"></div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 1</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 2</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 3</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 4</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 5</a></li>
	</ul>
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>

<!-- Строка мобильного поиска -->
<div class="search header__search-mob">
	<form role="search" method="get" action="" id="searchform" class="search__form">
		<input type="text" class="search__input input" placeholder="Поиск" value="" name="s"
			id="s">
		<button type="submit" id="searchsubmit" class="search__btn" tabindex="2" value=""></button>
	</form>
</div>