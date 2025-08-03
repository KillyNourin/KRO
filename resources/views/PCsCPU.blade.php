<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

@extends('layouts.app')

@section('title', 'KorinTekno - CPU')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pcscpu.css') }}">
@endpush

@section('content')
<main>
@include('partials.login')

{{-- Hero Section --}}
<section class="hero w-full">
    <div class="swiper mySwiper relative overflow-hidden w-full mx-auto aspect-[16/9] sm:aspect-[16/6] lg:aspect-[16/5]">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/amd-radeon.jpg') }}" alt="AMD">
                </div>
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/ryzen.jpg') }}" alt="Ryzen">
                </div>
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/intel-processor.jpg') }}" alt="Intel Processor">
                </div>
                <div class="swiper-slide">
                    <img class="w-full h-full object-cover" src="{{ asset('image/slider/intelAjh.jpg') }}" alt="Intel AJH">
                </div>
            </div>

            <!-- button dan dot --> 
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
    </div>

{{-- Product Section --}}
<section class="product max-w-7xl mx-auto py-16 sm:py-24 px-4 sm:px-6 lg:px-8">
    <div class="space-y-24">

<!-- Ryzen 9 -->
<section class="diagonal-section bg-black text-white" data-aos="fade-down-left" data-aos-duration="800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="lg:col-span-3" data-aos="fade-right" data-aos-duration="1500">
            <img src="{{asset('image/CPU/AMD-Ryzen-9-9900X.jpg')}}" alt="Ryzen 9" class="w-full aspect-[580/285] object-cover rounded-2xl">
        </div>
        <div class="lg:col-span-2">
            <p class="text-sm font-semibold text-[#ff4d00] tracking-wider uppercase" data-aos="fade-left" data-aos-duration="1000">AMD Ryzen™ 9 9950X Series processors
            </p>
            <h2 class="mt-2 text-3xl lg:text-4xl font-[poppins] font-extrabold leading-tight text-white" data-aos="fade-left" data-aos-duration="1000">The Fastest Gaming Processor the World has Ever Seen
            </h2>
            <div class="mt-8 flex items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="bg-white text-black font-bold py-3 px-8 rounded-full hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy</a>
            <a href="#" class="text-white font-bold flex items-center group">
            Learn more
                <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
            </div>
        </div>
    </div>
</section>

<!-- Ryzen 7 -->
<section class="diagonal-section reversed bg-black text-white" data-aos="fade-down-right" data-aos-duration="800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="order-2 lg:order-1 lg:col-span-2">
            <p class="text-sm font-semibold text-[#ff4d00] tracking-wider uppercase" data-aos="fade-right" data-aos-duration="1000">AMD Ryzen™ 7 9800X3D Desktop Processor</p>
            <h2 class="mt-2 text-3xl lg:text-4xl font-[poppins] font-extrabold leading-tight text-white" data-aos="fade-right" data-aos-duration="1000">Enjoy faster gaming with 2nd gen AMD 3D V-Cache™ technology for low latency.</h2>
            <div class="mt-8 flex items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="bg-white text-black font-bold py-3 px-8 rounded-full hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy</a>
            <a href="#" class="text-white font-bold flex items-center group">
            Learn more
            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
            </div>
        </div>
        <div class="order-1 lg:order-2 lg:col-span-3" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{asset('image/CPU/amd-7.jpg')}}" alt="Ryzen 7" class="w-full aspect-[580/285] object-cover rounded-2xl">
        </div>
    </div>
</section>

