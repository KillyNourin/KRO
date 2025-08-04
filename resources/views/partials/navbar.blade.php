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
      <a href="/Deals" class="{{ request()->is('Deals') ? 'active' : '' }}">Deals</a>

      <div class="dropdown">
        <button class="dropdown-btn">
          <span class="dropdown-button {{ request()->is('PC*') ? 'active' : '' }}">PC</span>
          <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="dropdown-menu">
          <a href="/PCsMb" class="{{request()->is('PCsMb') ? 'active' : ''}}">Motherboard</a>
          <a href="/PCsGPU" class="{{request()->is('PCsGPU') ? 'active' : ''}}">GPU</a>
          <a href="/PCsCPU" class="{{request()->is('PCsCPU') ? 'active' : ''}}">CPU</a>
        </div>
      </div>
    </div>

<div class="nav-actions">
    @auth
        {{-- Jika sudah login, tampilkan foto profil --}}
        <div class="dropdown">
            <button class="dropdown-btn">
                <img src="{{ Auth::user()->profile_photo ?? asset('images/default-user.png') }}" alt="Profile" style="width: 36px; height: 36px; border-radius: 50%;">
                <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="dropdown-menu">
                <a href="/profile">Profil Saya</a>
                <a href="/logout">Logout</a>
            </div>
        </div>
    @else
        {{-- Jika belum login, tampilkan tombol Join --}}
        <button class="join-btn" onclick="openAuthPopup()">Join</button>
    @endauth

    {{-- Cart tetap tampil --}}
    <button class="cart-btn">
        <svg class="cart-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5-9v9" />
        </svg>
    </button>
</div>
</nav>
