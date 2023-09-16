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

<section class="page__about about section">
	<div class="_container">

		<h2 class="about__title title">Загловок</h2>
		<p class="about__subtitle">Подзагловок</p>

	</div>
</section>

</main>

@endsection
