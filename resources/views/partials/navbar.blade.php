<!-- Navbar -->
<link rel="stylesheet" href="home.css">
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
        <img src="image/logo1.png" alt="KorinTekno Logo">
        <span>KorinTekno</span>
        </div>
    <div class="nav-links">
    <a href="/">Home</a>
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