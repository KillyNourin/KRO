<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KorinTekno - Jual Beli Laptop & PC Parts</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=nunito:400,600,700" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=montserrat:400,600,700" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=urbanist:400,600,700" rel="stylesheet" />
    <link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>
    <link rel="icon" href="image/logo1.png" type="image/png">
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
  <div class="nav-container">
    <div class="logo">
      <img src="image/logo1.png" alt="KorinTekno Logo">
      <span>KorinTekno</span>
    </div>
<div class="nav-links">
  <a href="/"  class="dropdown-button active">Home</a>
  <a href="laptop.html">Laptop</a>
  <div class="dropdown">
    <a href="computer.html">PCs</a> <!-- untuk Setiap page, nanti class="active" nya berbeda ya. kalau semisal untuk 'page laptop' nanti bakal jadi gini : <a href="laptop.html" class="active">Laptop</a> -->
    <button class="dropdown-btn">
      <svg class="arrow-icon" width="16" height="16" viewBox="0 0 24 24" fill="none">
        <polyline points="6 9 12 15 18 9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <div class="dropdown-menu">
      <a href="#">Motherboard</a>
      <a href="#">Processor</a>
      <a href="#">GPU</a>
      <a href="#">Pre-Build</a>
      <a href="#">Other...</a>
    </div>
  </div>
  <a href="contact.html">Deals</a>
</div>
  <div class="nav-actions">
      <a href="checkout"><button class="cart-btn">
        <svg class="cart-icon" width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 6h15l-1.5 9h-13z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="9" cy="21" r="1" stroke="#fff" stroke-width="2"/>
          <circle cx="19" cy="21" r="1" stroke="#fff" stroke-width="2"/>
        </svg>
      </button></a>
      <button class="join-btn">Join</button>
    </div>
  </div>
</nav>
<!-- Hero Section -->
<main>
<section class="hero">
<div class="hero-left"  data-aos="fade-left" data-aos-duration="1000">
    <h1>Find Your Laptop,<br>Component Parts For Your PC Here, With Big Deals</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus neque quia perspiciatis, corporis quisquam natus 
        reiciendis expedita magnam sed dolorum officiis nihil molestias amet! Quos cupiditate dolorum aut incidunt cumque.</p>
    <div class="hero-buttons">
        <button class="btn-primary">Explore</button>
        <button class="btn-secondary">Sign In</button>
    </div>
</div>
 <div class="hero-right" data-aos="fade-right" data-aos-duration="1000">
    <div class="scroll-wrapper">
      <div class="grid-item"><img src="image/carousel.avif" alt="Produk 1"></div>
      <div class="grid-item"><img src="image/carousel2.png" alt="Produk 2"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 3"></div>
      <div class="grid-item"><img src="image/dell.jpg" alt="Produk 4"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 5"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 6"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 7"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 8"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 9"></div>

      <!-- Duplikasi untuk seamless scroll -->
      <div class="grid-item"><img src="image/carousel.avif" alt="Produk 10"></div>
      <div class="grid-item"><img src="image/carousel2.png" alt="Produk 11"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 12"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 13"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 14"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 15"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 16"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 17"></div>
      <div class="grid-item"><img src="image/gaming1.png" alt="Produk 18"></div>
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
      <!-- Gaming Laptop -->
      <div class="menu-content active" id="gaming-laptop">
        <div class="first-card">
          <div class="img-placeholder">
            <img src="image/gaming1.png" alt="ASUS TUF GAMING A15" />
          </div>
          <div class="card-details">
            <h2 class="card-title">ASUS TUF GAMING A15</h2>
            <p class="card-description">Best Price for low budget gaming</p>
            <p class="card-specs">RTX 4060 with 16GB VRAM</p>
            <p class="card-specs">Ryzen 8000 series</p>
            <button class="buy-button">Buy</button>
          </div>
        </div>
        <div class="thumbnail-cards">
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
        </div>
      </div>

      <!-- Productivity Laptop -->
      <div class="menu-content" id="productivity-laptop">
        <div class="first-card">
          <div class="img-placeholder">
            <img src="image/dell.jpg" alt="DELL XPS 13" />
          </div>
          <div class="card-details">
            <h2 class="card-title">DELL XPS 13</h2>
            <p class="card-description">Portable performance for professionals</p>
            <p class="card-specs">Intel i7, Iris Xe</p>
            <p class="card-specs">16GB RAM, 1TB SSD</p>
            <button class="buy-button">Buy</button>
          </div>
        </div>
        <div class="thumbnail-cards">
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
        </div>
      </div>

      <!-- PC & Components -->
      <div class="menu-content" id="pc-components">
        <div class="first-card">
          <div class="img-placeholder">
            <img src="image/carousel.avif" alt="Ryzen 9 Custom PC" />
          </div>
          <div class="card-details">
            <h2 class="card-title">Ryzen 9 Custom PC</h2>
            <p class="card-description">High-end build for creators & gamers</p>
            <p class="card-specs">Ryzen 9 + RTX 4090</p>
            <p class="card-specs">64GB RAM, 2TB NVMe</p>
            <button class="buy-button">Buy</button>
          </div>
        </div>
        <div class="thumbnail-cards">
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
          <img class="thumbnail-image" src="image/gaming1.png" />
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="category" id="branch">
  <div class="category-magic">
    <h1 data-aos="fade-up" data-aos-duration="1000">Category</h1>
    <div class="row">
      <div class="category-col" data-aos="fade-left" data-aos-duration="1000">
        <img src="image/gaming1.png">
        <div class="layer">
          <h3><a href="#">GAMING</a></h3>
        </div>
      </div>
      <div class="category-col" data-aos="fade-up" data-aos-duration="1000">
        <img src="image/dell.jpg">
        <div class="layer">
          <h3><a href="#">PRODUCTIVITY</a></h3>
        </div>
      </div>
      <div class="category-col" data-aos="fade-right" data-aos-duration="1000">
        <img src="image/carousel.avif">
        <div class="layer">
          <h3><a href="#">PC</a></h3>
        </div>
      </div>
    </div>
  </div>
  </section>

</main>

<footer>
  <div class="footer-container">
    <div class="footer-logo">
      <img src="image/logo1.png" alt="Logo" />
      <span>KorinTekno</span>
    </div>

    <div class="footer-columns">
      <div class="footer-col">
        <h4>Company</h4>
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Support</a>
      </div>
      <div class="footer-col">
        <h4>Products</h4>
        <a href="#">Laptop</a>
        <a href="#">PC Components</a>
        <a href="#">Accessories</a>
      </div>
      <div class="footer-col">
        <h4>Follow Us</h4>
        <a href="#">Instagram</a>
        <a href="#">YouTube</a>
        <a href="#">TikTok</a>
      </div>
    </div>
  </div>

  <p class="copyright">
    Â© 2025 KorinTekno. All rights reserved.
  </p>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('js/script.js') }}" defer></script>
<script>
  AOS.init();

</script>
</body>
</html>