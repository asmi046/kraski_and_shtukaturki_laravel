@extends('layouts.all')

@php
    $title = "Услуги нашей компании";
    $description = "Наша компания оказывает услуги по ремонту и отделке различных помещений с применением специализированных материалов";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<x-category.banner :h1="$title"></x-category.banner>

<section class="page__categoty-top-sec categoty-top-sec section">
	<div class="_container">
        <x-breadcrumbs :title="$title"></x-breadcrumbs>
	</div>
</section>

<section class="page__services services section">
	<div class="_container">


		<div class="services__inner">

            <x-services-blk name="Профессиональное Нанесение декоративных покрытий" img="prof-n.webp"></x-services-blk>
            <x-services-blk name="Выезд на объект <br>для замера" img="zamer.webp"></x-services-blk>
            <x-services-blk name="Консультация , подбор фактур и цветов по проекту" img="podbor.webp"></x-services-blk>
            <x-services-blk name="Изготовление <br>выкрасов" img="vikras.webp"></x-services-blk>
            <x-services-blk name="Компьютерная <br>коллеровка" img="colloring.webp"></x-services-blk>


		</div>

	</div>
</section>

@endsection
