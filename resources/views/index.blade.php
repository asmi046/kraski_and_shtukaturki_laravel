@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

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

			@foreach ( $sales_liders as $item)
                <x-product-card :item="$item"></x-product-card>
            @endforeach

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

		<div class="categories__left-col">

			<a href="#" class="categories__box box-categories">
				<div class="box-categories__img _ibg">
					<img src="img/categories/01.jpg" alt="Картинка">
				</div>
				<div class="box-categories__text">
					<p>
						Декоративные <br>
						краски
					</p>
				</div>
			</a>

			<a href="#" class="categories__box box-categories">
				<div class="box-categories__img _ibg">
					<img src="img/categories/02.jpg" alt="Картинка">
				</div>
				<div class="box-categories__text">
					<p>
					Венецианская <br>
					штукатурка
					</p>
				</div>
</a>

		</div>

		<a href="#" class="categories__box box-categories box-categories--center">
				<div class="box-categories__img _ibg">
					<img src="img/categories/03.jpg" alt="Картинка">
				</div>
				<div class="box-categories__text">
					<p>
					Фактурные <br>
					покрытия
					</p>
				</div>
</a>

		<div class="categories__right-col">

<a href="#" class="categories__box box-categories">
		<div class="box-categories__img _ibg">
			<img src="img/categories/04.jpg" alt="Картинка">
		</div>
		<div class="box-categories__text">
			<p>
			Микроцемент
			</p>
		</div>
</a>

	<a href="#" class="categories__box box-categories">
		<div class="box-categories__img _ibg">
			<img src="img/categories/05.jpg" alt="Картинка">
		</div>
		<div class="box-categories__text">
			<p>
			Финишные <br>
			покрытия
			</p>
		</div>
</a>

</div>

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
		<h2 class="popular__title title">товары со скидкой</h2>

		<div class="popular__inner d-flex">

            @foreach ( $sales as $item)
                <x-product-card :item="$item"></x-product-card>
            @endforeach

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

		    <x-advantages stylem="adv_quality" color="green" text="Высокое качество материалов - только высококачественная штукатурка, которая обеспечивает прочное и долговечное покрытие" ></x-advantages>
		    <x-advantages stylem="adv_estet" color="brick" text="Эстетическая привлекательность - наши краски и штукатурки создают элегантный и уникальный вид в вашем доме или офисе"></x-advantages>
		    <x-advantages stylem="adv_select" color="green" text="Разнообразие оттенков - у нас вы найдете широкий выбор цветов и оттенков, чтобы подобрать идеальный вариант, отвечающий вашим предпочтениям"></x-advantages>
		    <x-advantages stylem="adv_strong" color="brick" text="Устойчивость к воздействию - наша штукатурка и краска обладает высокой стойкостью к механическим повреждениям и воздействию влаги"></x-advantages>
		    <x-advantages stylem="adv_uhod" color="green" text="Простота ухода - поверхность, покрытая штукатуркой, легко чистится и обслуживается, что позволяет вам сохранять красивый вид вашего интерьера"></x-advantages>
		    <x-advantages stylem="adv_servic" color="brick" text="Профессиональное обслуживание - наша команда опытных специалистов всегда готова предоставить вам профессиональные консультации"></x-advantages>


		</div>

	</div>
</section>

<section class="page__about about section">
	<div class="_container">
		<h2 class="about__title title">О нас</h2>
		<div class="about__subtitle">
			{!! $options["about_main"] !!}
		</div>
	</div>
</section>


@endsection