<!-- Ryzen 5 -->
<section class="diagonal-section bg-black text-white" data-aos="fade-down-left" data-aos-duration="800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="lg:col-span-3" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{asset('image/CPU/amd-ryzen-5-9600x.jpg')}}" alt="Ryzen 5" class="w-full aspect-[580/285] object-cover rounded-2xl">
        </div>
        <div class="lg:col-span-2">
            <p class="text-sm font-semibold text-[#ff4d00] tracking-wider uppercase" data-aos="fade-left" data-aos-duration="1000">AMD Ryzen™ 5 9600X</p>
            <h2 class="mt-2 text-3xl lg:text-4xl font-[poppins] font-extrabold leading-tight text-white" data-aos="fade-left" data-aos-duration="1000">Pure Gaming Performance</h2>
            <div class="mt-8 flex items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="bg-white text-black font-bold py-3 px-8 rounded-full hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy</a>
            <a href="#" class="text-white font-bold flex items-center group">
                Learn more
            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
            </div>
        </div>
    </div>
</section>

<!-- Intel Ultra 9 -->
<section class="diagonal-section reversed bg-black text-white" data-aos="fade-down-right" data-aos-duration="800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="order-2 lg:order-1">
            <p class="text-sm font-semibold text-[#009CFF] tracking-wider uppercase" data-aos="fade-right" data-aos-duration="1000">Intel® Core™ Ultra 9 Processor 285K</p>
            <h2 class="mt-2 text-3xl lg:text-4xl font-[poppins] font-extrabold leading-tight text-white" data-aos="fade-right" data-aos-duration="1000">Intel® Core™ Ultra processors and an available built-in Intel® Arc™ graphics are optimized to deliver great performance.</h2>
            <div class="mt-8 flex items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="bg-white text-black font-bold py-3 px-8 rounded-full hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy</a>
            <a href="#" class="text-white font-bold flex items-center group">
            Learn more
            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
            </div>
        </div>
        <div class="order-1 lg:order-2 w-full" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{asset('image/CPU/Intel-Core-Ultra-9-285K.jpg')}}" alt="Intel Ultra 9" class="w-full aspect-[580/285] object-cover rounded-2xl">
        </div>
    </div>
</section>

<!-- Intel Ultra 7 -->
<section class="diagonal-section bg-black text-white" data-aos="fade-down-left" data-aos-duration="800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="w-full" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{asset('image/CPU/intel-core-ultra-7-265k.jpg')}}" alt="Intel Ultra 7" class="w-full aspect-[580/285] object-cover rounded-2xl">
        </div>
        <div class="order-2 lg:order-1">
            <p class="text-sm font-semibold text-[#009CFF] tracking-wider uppercase" data-aos="fade-left" data-aos-duration="1000">Intel® Core™ Ultra 7 Processor 265U</p>
            <h2 class="mt-2 text-3xl lg:text-4xl font-[poppins] font-extrabold leading-tight text-white" data-aos="fade-left" data-aos-duration="1000">Modern Graphics for Powerful Performance and Stunning Displays.</h2>
            <div class="mt-8 flex items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="bg-white text-black font-bold py-3 px-8 rounded-full hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy</a>
            <a href="#" class="text-white font-bold flex items-center group">
            Learn more
            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
            </div>
        </div>
    </div>
</section>

<!-- Intel Ultra 5 -->
<section class="diagonal-section reversed bg-black text-white" data-aos="fade-down-right" data-aos-duration="800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="order-2 lg:order-1">
            <p class="text-sm font-semibold text-[#009CFF] tracking-wider uppercase" data-aos="fade-right" data-aos-duration="1000">Intel® Core™ Ultra 5 Processor 245T</p>
            <h2 class="mt-2 text-3xl lg:text-4xl font-[poppins] font-extrabold leading-tight text-white" data-aos="fade-right" data-aos-duration="1000">Intel® Thread Director optimizes workload across performance and efficiency cores.</h2>
            <div class="mt-8 flex items-center gap-6" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="bg-white text-black font-bold py-3 px-8 rounded-full hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy</a>
            <a href="#" class="text-white font-bold flex items-center group">
            Learn more
            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
            </div>
        </div>
            <div class="order-1 lg:order-2 w-full" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{asset('image/CPU/intel-14th-gen.jpg')}}" alt="Intel Ultra 5" class="w-full aspect-[580/285] object-cover rounded-2xl">
            </div>
    </div>
</section>

</main>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/cpu.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
