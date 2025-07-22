@extends('layouts.app')

@section('title', 'KorinTekno - Motherboard')

@push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pcsmb.css') }}">
@endpush

@section('content')
<main>
    {{-- Hero Section --}}
    <section class="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('image/slider/x870.jpg') }}" alt="Asus X870 Motherboard">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/slider/z890.jpg') }}" alt="Asus Z890 Motherboard">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/slider/x870e.jpg') }}" alt="Asus X870E Motherboard">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/slider/x870Eai.jpg') }}" alt="Asus X870E AI Motherboard">
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    {{-- Product Section --}}
    <section class="product-section">
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="max-w-xs m-12">
                <img src="{{ asset('image/Motherboard/MbROG.png') }}" alt="Motherboard ROG">
            </div>
            <div class="max-w-xs m-12">
                <img src="{{ asset('image/Motherboard/ProWsMb.png') }}" alt="Motherboard Pro WS">
        </div>
        












































</main> 
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
@endpush
@endsection