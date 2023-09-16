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
	<div class="_container">

		<h2 class="main-banner__title">Заголовок</h2>
		<p class="main-banner__subtitle">Подзагловок</p>

	</div>
</section>

<section class="page__popular popular section">
	<div class="_container">
		<h2 class="popular__title title">Популярные товары</h2>

		<div class="popular__inner d-flex">

			<div class="popular__column">
				<div class="popular__card card-popular">
					<div class="card-popular__img _ibg">
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
						<img src="@img" alt="">
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
