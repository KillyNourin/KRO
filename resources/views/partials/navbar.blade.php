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

@php
    $hasCart = session()->has('keranjang') && count((array) session('keranjang')) > 0;
@endphp

<div class="nav-actions">
    @auth
        {{-- Menggunakan struktur dropdown yang sama dengan menu PC untuk konsistensi --}}
        <div class="dropdown user-dropdown">
            <button class="dropdown-btn">
                <img src="{{ Auth::user()->profile_photo ?? asset('image/p3.ico') }}" 
                    alt="Profile" class="profile-pic">
                <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div class="dropdown-menu">
                <a href="#">Profil Saya</a>

                {{-- Tombol Logout --}}
                <a href="#" id="logout-link">Logout</a>

                {{-- Form Logout POST --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </div>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const logoutLink = document.getElementById("logout-link");
            logoutLink.addEventListener("click", function(e) {
                e.preventDefault();
                document.getElementById("logout-form").submit();
            });
        });
        </script>
    @else
        {{-- Tombol Join tetap di dalam kontainer yang sama --}}
        <button class="join-btn" onclick="openAuthPopup()">Join</button>
    @endauth

    {{-- Cart tetap tampil --}}
    <form action="{{ url('/checkout') }}" method="GET" style="position: relative;">
        <button type="submit" class="cart-btn">
            <svg class="cart-icon" viewBox="0 0 24 24" fill="none">
                <path d="M6 6h15l-1.5 9h-13L4 4H2" 
                      stroke="white" stroke-width="2" 
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            @if ($hasCart)
                <span class="cart-badge"></span>
            @endif
        </button>
    </form>
</div>
</div>
</nav>