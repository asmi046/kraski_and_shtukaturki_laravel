@extends('layouts.all')

@php
     $title = (!empty($category_info['seo_title']))?$category_info['seo_title']:$category_info['name'];
    $description = (!empty($category_info['seo_description']))?$category_info['seo_description']:"Декоративные краски и штукатурки ".$category_info['name'];;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<x-category.banner :h1="$category_info->name"></x-category.banner>

<x-breadcrumbs :category="$category_info"></x-breadcrumbs>

<section class="categoty-top-sec">
	<div class="_container">
        <h2 style="display: none">Навигация по хлебным крошкам</h2>
        <x-category.all-cat :curenname="$category_info->name"></x-category.all-cat>
	</div>
</section>

<section class="category-sec section">
	<div class="_container">

        <div class="category-sec__wrap">

            {{-- <x-filter.sidebar-filter :name="$category_info->name"></x-filter.sidebar-filter> --}}
            <x-product-filter :name="$category_info->name"></x-product-filter>

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

@if ($category_info->description)
    <section class="category-description-sec section">
        <div class="_container text_styles">
            {!! $category_info->description !!}
        </div>
    </section
@endif


@endsection
