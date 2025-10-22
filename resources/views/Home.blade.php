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
      <p>Welcome to KorinTekno, the ultimate destination for high-quality laptops, powerful PC parts, and exclusive daily deals! We offer a wide selection from top brands at competitive prices, with official warranties and fast service. Whether you’re building your dream PC, upgrading your work laptop, or hunting for the latest gaming components, you’ll find everything herecomplete, reliable, and always with deals that help you save more!.</p>
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

<section class="featured-products">
  <div class="containers">
    <h2 data-aos="fade-up" data-aos-duration="1000">Featured Products</h2>
    <div class="menu-nav" data-aos="fade-right" data-aos-duration="1000">
      <button class="menu-button active" data-menu="gaming-laptop">Gaming Laptop</button>
      <button class="menu-button" data-menu="productivity-laptop">Productivity Laptop</button>
      <button class="menu-button" data-menu="pc-components">PC & Components</button>
    </div>

    <div class="menu-display" data-aos="fade-left" data-aos-duration="1000">
      
      <div class="menu-content active" id="gaming-laptop">
        <div class="carousel">
          <button class="carousel-btn prev">&#10094;</button>
          <div class="carousel-track">
            @foreach (['gaming2.png', 'gaming3.png', 'gaming4.png', 'gaming5.png', 'gaming6.png','gaming7.png', 'gaming10.png'] as $gaming)
              <div class="product-card">
                <img src="{{ asset('image/FeaturedProducts/' . $gaming) }}" alt="Gaming Laptop" draggable="false">
                <h3>Gaming Laptop</h3>
                <p>High-performance for every gamer.</p>
                <button class="buy-button">Buy</button>
              </div>
            @endforeach
          </div>
          <button class="carousel-btn next">&#10095;</button>
        </div>
        <div class="carousel-dots"></div> 
      </div>

      <div class="menu-content" id="productivity-laptop">
        <div class="carousel">
          <button class="carousel-btn prev">&#10094;</button>
          <div class="carousel-track">
            @foreach (['productivity1.png', 'productivity2.png', 'productivity3.png', 'productivity4.png', 'productivity5.png', 'productivity6.png'] as $work)
              <div class="product-card">
                <img src="{{ asset('image/FeaturedProducts/' . $work) }}" alt="Productivity Laptop" draggable="false">
                <h3>Productivity Laptop</h3>
                <p>Work efficiently anywhere you go.</p>
                <button class="buy-button">Buy</button>
              </div>
            @endforeach
          </div>
          <button class="carousel-btn next">&#10095;</button>
        </div>
        <div class="carousel-dots"></div>
      </div>

      <div class="menu-content" id="pc-components">
        <div class="carousel">
          <button class="carousel-btn prev">&#10094;</button>
          <div class="carousel-track">
            @foreach (['cpu1.png', 'cpu3.png', 'cpu5.png', 'mb1.png', 'mb2.png', 'mb3.png', 'gpu1.png', 'gpu2.png', 'gpu3.png'] as $part)
              <div class="product-card">
                <img src="{{ asset('image/FeaturedProducts/' . $part) }}" alt="PC Component" draggable="false">
                <h3>PC Component</h3>
                <p>Upgrade your rig with the best parts.</p>
                <button class="buy-button">Buy</button>
              </div>
            @endforeach
          </div>
          <button class="carousel-btn next">&#10095;</button>
        </div>
        <div class="carousel-dots"></div>
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
          <img src="{{ asset('image/dell.png') }}">
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
