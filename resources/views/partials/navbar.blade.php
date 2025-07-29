<nav class="navbar">
  <div class="nav-container">
    <div class="logo">
      <img src="/image/logo1.png" alt="Logo">
      <span>KorinTekno</span>
    </div>

    <button class="hamburger" id="hamburger-btn" aria-label="Toggle menu">
      ☰
    </button>

    <div class="nav-links" id="nav-menu">
      <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
      <a href="/laptop" class="{{ request()->is('laptop') ? 'active' : '' }}">Laptop</a>
      <a href="/deals" class="{{ request()->is('deals') ? 'active' : '' }}">Deals</a>

      <div class="dropdown">
        <button class="dropdown-btn">
          <span class="dropdown-button {{ request()->is('PC*') ? 'active' : '' }}">PC</span>
          <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="dropdown-menu">
          <a href="/PCsMb" class="{{request()->is('PCsMb') ? 'active' : ''}}">Motherboard</a>
          <a href="/PC/gpu">GPU</a>
          <a href="/PCsCPU" class="{{request()->is('PCsCPU') ? 'active' : ''}}">CPU</a>
          <a href="/PC/psu">Power Supply</a>
        </div>
      </div>
    </div>

    <div class="nav-actions">
      <button class="join-btn" onclick="toggleLoginPopup()">Join</button>
      <form action="{{ url('/checkout') }}" method="GET">
        <button type="submit" class="cart-btn">
          <svg class="cart-icon" viewBox="0 0 24 24" fill="none">
            <path d="M6 6h15l-1.5 9h-13L4 4H2" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </form>
    </div>
  </div>
</nav>
