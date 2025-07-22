@extends('layouts.app')

@section('title', 'KorinTekno - Motherboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pcsmb.css') }}">
@endpush

@section('content')
<main>
    <section class="hero">
        <div class="relative mx-0" >
            <div class="flex">
                <img id="slide 1" src="{{ asset('image/slider/x870.jpg') }}" alt="Asus X870 Motherboard">
                <img id="slide 2" src="{{ asset('image/slider/x870e.jpg') }}" alt="Asus X870E Motherboard">
                <img id="slide 3" src="{{ asset('image/slider/z890.jpg') }}" alt="Asus Z890 Motherboard">
            </div>
                <div class="slider-hero">
                    <a href="#slide 1"></a>
                    <a href="#slide 2"></a>
                    <a href="#slide 3"></a>
                </div>
        </div>
    </section>
</main> 