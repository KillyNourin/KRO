@extends('layouts.app')

@section('title', 'KorinTekno - Checkout')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/check.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.bunny.net/css?family=roboto:400,500,700" rel="stylesheet" />
<link href="https://fonts.bunny.net/css?family=nunito:400,600,700" rel="stylesheet" />
<link href="https://fonts.bunny.net/css?family=montserrat:400,600,700" rel="stylesheet" />
<link href="https://fonts.bunny.net/css?family=urbanist:400,600,700" rel="stylesheet" />
<link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link rel="icon" href="{{ asset('image/logo1.png') }}" type="image/png">
@endpush

@section('content')

@include('partials.login')
<div class='container'>
  <div class='window'>
    {{-- Order Summary --}}
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
        <div class='line'></div>

        @if (empty($keranjang))
          <p>Keranjang kosong.</p>
        @else
        @foreach ($keranjang as $key => $item)
          <div class='line'></div>
          <table class='order-table'>
            <tbody>
              <tr>
                <td><img src="{{ $item['img'] }}" class="full-width" style="max-width: 80px;"></td>
                <td>
                  <br> <span class='thin'>{{ $item['name'] }}</span>
                  <br>Qty: {{ $item['qty'] }}
                  <br>
                  <form method="POST" action="{{ route('keranjang.hapus', $key) }}" style="margin-top: 10px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-hapus" style="color:red; border:none; background:none; cursor:pointer;">🗑️</button>
                  </form>
                </td>
              </tr>
              <tr>
                <td>
                  <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="price">Rp.{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}</div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        @endforeach

          @php
            $total = collect($keranjang)->reduce(function ($carry, $item) {
              return $carry + ($item['price'] * $item['qty']);
            }, 0);
          @endphp

          <div class='line'></div>
          <div class='total' style="clear: both;">
            <span style='float:left;'>
              <div class='thin dense'>Delivery</div>
              TOTAL
            </span>
            <span style='float:right; text-align:right;'>
              <div class='thin dense'>Rp 10.000</div>
              Rp {{ number_format($total + 10000, 0, ',', '.') }}
            </span>
          </div>
        @endif
      </div>
    </div>

    {{-- Credit Info --}}
    <div class='credit-info'>
      <div class='credit-info-content'>
        <form method="POST" action="{{ route('order.submit') }}">
          @csrf

          <table class='half-input-table'>
            <tr>
              <td style="color: white;">Please select your card:</td>
              <td>
                <div class='dropdownn' id='card-dropdownn'>
                  <div class='dropdownn-btn' id='current-card'>Visa</div>
                  <div class='dropdownn-select'>
                    <ul>
                      <li>Master Card</li>
                      <li>American Express</li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
          </table>

          <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'>

          Card Number
          <input class='input-field' required>
          Card Holder
          <input class='input-field' required>

          <table class='half-input-table'>
            <tr>
              <td>Expires
                <input class='input-field' required>
              </td>
              <td>CVC
                <input class='input-field' required>
              </td>
            </tr>
          </table>

          <button class="pay-btn" type="submit">Checkout</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/check.js') }}" defer></script>
<script src="{{ asset('js/login.js') }}"></script>
@endpush
