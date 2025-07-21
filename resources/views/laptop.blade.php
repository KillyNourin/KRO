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
    <button class="more-btn">More</button>
  </section>

  <div class="highlight-banner">
    <div class="highlight-text">
      <h3>ROG Strix G16</h3>
      <p>RTX™ 50 Series Gaming Laptop</p>
      <button>Buy</button>
    </div>
    <div class="highlight-img">
      <img src="{{ asset('image/laptop/asus-banner1.png') }}" alt="Asus Banner">
    </div>
  </div>

  <div class="products">
    <div class="product-card">
      <h3>ROG Strix G16</h3>
      <p>Intel i9 | RTX 50 Series</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/rog-strix.png') }}" alt="ROG Strix">
    </div>
    <div class="product-card">
      <h3>TUF A16</h3>
      <p>AMD Ryzen 7 | RTX 50 Series</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/tuf-a16.png') }}" alt="TUF A16">
    </div>
    <div class="product-card">
      <h3>Zenbook A14</h3>
      <p>Intel Core Ultra 7 | OLED Display</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/zenbook-a14.png') }}" alt="Zenbook A14">
    </div>
    <div class="product-card all-products">
      <h3>All Products</h3>
      <button>&#10140;</button>
    </div>
  </div>

  <!-- Lenovo Series -->
  <section class="brand-section">
    <h2>Lenovo Series</h2>
    <p class="subtitle">Smarter Technology For All</p>
    <button class="more-btn">More</button>
  </section>

  <div class="highlight-banner">
    <div class="highlight-text">
      <h3>Legion 5 Gen 10</h3>
      <p>RTX™ 50 Series Gaming Laptop</p>
      <button>Buy</button>
    </div>
    <div class="highlight-img">
      <img src="{{ asset('image/laptop/banner-lenovo1.png') }}" alt="Lenovo Banner">
    </div>
  </div>

  <div class="products">
    <div class="product-card">
      <h3>Legion 5 Gen 10</h3>
      <p>Ryzen 7 | RTX 50 Series</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/legion5.png') }}" alt="Legion 5">
    </div>
    <div class="product-card">
      <h3>IdeaPad 5i</h3>
      <p>Intel Ultra 7 | 1TB SSD</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/ideapad5i.png') }}" alt="IdeaPad 5i">
    </div>
    <div class="product-card">
      <h3>ThinkPad T14</h3>
      <p>Ryzen 7 PRO | Business Laptop</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/thinkpad-t14.png') }}" alt="ThinkPad T14">
    </div>
    <div class="product-card all-products">
      <h3>All Products</h3>
      <button>&#10140;</button>
    </div>
  </div>

  <!-- HP Series -->
  <section class="brand-section">
    <h2>HP Series</h2>
    <p class="subtitle">Keep Reinventing</p>
    <button class="more-btn">More</button>
  </section>

  <div class="highlight-banner">
    <div class="highlight-text">
      <h3>Victus 15t</h3>
      <p>RTX™ 50 Series Gaming Laptop</p>
      <button>Buy</button>
    </div>
    <div class="highlight-img">
      <img src="{{ asset('image/laptop/hp-banner1.png') }}" alt="HP Banner">
    </div>
  </div>

  <div class="products">
    <div class="product-card">
      <h3>Victus 15t</h3>
      <p>i7 14700H | RTX 50 Series</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/victus-15t.png') }}" alt="Victus 15t">
    </div>
    <div class="product-card">
      <h3>Pavilion 16t</h3>
      <p>i5 1340P | 1TB SSD</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/pavilion-16t.png') }}" alt="Pavilion 16t">
    </div>
    <div class="product-card">
      <h3>ProBook 460</h3>
      <p>Ultra 7 155U | 512GB SSD</p>
      <button>Buy</button>
      <img src="{{ asset('image/laptop/probook-460.png') }}" alt="ProBook 460">
    </div>
    <div class="product-card all-products">
      <h3>All Products</h3>
      <button>&#10140;</button>
    </div>
  </div>
  </main>
@endsection

@push('scripts')
  <script src="{{ asset('js/laptop-transition.js') }}" defer></script>
@endpush