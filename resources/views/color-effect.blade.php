@extends('layouts.all')

@php
    $title = "Предлагаемые визуальный эффекты";
    $description = "Выберите необходимый визуальный эффект и просмотрите материалы которыми он реализуется";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')


<x-category.banner h1="Визуальные эффекты"></x-category.banner>

<section class="page__categoty-top-sec categoty-top-sec section">
	<div class="_container">
        <h2 style="display: none">Навигация по хлебным крошкам</h2>
        <x-breadcrumbs :title="$title"></x-breadcrumbs>
	</div>
</section>

<section class="effect_section">
    <div class="_container">
        <div class="services__inner">
            @foreach ($all_effects as $item)
                <x-effect-blk :item="$item"></x-effect-blk>
            @endforeach
        </div>
    </div>
</section>

@endsection
