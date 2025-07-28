@extends('layouts.app')

@section('title', 'KorinTekno - Motherboard')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pcsmb.css') }}">
@endpush

@section('content')
<main>
@include('partials.login')
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

            <!-- button and dot -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
    </div>

</section>

{{-- Product Section --}}
<section class="product-section">
    <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center items-center" data-aos="fade" data-aos-duration="2000">
                <img class="max-w-xs h-auto m-20" src="{{ asset('image/Motherboard/MbROG.png') }}" alt="Motherboard ROG">
                <img class="max-w-xs h-auto m-20" src="{{ asset('image/Motherboard/ProWsMb.png') }}" alt="Motherboard Pro WS">
            </div>

        <div class="Asus-Motherboards" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="font-extrabold font-[poppins] text-5xl text-center mb-1">ASUS Motherboards</h2>
            <p class="text-center text-lg max-w-2xl mx-auto mb-20">The ASUS motherboards made hardcore overclocking more accessible, and we've stayed at the forefront of bringing advanced tuning to everyone. 
            Our automated 5-Way Optimization software delivered expert-level tweaking with a single click.</p>
        </div>
    </div>

</section>

{{-- ROG Motherboard --}}
<section class="w-full min-h-screen bg-cover bg-center overflow-hidden grid items-center"
    style="background-image: url('{{ asset('image/Motherboard/bg-kv.jpg') }}');">

    <!-- grid Container -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center px-4 sm:px-8 py-20 lg:p-12">

        <!-- KOLOM KIRI: KONTEN TEKS (2/5 dari lebar) -->
        <!-- di mobile: urutan ke-2 (di bawah gambar), teks di tengah. Di desktop: urutan ke-1 (di kiri), teks rata kiri. -->
        <div class="lg:col-span-2 flex flex-col items-center lg:items-start text-center lg:text-left order-2 lg:order-1">
            <!-- logo rog -->
            <div class="mb-5" data-aos="fade" data-aos-duration="1500">
                <img src="{{ asset('image/Motherboard/rog-eye.svg') }}" alt="ROG Logo" class="h-16 w-auto">
            </div>

            <!-- title -->
            <!-- ukuran font dan whitespace dibuat responsif -->
            <h1 class="text-white font-[ROG] font-thin text-shadow" data-aos="fade-right" data-aos-duration="1000">
                <span class="text-4xl sm:text-5xl lg:whitespace-nowrap">ROG CROSSHAIR X870E</span><br>
                <span class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold italic">EXTREME</span>
            </h1>
            <p class="mt-5 text-gray-300 text-base sm:text-lg max-w-xl" data-aos="fade-left" data-aos-duration="1000">
                The ROG Crosshair X870E Extreme is the flagship AMD Ryzen™ 9000 series motherboard, designed for the most discerning users. It provides the ultimate foundation for AM5 CPUs, DDR5 memory, and 
                PCIe® 5.0 components to ensure maximum performance and future-readiness. Its comprehensive connectivity includes USB4®, and the integrated 5-inch LCD offers a unique way to monitor system 
                performance or add a touch of personalized style.
            </p>

            <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-4" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('image/Motherboard/amd.png') }}" alt="AMD" class="h-10 sm:h-11">
                <img src="{{ asset('image/Motherboard/x870e.svg') }}" alt="X870E" class="h-10 sm:h-11">
                <img src="{{ asset('image/Motherboard/advanced-ai-badge.png') }}" alt="Advanced AI" class="h-10 sm:h-11">
                <img src="{{ asset('image/Motherboard/adobe-cc-1-month-free.svg') }}" alt="Adobe CC" class="h-10 sm:h-11">
            </div>

            <!-- button -->
            <div class="mt-8 flex flex-col sm:flex-row items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
                <button class="w-full sm:w-auto bg-white text-black font-bold text-lg py-3 px-8 rounded-full hover:bg-blue-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                    Buy
                </button>
                <a href="#" class="text-white font-bold text-lg flex items-center group">
                    Learn more
                    <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
                </a>
            </div>
        </div>

        <!-- KOLOM KANAN: GAMBAR PRODUK (3/5 dari lebar) -->
        <!-- Di mobile: urutan ke-1 (di atas). Di desktop: urutan ke-2 (di kanan) -->
        <div class="lg:col-span-3 flex items-center justify-center order-1 lg:order-2" data-aos="fade-down" data-aos-duration="1500">
            <img 
                src="{{ asset('image/Motherboard/X870E-Extreme.png') }}" 
                alt="ROG Crosshair X870E Extreme Motherboard" 
                class="w-full h-auto transition-transform duration-500 ease-out lg:scale-45 lg:-translate-x-19"
                style="filter: drop-shadow(0 25px 25px rgba(0,0,0,0.5));">
        </div>
    </div>

