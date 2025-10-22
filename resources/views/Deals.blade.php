<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

@extends('layouts.app')

@section('title', 'KorinTekno - Deals')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/deals.css') }}">
@endpush

@section('content')
<main>
@include('partials.login')

{{-- Main Product --}}
<section class="relative w-full h-screen overflow-hidden">
    <img src="{{ asset('image/Deals/banner-1.png') }}" 
        alt="Deals Banner" 
        class="absolute inset-0 w-full h-full object-cover">
    
    <div class="absolute inset-0 bg-black/20"></div>

    <div class="relative z-10 flex flex-col justify-center items-start h-full p-8 sm:p-12 lg:p-24 text-white">
        <div class="max-w-md font-[poppins]">
            <p class="mb-1 text-sm sm:text-lg font-bold text-[#8DB600]">RTX 3090 Founder Edition</p>
            <h1 class="text-3xl sm:text-5xl font-semibold text-white">Rp 12.999.000</h1>
            <p class="mt-1 text-xl sm:text-2xl text-gray-400 line-through">Rp 16.350.649</p>
            <div class="mt-5">
                <a href="#" 
                  class="inline-block bg-white text-black font-bold text-lg py-3 px-10 rounded-md hover:bg-[#8DB600] hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                  Buy Now
                </a>
            </div>
        </div>
    </div>
</section>

{{-- RX 7900 XTX --}}
<section class="relative w-full h-screen overflow-hidden">
    <img src="{{ asset('image/Deals/banner-2.jpg') }}" 
        alt="Deals Banner" 
        class="absolute inset-0 w-full h-full object-cover">
    
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative z-10 flex flex-col justify-center items-start h-full p-8 sm:p-12 lg:p-24 text-white">
        <div class="max-w-md font-[poppins]">
            <p class="mb-1 text-sm sm:text-lg font-bold text-[#ff4d00]">AMD Radeon RX 7900 XTX</p>
            <h1 class="text-3xl sm:text-5xl font-semibold text-white">Rp 14.500.000</h1>
            <p class="mt-1 text-xl sm:text-2xl text-gray-400 line-through">Rp 16.843.496</p>
            <div class="mt-5">
                <a href="#" 
                  class="inline-block bg-white text-black font-bold text-lg py-3 px-10 rounded-md hover:bg-[#ff4d00] hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                  Buy Now
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 right-0 p-8 sm:p-12 lg:p-24">
        <img src="{{ asset('image/Deals/amd-logo.png') }}" alt="AMD Logo" class="h-10 sm:h-12 w-auto">
    </div>
</section>

{{-- Product --}}
<section class="w-full font-[poppins]">

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/x870E.jpg')}}" alt="ASUS X870E" class="absolute inset-0 w-full h-full object-cover object-center"/>
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full  text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">ASUS X870E Motherboard</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">Rp 26.098.000</span>
          <span class="text-white font-semibold">Rp 20.551.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/intel-processor.jpg')}}" alt="Intel Core Ultra 7" class="absolute inset-0 w-full h-full object-cover object-center" />
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">Intel Core Ultra 7 265KF</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">Rp 9.572.000</span>
          <span class="text-white font-semibold">Rp 7.494.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/z890.jpg')}}" alt="Z890 Motherboard" class="absolute inset-0 w-full h-full object-cover object-center" />
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">ASUS Z890 Motherboard</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">Rp 10.635.000</span>
          <span class="text-white font-semibold">Rp 9.081.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/AMD-Ryzen-9-9900X.jpg')}}" alt="Ryzen 9 9900X" class="absolute inset-0 w-full h-full object-cover object-top" />
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">AMD Ryzen 9 9900X</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">RP 7.495.000</span>
          <span class="text-white font-semibold">RP 5.500.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/rog-banner.jpg')}}" alt="ROG" class="absolute inset-0 w-full h-full object-cover object-top" />
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">ROG Strix G16</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">RP 33.036.000</span>
          <span class="text-white font-semibold">RP 30.500.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/lenovo-banner.jpg')}}" alt="Lenovo" class="absolute inset-0 w-full h-full object-cover object-top" />
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">Lenovo Legion Pro 5 Gen 10</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">RP 23.000.000</span>
          <span class="text-white font-semibold">RP 19.999.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>

    <div class="relative w-full h-[500px] overflow-hidden">
      <img src="{{asset('image/Deals/victus-banner2.jpg')}}" alt="Victus" class="absolute inset-0 w-full h-full object-cover object-top" />
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-2">OMEN Transcend Gaming</h2>
        <div class="mb-4 text-lg">
          <span class="line-through text-gray-300 mr-2">RP 22.564.000</span>
          <span class="text-white font-semibold">RP 19.291.000</span>
        </div>
          <a href="#" class="px-6 py-2 rounded-md font-bold bg-white text-black hover:bg-[#009CFF] hover:text-white transition-all duration-300 transform hover:-translate-y-1">Buy Now</a>
      </div>
    </div>
</section>

</main>
@endsection


