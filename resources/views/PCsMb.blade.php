@extends('layouts.app')

@section('title', 'KorinTekno - Motherboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pcsmb.css') }}">
@endpush

@section('content')
<main> 
    {{-- Hero Section --}}
    <section class="hero">
        <div class="slider-wrapper">
            <div class="slider">
                <img src="{{ asset('image/slider/x870.jpg') }}" alt="Asus X870 Motherboard">
                <img src="{{ asset('image/slider/x870e.jpg') }}" alt="Asus X870E Motherboard">                
                <img src="{{ asset('image/slider/z890.jpg') }}" alt="Asus Z890 Motherboard">
            </div>
        </div>
    </section>
</main>