@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <div>
        {!! $product["description"] !!}

        @foreach ( $product["props"] as $key => $item)
        <p>{{$key}} {{$item}}</p>

        @endforeach
    </div>

@endsection
