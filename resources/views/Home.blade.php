@extends('layouts.app')

@section('title', 'KorinTekno - Jual Beli Laptop & PC Parts')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
@endpush


@section('content')
<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-container">
      <div class="hero-left" data-aos="fade-left" data-aos-duration="1000">
      <h1>Find Your Laptop,<br>Component Parts For Your PC Here, With Big Deals</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus neque quia perspiciatis, corporis quisquam natus 
          reiciendis expedita magnam sed dolorum officiis nihil molestias amet! Quos cupiditate dolorum aut incidunt cumque.</p>
      <div class="hero-buttons">
          <button class="btn-primary">Explore</button>
          <button class="btn-secondary">Sign In</button>
      </div>
    </div>
    <div class="hero-right" data-aos="fade-right" data-aos-duration="1000">
      <div class="scroll-wrapper">
        <!-- Carousel Images -->
        @foreach ($carouselImages as $file)
          <div class="grid-item">
          <img src="{{ asset('image/laptop/' . $file->getFilename()) }}" alt="Produk">
          </div>
        @endforeach
      </div>
    </div>
    </div>
  </section>

  <!-- Featured Products -->
  <section class="featured-products">
    <div class="containers">
      <h2 data-aos="fade-up" data-aos-duration="1000">Featured Products</h2>
      <div class="menu-nav" data-aos="fade-right" data-aos-duration="1000">
        <button class="menu-button active" data-menu="gaming-laptop">Gaming Laptop</button>
        <button class="menu-button" data-menu="productivity-laptop">Productivity Laptop</button>
        <button class="menu-button" data-menu="pc-components">PC & Components</button>
      </div>

      <div class="menu-display" data-aos="fade-left" data-aos-duration="1000">
        <!-- Contoh tab product: gaming laptop -->
       <div class="menu-content active" id="gaming-laptop">
          <div class="first-card">
            <div class="img-placeholder"><img src="{{ asset('image/gaming/gaming1.png') }}" alt="ASUS TUF GAMING A15"></div>
            <div class="card-details">
              <h2 class="card-title">ASUS TUF GAMING A15</h2>
              <p class="card-description">Best Price for low budget gaming</p>
              <p class="card-specs">RTX 4060 with 16GB VRAM</p>
              <p class="card-specs">Ryzen 8000 series</p>
              <button class="buy-button">Buy</button>
            </div>
          </div>
          <div class="thumbnail-cards">
            @for ($i = 1; $i <= 4; $i++)
              <img class="thumbnail-image" src="{{ asset('image/gaming/gaming1.png') }}">
            @endfor
          </div>
        </div>

        <div class="menu-content" id="productivity-laptop">
          <div class="first-card">
            <div class="img-placeholder"><img src="{{ asset('image/dell.jpg') }}" alt="Dell XPS 15"></div>
            <div class="card-details">
              <h2 class="card-title">Dell XPS 15</h2>
              <p class="card-description">Perfect for productivity and portability</p>
              <p class="card-specs">Intel Core i7 Gen 13th</p>
              <p class="card-specs">32GB RAM, 1TB SSD</p>
              <button class="buy-button">Buy</button>
            </div>
          </div>
           <div class="thumbnail-cards">
            @for ($i = 1; $i <= 4; $i++)
              <img class="thumbnail-image" src="{{ asset('image/dell.jpg') }}">
            @endfor
          </div>
        </div>

        <div class="menu-content" id="pc-components">
          <div class="first-card">
            <div class="img-placeholder"><img src="{{ asset('image/carousel.png') }}" alt="PC Parts"></div>
            <div class="card-details">
              <h2 class="card-title">NVIDIA RTX 4070 Ti</h2>
              <p class="card-description">Ideal for high-end builds</p>
              <p class="card-specs">12GB GDDR6X</p>
              <p class="card-specs">DLSS 3.5 Ready</p>
              <button class="buy-button">Buy</button>
            </div>
          </div>
           <div class="thumbnail-cards">
            @for ($i = 1; $i <= 4; $i++)
              <img class="thumbnail-image" src="{{ asset('image/carousel.png') }}">
            @endfor
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Category Section -->
  <section class="category" id="branch">
    <div class="category-magic">
      <h1 data-aos="fade-up" data-aos-duration="1000">Category</h1>
      <div class="row">
        <div class="category-col" data-aos="fade-left" data-aos-duration="1000">
          <img src="{{ asset('image/gaming/gaming2.png') }}">
          <div class="layer"><h3><a href="#">GAMING</a></h3></div>
        </div>
        <div class="category-col" data-aos="fade-up" data-aos-duration="1000">
          <img src="{{ asset('image/dell.jpg') }}">
          <div class="layer"><h3><a href="#">PRODUCTIVITY</a></h3></div>
        </div>
        <div class="category-col" data-aos="fade-right" data-aos-duration="1000">
          <img src="{{ asset('image/carousel.png') }}">
          <div class="layer"><h3><a href="#">PC</a></h3></div>
        </div>
      </div>
    </div>
  </section>
</main>
@include('partials.login')
@endsection

@push('scripts')
  <script src="{{ asset('js/script.js') }}" defer></script>
  <script src="{{ asset('js/login.js') }}"></script>
@endpush
