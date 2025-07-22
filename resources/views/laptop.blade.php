@extends('layouts.app')

@section('title', 'KorinTekno Laptop Catalog')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/laptop.css') }}">
@endpush

@section('content')
<main>
  <!-- ASUS Series -->
  <section class="brand-section">
    <h2>Asus Series</h2>
    <p class="subtitle">In Search of Incredible</p>
    <button class="more-btn" data-target="#asus-highlight">More</button>
  </section>

  <div class="highlight-banner-asus" id="asus-highlight" data-aos="fade-right" data-aos-delay="300">
    <div class="highlight-text">
      <h3>ROG Strix G16</h3>
      <p>NVIDIA® GeForce RTX™ 50 Series</p>
      <button>Buy</button>
    </div>
  </div>

  <div class="products" id="asus-products">
    <div class="product-card" data-aos="fade-up">
      <h3>ROG Strix G16</h3>
      <p>NVIDIA® GeForce RTX™ 50 Series</p>
      <p>Intel® Core™ Ultra 9 Processor 275HX</p>
      <p>1TB M.2 NVMe™ Gen 4 Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/rog-strix.png') }}" alt="ROG Strix">
    </div>
    <div class="product-card" data-aos="fade-up" data-aos-delay="100">
      <h3>TUF A16</h3>
      <p>NVIDIA® GeForce RTX™ 50 Series</p>
      <p>AMD Ryzen™ 7 260 ProcessorX</p>
      <p>Up to 2TB M.2 NVMe™ Gen 4 Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/tuf-a16.png') }}" alt="TUF A16">
    </div>
    <div class="product-card" data-aos="fade-up" data-aos-delay="200">
      <h3>Zenbook A14</h3>
      <p>Qualcomm® Adreno™ GPU</p>
      <p>Snapdragon® X Series Processor</p>
      <p>512GB M.2 NVMe™ Gen 4 Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/zenbook-a14.png') }}" alt="Zenbook A14">
    </div>
    <div class="product-card all-products" data-aos="fade-up" data-aos-delay="300">
      <h3>All Products</h3>
      <button>&#10140;</button>
    </div>
  </div>

  <!-- Lenovo Series -->
  <section class="brand-section">
    <h2>Lenovo Series</h2>
    <p class="subtitle">Smarter Technology For All</p>
    <button class="more-btn" data-target="#lenovo-highlight">More</button>
  </section>

  <div class="highlight-banner-lenovo" id="lenovo-highlight" data-aos="fade-right" data-aos-delay="300">
    <div class="highlight-text-lenovo">
      <h3>Legion 5 Gen 10</h3>
      <p>RTX™ 50 Series Gaming Laptop</p>
      <button>Buy</button>
    </div>
  </div>

  <div class="products" id="lenovo-products">
    <div class="product-card" data-aos="fade-up">
      <h3>Legion 5 Gen 10</h3>
      <p>NVIDIA® GeForce RTX™ 50 Series</p>
      <p>AMD Ryzen™ 7 260 Processor</p>
      <p>Up To 2TB M.2 NVMe™ Gen 4 Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/legion5.png') }}" alt="Legion 5">
    </div>
    <div class="product-card" data-aos="fade-up" data-aos-delay="100">
      <h3>IdeaPad 5i</h3>
      <p>Integrated: Intel® Graphics</p>
      <p>Intel® Core™ Ultra 7 255U Processor</p>
      <p>Up to 1TB M.2 NVMe™ Gen 4 Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/ideapad5i.png') }}" alt="IdeaPad 5i">
    </div>
    <div class="product-card" data-aos="fade-up" data-aos-delay="200">
      <h3>ThinkPad T14</h3>
      <p>AMD Radeon™ 780Ms</p>
      <p>AMD Ryzen™ 7 PRO 8840U Processor</p>
      <p>1TB M.2 NVMe™ Gen 4 Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/thinkpad-t14.png') }}" alt="ThinkPad T14">
    </div>
    <div class="product-card all-products" data-aos="fade-up" data-aos-delay="300">
      <h3>All Products</h3>
      <button>&#10140;</button>
    </div>
  </div>

  <!-- HP Series -->
  <section class="brand-section">
    <h2>HP Series</h2>
    <p class="subtitle">Keep Reinventing</p>
    <button class="more-btn" data-target="#hp-highlight">More</button>
  </section>

  <div class="highlight-banner-hp" id="hp-highlight" data-aos="fade-right" data-aos-delay="500">
    <div class="highlight-text">
      <h3>Victus 15t</h3>
      <p>RTX™ 40 Series Gaming Laptop</p>
      <button>Buy</button>
    </div>
  </div>

  <div class="products" id="hp-products">
    <div class="product-card" data-aos="fade-up">
      <h3>Victus 15t</h3>
      <p>NVIDIA® GeForce RTX™ 40 Series</p>
      <p>Intel® Core™ 7-14700HX</p>
      <p>1TB M.2 NVMe™ Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/victus-15t.png') }}" alt="Victus 15t">
    </div>
    <div class="product-card" data-aos="fade-up" data-aos-delay="100">
      <h3>Pavilion 16t</h3>
      <p>Integrated: Intel® Graphics</p>
      <p>Intel® Core™ i5-1334U</p>
      <p>1TB M.2 NVMe™ Storage</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/pavilion-16t.png') }}" alt="Pavilion 16t">
    </div>
    <div class="product-card" data-aos="fade-up" data-aos-delay="200">
      <h3>ProBook 460</h3>
      <p>Integrated: Intel® Graphics</p>
      <p>Intel® Core™ Ultra 7 155U</p>
      <p>512 GB PCIe® NVMe™</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/probook-460.png') }}" alt="ProBook 460">
    </div>
    <div class="product-card all-products" data-aos="fade-up" data-aos-delay="300">
      <h3>All Products</h3>
      <button>&#10140;</button>
    </div>
  </div>
</main>
@endsection

@push('scripts')
  <script src="{{ asset('js/laptop.js') }}" defer></script>
@endpush