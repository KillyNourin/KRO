<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

@extends('layouts.app')

@section('title', 'KorinTekno - GPU')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pcsgpu.css') }}">
@endpush

@section('content')
<main>
@include('partials.login')

{{-- Hero Section --}}
<section class="hero w-full">
    <div class="swiper mySwiper relative overflow-hidden w-full mx-auto aspect-[16/5] ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/geforce-rtx-40-series.png') }}" alt="RTX 3090">
                </div>
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/asus-gforce.jpg') }}" alt="Asus G-Force">
                </div>
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/amd-radeon-gpu.jpg') }}" alt="AMD Radeon GPU">
                </div>
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/amd-radeon-g.jpg') }}" alt="AMD">
                </div>
            </div>

            <!-- button dan dot --> 
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
    </div>

</section>

{{-- GeForce RTX --}}
<section class="w-full min-h-screen bg-cover bg-center overflow-hidden grid items-center"
    style="background-image: url('{{ asset('image/GPU/geforce-rtx-5090.jpg') }}');">

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center px-4 sm:px-8 py-20 lg:p-12">

        <!-- kiri: teks (2/5 dari lebar) -->
        <!-- di mobile: urutan ke-2 (di bawah gambar), teks di tengah. Di desktop: urutan ke-1 (di kiri), teks rata kiri. -->
        <div class="lg:col-span-2 flex flex-col items-center lg:items-start text-center lg:text-left order-2 lg:order-1">

            <div class="mb-5" data-aos="fade" data-aos-duration="1500">
                <img src="{{ asset('image/GPU/NVIDIA_logo.png') }}" alt="ROG Logo" class="h-16 w-auto">
            </div>

            <!-- judul -->
            <!-- ukuran font dan whitespace dibuat responsif -->
            <h1 class="text-white font-[poppins] font-thin text-shadow" data-aos="fade-right" data-aos-duration="1000">
                <span class="text-5xl sm:text-6xl font-bold">GeForce RTX 50 Series</span><br>
            </h1>
            <h2 class="mt-4 text-white text-3xl sm:text-4xl lg:text-4xl xl:text-5xl font-semibold font-[poppins]">Game Changer</h2>

            <!-- deskripsi -->
            <p class="mt-5 text-gray-300 text-base sm:text-lg max-w-xl" data-aos="fade-left" data-aos-duration="1000">
                Powered by NVIDIA Blackwell, GeForce RTX™ 50 Series GPUs bring game-changing capabilities to gamers and creators. Equipped with a massive level of AI horsepower, the RTX 50 Series enables new experiences and next-level graphics fidelity. Multiply performance with NVIDIA DLSS 4, generate images at unprecedented speed, and unleash your creativity with NVIDIA Studio.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row items-center gap-4" data-aos="fade-up" data-aos-duration="1500">
                <a href="#">
                <button class="w-full sm:w-auto bg-white text-black font-bold text-xl py-3 px-8  hover:bg-[#8DB600] hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                    Learn more</a>
                </button>
            </div>
        </div>
</section>

</main>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/gpu.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
