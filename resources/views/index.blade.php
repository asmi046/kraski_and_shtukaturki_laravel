@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<main class="page">

<section class="page__main-banner main-banner section">
	<div class="nuar_blk"></div>
	<div class="_container">

		<h1 class="main-banner__title">
			ДЕКОРАТИВНЫЕ
			ШТУКАТУРКИ
			MADE IN ITALY
		</h1>

	</div>
</section>

<section class="page__popular popular section">
	<div class="_container">
		<h2 class="popular__title title">Популярные товары</h2>

		<div class="popular__inner d-flex">

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

		</div>

		<div class="popular__btn-block">
			<button type="submit" class="popular__btn-all btn">Посмотреть все</button>
		</div>

	</div>
</section>

<section class="page__categories categories section">
	<div class="_container">
		<h2 class="categories__title title">Категории</h2>

		<div class="categories__inner d-flex">

		</div>

	</div>
</section>

<section class="page__advantages advantages section">
	<div class="_container">
		<h2 class="advantages__title title">Наши преимущества</h2>

		<div class="advantages__inner d-flex">

		</div>

	</div>
</section>

<section class="page__consult consult section">
	<div class="_container">

	<div class="consult__inner">
		<h2 class="consult__title">
			Получить консультацию 
			специалиста
		</h2>

		<div class="consult__subtitle">
			<p>
				Оставьте свои контакты и наши специалисты свяжутся 
				с Вами в течении 15 минут
			</p>
		</div>

		<form class="consult__form d-flex">
			<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Имя*" class="consult__form-input input">
			<input autocomplete="off" type="tel" name="form[]" data-error="Ошибка" placeholder="Телефон*" class="consult__form-input input">
			<button type="submit" class="consult__form-btn btn">Отправить</button>
		</form>

		<p class="consult__form-policy">* Отправляя заявку, вы соглашаетесь на обработку персональных данных</p>

		</div>

	</div>
</section>


<section class="page__popular popular section">
	<div class="_container">
		<h2 class="popular__title title">Популярные товары</h2>

		<div class="popular__inner d-flex">

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
					<img src="img/popular/03.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Color Quarz Primer</h3>
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
					<img src="img/popular/03.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Tintofis</h3>
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
					<img src="img/popular/03.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Nanofis</h3>
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
					<img src="img/popular/03.jpg" alt="Картинка товара">
					</div>
					<div class="card-popular__descp">
						<h3 class="card-popular__descp-title">Interofis</h3>
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

		<div class="popular__btn-block">
			<button type="submit" class="popular__btn-all btn">Посмотреть все</button>
		</div>

	</div>
</section>

<section class="page__advantages-slider advantages-slider section">
	<div class="_container">
		<h2 class="advantages-slider__title title">Наши преимущества</h2>

		<div class="advantages-slider__inner d-flex">

		<div class="advantages-slider__column">
			<div class="advantages-slider__item item-advantages">
				<span class="item-advantages__icon icon-bg-green"></span>
				<div class="item-advantages__descp">
					<p>
						Lorem Ipsum - это текст-"рыба", часто 
						используемый в печати и вэб-дизайне. 
					</p>
				</div>
			</div>
			</div>

			<div class="advantages-slider__column">
			<div class="advantages-slider__item item-advantages">
				<span class="item-advantages__icon icon-bg-brick"></span>
				<div class="item-advantages__descp">
					<p>
						Lorem Ipsum - это текст-"рыба", часто 
						используемый в печати и вэб-дизайне. 
					</p>
				</div>
			</div>
			</div>

			<div class="advantages-slider__column">
			<div class="advantages-slider__item item-advantages">
				<span class="item-advantages__icon icon-bg-green"></span>
				<div class="item-advantages__descp">
					<p>
						Lorem Ipsum - это текст-"рыба", часто 
						используемый в печати и вэб-дизайне. 
					</p>
				</div>
			</div>
			</div>

			<div class="advantages-slider__column">
			<div class="advantages-slider__item item-advantages">
				<span class="item-advantages__icon icon-bg-purpur"></span>
				<div class="item-advantages__descp">
					<p>
						Lorem Ipsum - это текст-"рыба", часто 
						используемый в печати и вэб-дизайне. 
					</p>
				</div>
			</div>
			</div>

			<div class="advantages-slider__column">
			<div class="advantages-slider__item item-advantages">
				<span class="item-advantages__icon icon-bg-green"></span>
				<div class="item-advantages__descp">
					<p>
						Lorem Ipsum - это текст-"рыба", часто 
						используемый в печати и вэб-дизайне. 
					</p>
				</div>
			</div>
			</div>

			<div class="advantages-slider__column">
			<div class="advantages-slider__item item-advantages">
				<span class="item-advantages__icon icon-bg-brick"></span>
				<div class="item-advantages__descp">
					<p>
						Lorem Ipsum - это текст-"рыба", часто 
						используемый в печати и вэб-дизайне. 
					</p>
				</div>
			</div>
			</div>
			

		</div>

	</div>
</section>

<section class="page__about about section">
	<div class="_container">
		<h2 class="about__title title">О нас</h2>
		<div class="about__subtitle">
			<p>
			Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" 
			для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя 
			Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
			</p>
		</div>
	</div>
</section>

</main>

@endsection