</section>

{{-- TUF Motherboard --}}
<section class="w-full min-h-screen bg-cover bg-center overflow-hidden grid items-center"
    style="background-image: url('{{ asset('image/Motherboard/tuf-4k.png') }}');">

    <!-- grid Container -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center px-4 sm:px-8 py-20 lg:p-12">

    <!-- KOLOM KIRI: KONTEN TEKS (2/5 dari lebar) -->
    <!-- di mobile: urutan ke-2 (di bawah gambar), teks di tengah. Di desktop: urutan ke-1 (di kiri), teks rata kiri. -->
    <div class="lg:col-span-2 flex flex-col items-center lg:items-start text-center lg:text-left order-2 lg:order-1">  

            <!-- logo tuf -->
            <div class="mb-5">
                <img src="{{ asset('image/Motherboard/tuf_logo.png') }}" alt="TUF Logo" class="h-25 w-auto" data-aos="fade" data-aos-duration="1500">
            </div>

            <!-- title -->
            <!-- ukuran font dan whitespace dibuat responsif -->
            <h1 class="text-white font-[Rajdhani] font-thin text-shadow" data-aos="fade-right" data-aos-duration="1000">
                <span class="text-6xl sm:text-7xl">TUF GAMING</span><br>
                <span class="text-6xl sm:text-7xl lg:text-7xl xl:text-8xl font-bold">B650EM-E WIFI</span>
            </h1>
            <p class="mt-5 text-gray-300 text-base sm:text-lg max-w-2xl" data-aos="fade-left" data-aos-duration="1000">
                TASUS TUF GAMING B650EM-E WIFI takes all the essential elements of the latest AMD Ryzen™ Desktop Processors and combines them with game-ready features and proven durability. Engineered with 
                military-grade components, an upgraded power solution and a comprehensive cooling system, this motherboard goes beyond expectations with rock-solid and stable performance for marathon gaming. 
                TUF GAMING motherboards also undergo rigorous endurance testing to ensure that they can handle conditions where others may fail. Aesthetically, this model incorporates rugged off-black and 
                geometric design elements to reflect the dependability and stability that defines the TUF GAMING series. This platform delivers the power and connectivity that advanced AI PC applications 
                demand.
            </p>

            <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-4" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('image/Motherboard/amd.png') }}" alt="AMD" class="h-10 sm:h-11">
                <img src="{{ asset('image/Motherboard/icon-b650e.png') }}" alt="B650E" class="h-10 sm:h-11">
                <img src="{{ asset('image/Motherboard/advanced-ai-badge.png') }}" alt="Advanced AI" class="h-10 sm:h-11">
            </div>

            <!-- button -->
            <div class="mt-8 flex flex-col sm:flex-row items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
                <button class="w-full sm:w-auto bg-white text-black font-bold text-lg py-3 px-8 rounded-full hover:bg-blue-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                    Buy
                </button>
                <a href="#" class="text-white font-bold text-lg flex items-center group">
                    Learn more
                    <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
                </a>
            </div>
    </div>

        <!-- KOLOM KANAN: GAMBAR PRODUK (3/5 dari lebar) -->
        <!-- di mobile: urutan ke-1 (di atas). Di desktop: urutan ke-2 (di kanan) -->
        <div class="lg:col-span-3 flex items-center justify-center order-1 lg:order-2">
            <img 
                src="{{ asset('image/Motherboard/kv-main.png') }}" 
                alt="TUF GAMING B650EM-E WIFI Motherboard" 
                class="w-full h-auto transition-transform duration-500 ease-out lg:scale-45 lg:-translate-x-19"
                style="filter: drop-shadow(0 25px 25px rgba(0,0,0,0.5));" data-aos="fade-up" data-aos-duration="1000">
        </div>
    </div>

</section>

