@extends('layouts.app')

@section('title', $produk->nama)

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
@endpush

@push('scripts')
  <script src="{{ asset('js/product-detail.js') }}" defer></script>
@endpush

@section('content')
<div class="container">
  <div class="product-section">

    <!-- Gambar -->
    <div class="sticky-image" style="flex: 1; min-width: 300px;">
      <div class="product-image">
        <img class="main-img" src="{{ asset($produk->gambar) }}" alt="{{ $produk->nama }}">
      </div>
      <div class="gallery">
        <!-- thumbnail manual jika perlu -->
      </div>
    </div>

    <!-- Info dan Tab -->
    <div class="product-info" style="flex: 2; min-width: 300px;">
      <h1>{{ $produk->nama }}</h1>
      <p class="price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>

      <div class="color-options">
        <button class="color-btn active">Hitam</button>
        <button class="color-btn">Silver</button>
      </div>

      <!-- Tab Navigasi -->
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="desc">Deskripsi</button>
        <button class="tab-btn" data-tab="spec">Spesifikasi</button>
      </div>

      <!-- Konten tab -->
      <div id="desc" class="tab-pane active tab-content">
        {!! nl2br(e($produk->deskripsi)) !!}
      </div>
      <div id="spec" class="tab-pane tab-content">
        {!! $produk->spesifikasi !!}
      </div>

    <!-- Kotak Beli -->

  </div>
    <div class="buy-box" style="flex: 1; min-width: 240px;">
      <div class="price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
      <input type="number" class="qty-input" min="1" value="1">
      <div class="subtotal">Subtotal: Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
      <div class="buy-actions">
      <button class="cart-product-btn">+ Keranjang</button>
      <button class="buy-btn">Beli Sekarang</button>
      </div>
    </div>
</div>

@endsection
