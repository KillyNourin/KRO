@extends('layouts.app')

@section('title', 'KorinTekno Product Details')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
@endpush

@section('content')
<main>
  <div class="container">

    <!-- Flex container utama -->
    <div class="product-section" style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: nowrap;">

      <!-- KIRI: Gambar Produk -->
      <div class="product-image sticky-image" style="flex: 1;">
        <img src="{{ asset('image/laptop/rog-strix.png') }}" alt="ROG Strix">
      </div>

      <!-- TENGAH: Info Produk -->
      <div class="product-info" style="flex: 2; min-width: 0;">
        <h1>ASUS ROG Strix G16</h1>
        <p class="price">Rp 25.999.000</p>

        <div class="color-options">
          <button class="color-btn active">Hitam</button>
          <button class="color-btn">Abu-abu</button>
          <button class="color-btn">Putih</button>
        </div>

        <!-- Tab Navigasi -->
        <div class="tab-nav" id="tabNav">
          <button onclick="showTab('desc')" class="active">Deskripsi</button>
          <button onclick="showTab('spec')">Spesifikasi</button>
        </div>

        <!-- Tab Deskripsi -->
        <div class="tab-content" id="desc" style="display: block;">
          <p>
            ASUS ROG Strix G16 adalah laptop gaming dengan prosesor Intel Core i9 Gen 13 dan GPU RTX 4070. Dilengkapi layar 16” FHD 165Hz, sistem pendingin ROG Intelligent Cooling, dan desain RGB futuristik.
          </p>
        </div>

        <!-- Tab Spesifikasi -->
        <div class="tab-content" id="spec" style="display: none;">
          <h3 style="margin-bottom: 10px;">NVIDIA GeForce RTX 5060 Laptop GPU 8GB GDDR7</h3>
          <p><em>- Powering Advance AI -</em></p>

          <p><strong>ROG Strix G16 G614PM</strong><br>
            SKU : G614PM-R9N56C6G-HM</p>

          <ul style="line-height: 1.7;">
            <li><strong>Grafis:</strong> NVIDIA GeForce RTX 5060 Laptop GPU, ROG Boost: 1610MHz at 115W (1560MHz Boost Clock+50MHz OC, 100W+15W Dynamic Boost), 8GB GDDR7</li>
            <li><strong>Prosesor:</strong> AMD Ryzen 9 8940HX, 2.4GHz (80MB Cache, up to 5.3GHz, 16 cores, 32 Threads)</li>
            <li><strong>Sistem Operasi:</strong> Windows 11 Home</li>
            <li><strong>Office:</strong> Microsoft Office Home 2024 + Microsoft 365 Basic</li>
            <li><strong>Memori:</strong> 16GB DDR5-5200 SO-DIMM (Max 64GB)</li>
            <li><strong>Penyimpanan:</strong> 1TB PCIe 4.0 NVMe M.2 SSD</li>
            <li><strong>Expansion Slots:</strong> 2x DDR5 SO-DIMM, 2x M.2 PCIe</li>
            <li><strong>Layar:</strong> 16" 2.5K (2560x1600) ROG Nebula Display, IPS-level, anti-glare, DCI-P3 100%, 240Hz, 3ms, G-Sync, Dolby Vision, MUX Switch</li>
            <li><strong>Keyboard & Touchpad:</strong> Backlit Chiclet 4-Zone RGB, Copilot key</li>
            <li><strong>Kamera:</strong> FHD 1080p@30FPS</li>
            <li><strong>Wi-Fi & Bluetooth:</strong> Wi-Fi 6E (Triple band) + Bluetooth 5.3</li>
            <li><strong>Audio:</strong> Dolby Atmos, AI Noise Cancel, Hi-Res, 2 Speaker Smart Amp, Mic Built-in</li>
            <li><strong>Port I/O:</strong>
              <ul style="margin-left: 16px;">
                <li>1x 3.5mm Combo Audio Jack</li>
                <li>1x HDMI 2.1 FRL</li>
                <li>2x USB 3.2 Gen 2 Type-A</li>
                <li>1x RJ45 LAN port</li>
                <li>2x USB 4.0 Type-C (DisplayPort / G-SYNC / Power Delivery)</li>
              </ul>
            </li>
            <li><strong>Baterai:</strong> 90WHrs, 4-cell Li-ion</li>
            <li><strong>Adaptor:</strong> 240W (20V DC, 12A)</li>
            <li><strong>Garansi:</strong> 2 Tahun Global Warranty (1st Year Perfect Warranty)</li>
          </ul>
        </div>
      </div>

      <!-- KANAN: Kotak Beli -->
      <div class="buy-box" style="width: 280px; border: 1px solid #ddd; padding: 16px; border-radius: 12px; background: #fff; position: sticky; top: 100px;">
        <div class="price">Rp 25.999.000</div>

        <label>Jumlah:</label>
        <input type="number" min="1" value="1" class="qty-input" />

        <div class="subtotal">Subtotal: Rp 25.999.000</div>

        <button class="buy-btn">Buy Now</button>
        <button class="cart-product-btn">+ Cart</button>
      </div>

    </div> <!-- /product-section -->

    <!-- Ulasan -->
    <div class="review-section" id="ulasan" style="margin-top: 60px;">
      <h2>Ulasan Pembeli</h2>
      <div class="review-item">
        <strong>Budi:</strong> Laptop gahar banget! Semua game jalan lancar.
      </div>
      <div class="review-item">
        <strong>Sinta:</strong> Desain kece, performa juga ngebut.
      </div>
    </div>
  </div>
</main>
@endsection

@push('scripts')
  <script src="{{ asset('js/product-detail.js') }}" defer></script>
@endpush