{{-- Pro Workstation Motherboard --}}
<section class="bg-black py-24 px-5 text-center relative overflow-hidden">

    <!-- elemen grafis latar belakang -->
    <div class="absolute top-[-50px] left-1/2 -translate-x-1/2 w-[1200px] 
    h-[400px] opacity-20 z-0" 
        style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('image/Motherboard/gold-bg.jpg') }}'); background-size: cover; background-position: center;">
    </div>

        <!-- wrapper untuk konten agar berada di atas grafis -->
        <div class="relative z-10 max-w-7xl mx-auto">

            <!-- judul -->
            <h1 class="text-white text-8xl md:text-9xl font-[Rajdhani] 
            font-black leading-none" data-aos="zoom-out-down" data-aos-duration="1000">Pro</h1>

            <!-- subjudul  -->
            <h2 class="text-gray-400 text-xl md:text-2xl font-[Rajdhani] 
            font-semibold tracking-[4px] mt-2 mb-6" data-aos="zoom-in-up" data-aos-duration="1000">WORKSTATION 
            MOTHERBOARD</h2>

            <!-- deskripsi paragraf -->
            <p class="text-gray-300 text-base leading-relaxed max-w-3xl 
            mx-auto mb-10" data-aos="fade-up" data-aos-duration="1000">
            ASUS Pro Workstation motherboards are designed for 
            professionals working in AI, deep learning, animation, 3D 
            rendering or media production. Featuring expandable graphics, 
            extensive storage, impressive connectivity and exceptional 
            overall performance and reliability, Pro Workstation 
            motherboards are the ideal solution for creative 
            professionals. Each motherboard includes centralized 
            management software with support for out-of-band management, 
            so they're also an efficient and cost effective option for IT 
            administrators.
            </p>

            <div class="flex justify-center items-center gap-6 mb-20" data-aos="fade-up" data-aos-duration="1500">
                <button class="bg-white text-black font-bold text-lg py-3 
                px-8 rounded-full hover:bg-[#009CFF] hover:text-white 
                transition-all duration-300 transform 
                hover:-translate-y-1">
                Buy
                </button>
                <a href="#" class="text-white font-bold text-lg flex 
                items-center group">
                Learn more
                <span class="ml-2 transition-transform duration-300 
                group-hover:translate-x-2">&gt;</span>
                </a>
            </div>

            <!-- galeri untuk fitur-fitur -->
            <!-- 'group' adalah kunci untuk efek meredupkan kartu lain -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-x-6 gap-y-10 group">

                <!-- item 1 -->
                <a href="#" class="group/card relative 
                overflow-hidden rounded-lg transition-all duration-300 
                ease-in-out group-hover:opacity-50 hover:!opacity-100" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('image/Motherboard/picnav-n2.jpg') }}" 
                alt="Breakthrough Performance" class="w-full h-40 
                object-cover transition-transform duration-300 
                group-hover/card:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/
                70 to-transparent"></div>
                <p class="absolute bottom-4 left-4 text-left text-base 
                font-semibold text-gray-200 transition-all duration-300 
                group-hover/card:text-[#009CFF] group-hover/
                card:bottom-6">Breakthrough Performance</p>
                </a>

                <!-- item 2 -->
                <a href="#" class="group/card relative 
                overflow-hidden rounded-lg transition-all duration-300 
                ease-in-out group-hover:opacity-50 hover:!opacity-100" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ asset('image/Motherboard/picnav-n1.jpg
                    ') }}" alt="Multi-GPU support" class="w-full h-40 
                    object-cover transition-transform duration-300 
                    group-hover/card:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/
                70 to-transparent"></div>
                <p class="absolute bottom-4 left-4 text-left text-base 
                font-semibold text-gray-200 transition-all duration-300 
                group-hover/card:text-[#009CFF] group-hover/
                card:bottom-6">Multi-GPU Support</p>
                </a>

                <!-- item 3 -->
                <a href="#" class="group/card relative 
                overflow-hidden rounded-lg transition-all duration-300 
                ease-in-out group-hover:opacity-50 hover:!opacity-100" data-aos="fade-up" data-aos-duration="2000">
                    <img src="{{ asset('image/Motherboard/picnav-n4.jpg
                    ') }}" alt="Multi-GPU support" class="w-full h-40 
                    object-cover transition-transform duration-300 
                    group-hover/card:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/
                70 to-transparent"></div>
                <p class="absolute bottom-4 left-4 text-left text-base 
                font-semibold text-gray-200 transition-all duration-300 
                group-hover/card:text-[#009CFF] group-hover/
                card:bottom-6">Trustet Reliability</p>
                </a>

                <!-- item 4 -->
                <a href="#" class="group/card relative 
                overflow-hidden rounded-lg transition-all duration-300 
                ease-in-out group-hover:opacity-50 hover:!opacity-100" data-aos="fade-up" data-aos-duration="2500">
                    <img src="{{ asset('image/Motherboard/picnav-n3.jpg
                    ') }}" alt="Multi-GPU support" class="w-full h-40 
                    object-cover transition-transform duration-300 
                    group-hover/card:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/
                70 to-transparent"></div>
                <p class="absolute bottom-4 left-4 text-left text-base 
                font-semibold text-gray-200 transition-all duration-300 
                group-hover/card:text-[#009CFF] group-hover/
                card:bottom-6">IT Management</p>
                </a>
                </a>

                <!-- item 5 -->
                <a href="#" class="group/card relative 
                overflow-hidden rounded-lg transition-all duration-300 
                ease-in-out group-hover:opacity-50 hover:!opacity-100" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{ asset('image/Motherboard/picnav-n5.jpg
                    ') }}" alt="Multi-GPU support" class="w-full h-33 
                    object-cover transition-transform duration-300 
                    group-hover/card:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/
                70 to-transparent"></div>
                <p class="absolute bottom-4 left-4 text-left text-base 
                font-semibold text-gray-200 transition-all duration-300 
                group-hover/card:text-[#009CFF] group-hover/
                card:bottom-6">Ultra-Efficient Cooling</p>
                </a>
            </div>
        </div>

</section>

{{-- ProArt Motherboard --}}
<section class="relative w-full bg-black text-white">

    <!-- 1. Gambar Header -->
    <!-- 'aspect-[16/9]' menjaga rasio gambar tetap konsisten -->
    <div class="w-full aspect-[16/9]" data-aos="fade-up" data-aos-duration="500">
        <img 
            src="{{ asset('image/Motherboard/pro-art.jpg') }}" 
            alt="ProArt Motherboard" 
            class="w-full h-full object-cover"
        />
    </div>

    <!-- 2. Konten Utama (ditarik ke atas dengan margin negatif) -->
    <div class="relative z-10 -mt-24 sm:-mt-32 lg:-mt-40 px-4 text-center">
        <div class="max-w-4xl mx-auto">

            <!-- Judul -->
            <h1 class="font-[Rajdhani] font-semibold text-4xl sm:text-5xl lg:text-6xl text-shadow" data-aos="fade-right" data-aos-duration="1000">
                ProArt X870E-CREATOR WIFI
            </h1>

            <!-- Deskripsi -->
            <div class="mt-6 space-y-4 text-gray-300 text-base sm:text-lg leading-relaxed max-w-3xl mx-auto" data-aos="fade-right" data-aos-duration="1000">
                <p>
                    The ProArt X870E-Creator WIFI empowers creators of all levels by maximizing the performance of the latest AMD Ryzen™ 9000, 8000 and 7000 Series processors with 16+2+2 team power stages, DDR5 slots, PCIe® 5.0 and lightning-fast connectivity including dual USB4®, 10G and 2.5G Ethernet, and WIFI 7.
                </p>
                <p>
                    This motherboard manifests a professional, elegant and precise vision for content creators of all kinds, with a style elevated by tone-on-tone layers of black infused with metallic gold 
                    touches. A translucent I/O cover also gives users a stylish peek at the premium connectors within.
                </p>
            </div>

            <!-- Logo Fitur -->
            <div class="mt-8 flex flex-wrap items-center justify-center gap-x-8 gap-y-4" data-aos="fade" data-aos-duration="1000">
                <img src="{{ asset('image/Motherboard/amd.png') }}" alt="AMD" class="h-11">
                <img src="{{ asset('image/Motherboard/x870e.svg') }}" alt="X870E" class="h-11">
                <img src="{{ asset('image/Motherboard/advanced-ai-badge.png') }}" alt="Advanced AI" class="h-11">
                <img src="{{ asset('image/Motherboard/adobe-cc-3-month-free.png')}}" alt="Adobe Free 3 Month" class="h-11">
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6" data-aos="fade-up" data-aos-duration="15000">
                <button class="w-full sm:w-auto bg-white text-black font-bold text-lg py-3 px-8 rounded-full hover:bg-[#009CFF]  hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                    Buy
                </button>
                <a href="#" class="text-white font-bold text-lg flex items-center group">Learn more <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
                </a>
            </div>
        </div>
    </div>

</section>

</main>


@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/motherboard.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
