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
			Каталог продукции
		</h1>

	</div>
</section>

<x-breadcrumbs title="Каталог"></x-breadcrumbs>

<section class="categoty-top-sec">
	<div class="_container">
        <x-category.all-cat></x-category.all-cat>
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
                @foreach ($products as $item)
                    <x-product-card :item="$item"></x-product-card>
                @endforeach

            </div>

            <x-pagination :tovars="$products"></x-pagination>

	</div>

</div>

	</div>
</section>

@endsection
