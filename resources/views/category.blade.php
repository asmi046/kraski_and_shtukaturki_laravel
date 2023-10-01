@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')  

<section class="banner-category banner">
	<div class="nuar_blk"></div>
	<div class="_container">

		<h1 class="banner-category__title">
			ИНТЕРЬЕРНЫЕ КРАСКИ
		</h1>

	</div>
</section>

<section class="categoty-top-sec section">
	<div class="_container">

	<div class="categoty-top-sec__breadcrumbs">
	<p id="breadcrumbs">
	<span>
		<span>
			<a href="index.html">
				Главная
			</a> /
			<a href="index.html">
				Структурная штукатурка
			</a> /
			<span class="breadcrumb_last" aria-current="page">
				Stucco in Rilievo
			</span>
		</span>
	</span>
</p>
	</div>

<div class="categoty-top-sec__filter-block filter-block">
	<button class="filter-block__btn btn _active">Каталог товаров</button>
	<button class="filter-block__btn btn">Декоративные краски</button>
	<button class="filter-block__btn btn">Венецианская штукатурка</button>
	<button class="filter-block__btn btn">Фактурные покрытия</button>
	<button class="filter-block__btn btn">Финишные покрытия</button>
	<button class="filter-block__btn btn">Микроцемент</button>
</div>

	</div>
</section>

<section class="category-sec section">
	<div class="_container">

<div class="category-sec__wrap">

	<div class="category-sec__sidebar sidebar">
		<h1 class="sidebar__title">Название категории</h1>

		<div class="page__sidebar-filter-block-mob filterMob">
			<p class="page__sidebar-filter-block-mob-text">Фильтры</p>
		</div>

		<form action="#" class="sidebar__filters filters-sidebar sidebarBody">

		<div class="filters-sidebar__price price-filter">

			<div class="price-filter__input-block">
				<div class="price-filter__input-block-item">
					<label for="price-1" class="price-filter__label">От</label>
					<input type="number" name="form[]" placeholder="60" class="input">
				</div>
				<div class="price-filter__input-block-item">
					<label for="price-1" class="price-filter__label">До</label>
					<input type="number" name="form[]" placeholder="60 000" class="input">
				</div>
			</div>

			<button type="button" class="price-filter__btn btn">Применить</button>
		</div>

		<div class="filters-sidebar__block spollers-block" data-spollers data-one-spoller>

  		<div class="spollers-block__item">
    		<div class="spollers-block__title" data-spoller>Сначала со скидкой</div>
    		<div class="spollers-block__body">
					<div class="checkbox-item">
					<label for="check" class="checkbox">
    					<input id="check" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
						<label for="check1" class="checkbox">
    					<input id="check1" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
						<label for="check2" class="checkbox">
    					<input id="check2" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
					</div>
    		</div>
  		</div>

  	<div class="spollers-block__item">
    	<div class="spollers-block__title" data-spoller>Бренд</div>
    	<div class="spollers-block__body">
			<div class="checkbox-item">
					<label for="check3" class="checkbox">
    					<input id="check3" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
						<label for="check4" class="checkbox">
    					<input id="check4" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
						<label for="check5" class="checkbox">
    					<input id="check5" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
					</div>
    	</div>
  	</div>

  	<div class="spollers-block__item">
    	<div class="spollers-block__title" data-spoller>Цвет</div>
    	<div class="spollers-block__body">
			<div class="checkbox-item">
					<label for="check6" class="checkbox">
    					<input id="check6" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
						<label for="check7" class="checkbox">
    					<input id="chec7" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
						<label for="check8" class="checkbox">
    					<input id="check8" class="checkbox__input" type="checkbox" value="1" name="form[]">
    						<span class="checkbox__text"><span>Пункт</span></span>
  					</label>
					</div>
    	</div>
  	</div>
		
	</div>

			<button type="reset" class="filters-sidebar__btn-reset btn">Сбросить фильтры</button>

		</form>

	</div>

	<div class="category-sec__main main-category">

	<div class="main-category__inner">

	<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
						<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Maggiore</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Rotonda</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/02.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Maggiore</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Rotonda</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
						<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Maggiore</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Rotonda</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/02.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Maggiore</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Rotonda</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/01.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Rotonda</h3>
						<p class="card-popular__descp-subtitle">
							Суперстойкая глубоко — матовая
							краска для создания идеальных
							поверхностей
						</p>
						<div class="card-popular__descp-price">от 1 760 руб.</div>
					</div>
					<a href="#" class="card-popular__btn">Подробнее...</a>
				</div>
			</div>

	</div>

	<nav class="pagination d-flex">
	<div class="pagination__nav-links d-flex">
		<a class="pagination__back" href="#">Назад</a>
		<span class="pagination__numbers">1</span>
		<a class="pagination__numbers current" href="#">2</a>
		<a class="pagination__numbers" href="#">3</a>
		<a class="pagination__numbers" href="#">4</a>
		<a class="pagination__numbers" href="#">5</a>
		<div class="pagination__block-dot d-flex">
			<span class="pagination__dot">.</span>
			<span class="pagination__dot">.</span>
			<span class="pagination__dot">.</span>
		</div>
		<a class="pagination__numbers" href="#">60</a>
		<a class="pagination__next" href="#">Вперед</a>
	</div>
</nav>

	</div>

</div>

	</div>
</section>

@endsection 
