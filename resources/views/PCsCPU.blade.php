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
<section class="w-full font-[poppins]">

<div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{asset('image/CPU/AMD-Ryzen-9-9900X.jpg')}}" alt="AMD" class="absolute inset-0 w-full h-full object-cover object-center"/>
        <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full  text-center text-white px-4">
            <h2 class="text-4xl font-bold mb-2"> <span class="text-[#ff4d00]">AMD Ryzen™</span> 9 9950X Series processors</h2>
                <div class="mb-4 text-lg">
                    <p>The Fastest Gaming Processor the World has Ever Seen</p>
                    <p class="font-bold">Rp 7.847.555</p>
                </div>
            <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#ff4d00] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
    </div>
</div>

<div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{asset('image/CPU/amd-7.jpg')}}" alt="AMD" class="absolute inset-0 w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2"> <span class="text-[#ff4d00]">AMD Ryzen™</span> 7 9800X3D Desktop Processor</h2>
            <div class="mb-4 text-lg">
                <p>Enjoy faster gaming with 2nd gen AMD 3D V-Cache™ technology for low latency</p>
                <p class="font-bold">Rp 7.847.555 </p>
            </div>
        <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#ff4d00] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
    </div>
</div>

<div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{asset('image/CPU/amd-ryzen-5-9600x.jpg')}}" alt="AMD" class="absolute inset-0 w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2"> <span class="text-[#ff4d00]">AMD Ryzen™</span> 5 9600X</h2>
            <div class="mb-4 text-lg">
                <p>Pure Gaming Performance</p>
                <p class="font-bold">Rp 3.300.500</p>
            </div>
        <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#ff4d00] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
    </div>
</div>

<div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{asset('image/CPU/Intel-Core-Ultra-9-285K.jpg')}}" alt="INTEL" class="absolute inset-0 w-full h-full object-cover object-top" />
        <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2"> <span class="text-[#009CFF]">Intel® Core™</span> Ultra 9 Processor 285K</h2>
            <div class="mb-4 text-lg">
                <p>Intel® Core™ Ultra processors and an available built-in Intel® Arc™ graphics are optimized to deliver great performance</p>
                <p class="font-bold">Rp 8.550.300</p>
            </div>
        <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
    </div>
</div>

<div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{asset('image/CPU/intel-core-ultra-7-265k.jpg')}}" alt="INTEL" class="absolute inset-0 w-full h-full object-cover object-top" />
        <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2"> <span class="text-[#009CFF]">Intel® Core™</span> Ultra 7 Processor 265U</h2>
            <div class="mb-4 text-lg">
                <p>Modern Graphics for Powerful Performance and Stunning Displays</p>
                <p class="font-bold">Rp 4.425.000</p>
            </div>
        <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
    </div>
</div>

<div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{asset('image/CPU/intel-14th-gen.jpg')}}" alt="Lenovo" class="absolute inset-0 w-full h-full object-cover object-top" />
        <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2"> <span class="text-[#009CFF]">Intel® Core™</span> Ultra 5 Processor 245K</h2>
            <div class="mb-4 text-lg">
                <p>Intel® Thread Director optimizes workload across performance and efficiency cores</p>
                <p class="font-bold">Rp 3.100.200</p>
            </div>
        <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
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
