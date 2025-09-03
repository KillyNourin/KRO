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
    <div class="swiper mySwiper relative overflow-hidden w-full mx-auto aspect-[16/9] sm:aspect-[16/6] lg:aspect-[16/5] ">
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
                <span class="text-5xl sm:text-6xl font-bold">GeForce RTX 5000 Series</span><br>
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

{{-- RTX Games --}}
<section class="w-full min-h-screen bg-cover bg-center overflow-hidden flex flex-col justify-center items-center"
    style="background-image: url('{{ asset('image/GPU/geforce-game.jpg') }}');">
    <div class="max-w-4xl mx-auto text-center px-4 mt-10 mb-150">

        <!-- judul -->
        <h1 class="text-white text-3xl md:text-4xl font-[poppins] font-bold leading-none" data-aos="zoom-out-down" data-aos-duration="1000">
            RTX. It’s On.
        </h1>
        <h2 class="text-white text-xl md:text-2xl font-[poppins] font-semibold tracking-[4px] mt-2" data-aos="zoom-in-up" data-aos-duration="1000">
            The Ultimate in Ray Tracing and AI
        </h2>

        <!-- deskripsi -->
        <p class="text-white text-base leading-relaxed max-w-3xl mx-auto mt-5 mb-4" data-aos="fade-up" data-aos-duration="1000">
            RTX is the most advanced platform for full ray tracing and neural rendering technologies that are revolutionizing the ways we play and create. Over 700 games and applications use RTX to deliver realistic graphics and incredibly fast performance with cutting-edge AI features like DLSS Multi Frame Generation.
        </p>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <a href="#" class="text-white font-bold text-lg inline-flex transition-colors duration-300 hover:text-[#8DB600] items-center group">
                Latest RTX Games
                <span class="ml-2 transition-transform duration-300 group-hover:translate-x-2">&gt;</span>
            </a>
        </div>
    </div>
</section>

{{-- Ray Tracing NVIDIA --}}
<section class="bg-black py-16 sm:py-24">
    <div class="max-w-5xl mx-auto px-4">
        <h1 class="text-xl font-[poppins] font-bold text-white text-center">Full Ray Tracing With Neural Rendering</h1>
        <h2 class="text-4xl font-[poppins] font-semibold text-white text-center mt-3">Game-Changing Realism</h2>
        <p class="text-white text-base sm:text-lg text-center mt-4 mb-8">
            The NVIDIA Blackwell architecture unlocks the game-changing realism of full ray tracing. Experience cinematic quality visuals at unprecedented speed powered by GeForce RTX 50 Series with fourth-gen RT Cores and breakthrough neural rendering technologies accelerated with fifth-gen Tensor Cores.
        </p>

        <div class="comparison-slider shadow-2xl">
            <img src="{{asset('image/GPU/ray-after.jpg')}}" alt="After" oncontextmenu="return false;">

            <div class="label-off absolute bottom-4 left-4 z-20 text-white text-2xl font-bold font-[poppins] uppercase tracking-wider px-3 py-1 transition-opacity duration-300 select-none">
                RTX <span class="text-gray-400">OFF</span>
            </div>

            <div class="image-clipper">
                <img src="{{asset('image/GPU/ray-before.jpg')}}" alt="Before" oncontextmenu="return false;">
            </div>

            <div class="label-on absolute bottom-4 right-4 z-20 text-white text-2xl font-bold font-[poppins] uppercase tracking-wider px-3 py-1 transition-opacity duration-300 select-none">
                RTX <span class="text-[#8DB600]">ON</span>
            </div>

            <!-- slidernya -->
            <div class="slider-handle"></div>
        </div>
    </div>
</section>

{{-- AMD Radeon --}}
<section class="relative w-full min-h-screen overflow-hidden">
    <img src="{{ asset('image/GPU/ed-chevron-bg.png') }}" alt="AMD Radeon Background" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative w-full min-h-screen max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-5 gap-8 items-center">

        <div class="lg:col-span-2 text-center lg:text-left" data-aos="fade-right">
            <div class="mb-4 flex justify-center lg:justify-start">
                <img src="{{ asset('image/GPU/amd-logo.png') }}" alt="AMD Logo" class="h-16 w-auto mx-auto lg:mx-0">
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold font-[poppins] text-white">AMD Radeon™ RX 7000 Series</h2>
            <p class="mt-4 text-lg text-white">
                Experience unprecedented performance, visuals, and efficiency at 4K and beyond with AMD Radeon™ RX 7000 Series graphics cards, the world’s first gaming GPUs powered by AMD RDNA™ 3 chiplet technology.
            </p>
            
            <div class="mt-6 flex flex-col sm:flex-row items-center gap-4" data-aos="fade-up" data-aos-duration="1500">
            <a href="#">
            <button class="w-full sm:w-auto mt-2 inline-flex items-center bg-white font-bold text-black text-xl py-3 px-8 hover:bg-[#ff4d00] hover:text-white transition-all duration-300">
                Learn more
            </button>
            </a>
            </div>
        </div>

        <!-- interaksi product -->
        <div class="relative w-full h-[60vh] lg:h-full lg:col-span-3" data-aos="fade-in" data-aos-delay="200">

            <div class="interactive-item absolute top-[10%] left-[-5%] w-3/5 max-w-lg">
                <img src="{{asset('image/GPU/gpu-1.png')}}" alt="GPU 1" class="w-full h-auto">
                <button class="plus-button absolute top-[45%] right-[-35px] w-8 h-8 bg-white rounded-full text-black text-2xl font-bold flex items-center justify-center leading-none z-10">+</button>
                <div class="info-popup absolute top-[10%] right-[-220px] bg-white text-black p-4 rounded-lg shadow-lg w-48">
                    <h2 class="font-bold font-[poppins] text-nowrap">Radeon RX 7900 XTX</h2>
                </div>
            </div>

            <div class="interactive-item absolute bottom-[10%] right-[48%] w-3/5 max-w-lg">
                <img src="{{asset('image/GPU/gpu-2.png')}}" alt="GPU 2" class="w-full h-auto">
                <button class="plus-button absolute top-[-20px] right-[60%] w-8 h-8 bg-white rounded-full text-black text-2xl font-bold flex items-center justify-center leading-none z-10">+</button>
                <div class="info-popup absolute top-[-80px] right-[15%] bg-white text-black p-4 rounded-lg shadow-lg w-48">
                    <h2 class="font-bold font-[poppins]">Radeon RX 7800 XT</h2>
                </div>
            </div>

            <div class="interactive-item absolute top-[40%] right-[-15%] w-3/5 max-w-lg">
                <img src="{{asset('image/GPU/gpu-3.png')}}" alt="GPU 3" class="w-full h-auto">
                <button class="plus-button absolute top-[50%] left-[-25px] w-8 h-8 bg-white rounded-full text-black text-2xl font-bold flex items-center justify-center leading-none z-10">+</button>
                <div class="info-popup absolute top-[20%] left-[-220px] bg-white text-black p-4 rounded-lg shadow-lg w-48">
                    <h2 class="font-bold font-[poppins]">Radeon RX 7700 XT</h2>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Advantages --}}
