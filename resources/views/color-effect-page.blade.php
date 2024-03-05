@extends('layouts.all')

@php
     $title = (!empty($effect['seo_title']))?$effect['seo_title']:$effect['name'];
    $description = (!empty($effect['seo_description']))?$effect['seo_description']:"Декоративные краски и штукатурки ".$effect['name'];;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<x-category.banner :h1="$effect->name"></x-category.banner>

<x-breadcrumbs :effect="$effect"></x-breadcrumbs>

<section class="category-sec section">
	<div class="_container">

        <div class="category-sec__wrap effect-sec">

            <div class="category-sec__main effect-sec__main main-category">
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


@if ($effect->description)
    <section class="category-description-sec section">
        <div class="_container text_styles">
            {!! $effect->description !!}
        </div>
    </section
@endif

@endsection