<section class="w-full bg-black text-white py-16 sm:py-24">
    <div class="max-w7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
        <h1 class="text-3xl lg:text-4xl font-[poppins] font-bold">Stream Like a Pro</h1>
        <p class="mt-4 text-xl max-w-3xl mx-auto">With a new generation AMD Radiance Display™ Engine and Enhanced Media Engine, experience professional-level recording and streaming like never before. Deliver enhanced visual quality to your community when streaming and recording at lower bitrates, letting you focus on having your best game.</p>
    </div>
    <div class="mt-20 mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="lg:col-span-3" data-aos="fade-right" data-aos-duration="500">
            <img src="{{asset('image/GPU/girl-gamer-braids.png')}}" alt="Cewe Audiophile" class="w-full object-cover">
        </div>
        <div class="lg:col-span-2" data-aos="fade-left" data-aos-duration="500">
            <h1 class="text-xl lg:text-2xl font-[poppins] font-bold">High-Quality
            </h1>
            <h1 class="text-xl lg:text-2xl font-[poppins] font-bold">Streaming with AV13
            </h1>
            <p class="mt-4 text-lg max-w-sm leading-tight">Unlock new multi-media experiences with full AV1 encode/decode support, designed to deliver incredible image quality at lower bit rates and smaller file sizes.
            </p>
        </div>
    </div>
</section>

<section class="w-full bg-black text-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="order-2 lg:order-1 lg:col-span-2" data-aos="fade-right" data-aos-duration="500">
            <h1 class="text-xl lg:text-2xl font-[poppins] font-bold">
                Clear and Crisp Communication
            </h1>
            <p class="mt-4 text-lg max-w-lg leading-tight">
                AMD Noise Suppression4 helps reduce background audio noise from your surrounding environment using AI, offering greater clarity and concentration whether you are focused on an important meeting or staying locked in on a competitive game.
            </p>
        </div>
        <div class="order-1 lg:order-2 lg:col-span-3" data-aos="fade-left" data-aos-duration="500">
        <img src="{{asset('image/GPU/gamer.png')}}" alt="Gaming banget" class="w-full aspect-[580/285] object-cover rounded-2xl">
        </div>
    </div>
</section>

<section class="w-full bg-black text-white py-16 sm:py-24">
    <div class="mt-20 mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-center px-6 py-20">
        <div class="lg:col-span-3" data-aos="fade-right" data-aos-duration="500">
            <img src="{{asset('image/GPU/creator.png')}}" alt="Editing Sofware" class="w-full object-cover">
        </div>
        <div class="lg:col-span-2" data-aos="fade-left" data-aos-duration="500">
            <h1 class="text-xl lg:text-2xl font-[poppins] font-bold">
                Create with Your Favorite Tools
            </h1>
            <p class="mt-4 text-lg max-w-sm leading-tight">Bring your creativity to life with AMD Radeon™ RX 7000 Series graphics in the most popular content creation applications.
            </p>
        </div>
    </div>
</section>

{{-- Ray Tracing AMD --}}
<section class="bg-black py-16 sm:py-24">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-4xl font-[poppins] font-semibold text-white text-center mt-3">Realistic Raytracing</h2>
        <p class="text-white text-base sm:text-lg text-center mt-4 mb-8">
            Powerful raytracing accelerators on the AMD Radeon™ RX 7000 Series graphics bring jaw-dropping levels of details to lighting, shadows and reflections in supported games.
        </p>

        <div class="comparison-slider shadow-2xl">

            <img src="{{asset('image/GPU/rt-on.png')}}" alt="After" oncontextmenu="return false;">

            <div class="label-off absolute bottom-4 left-4 z-20 text-white text-xl font-bold font-[poppins] uppercase tracking-wider px-3 py-1 transition-opacity duration-300 select-none">
                RAYTRACING<span class="text-gray-400"> OFF</span>
            </div>

            <div class="image-clipper">
                <img src="{{asset('image/GPU/rt-off.png')}}" alt="Before" oncontextmenu="return false;">
            </div>

            <div class="label-on absolute bottom-4 right-4 z-20 text-white text-xl font-bold font-[poppins] uppercase tracking-wider px-3 py-1 transition-opacity duration-300 select-none">
                RAYTRACING<span class="text-[#ff4d00]"> ON</span>
            </div>

            <!-- slidernya -->
            <div class="slider-handle"></div>
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
