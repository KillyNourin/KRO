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
<link rel="icon" href="{{ asset('image/logo1.png') }}" type="image/png">
@endpush

@section('content')

    @include('partials.login')

    <div class='container'>
      <div class='window'>
        <div class='order-info'>
          <div class='order-info-content'>
            <h2>Order Summary</h2>
            <div class='line'></div>

            {{-- Item 1 --}}
            <table class='order-table'>
              <tbody>
                <tr>
                  <td><img src='{{ asset('image/gaming/gaming1.png') }}' class="full-width"></td>
                  <td>
                    <br> <span class='thin'>Asus</span>
                    <br> TUF Gaming A15<br> <span class='thin small'>Color: Black, Size: 2.3kg<br><br></span>
                  </td>
                </tr>
                <tr><td><div class='price'>Rp.24.000.000</div></td></tr>
              </tbody>
            </table>

            {{-- Item 2 --}}
            <div class='line'></div>
            <table class='order-table'>
              <tbody>
                <tr>
                  <td><img src='{{ asset('image/carousel.png') }}' class="full-width"></td>
                  <td>
                    <br> <span class='thin'>PC</span>
                    <br>Pre-Build<br> <span class='thin small'>Color: Black, Size: 15kg</span>
                  </td>
                </tr>
                <tr><td><div class='price'>Rp.18.000.000</div></td></tr>
              </tbody>
            </table>

            {{-- Item 3 --}}
            <div class='line'></div>
            <table class='order-table'>
              <tbody>
                <tr>
                  <td><img src='{{ asset('image/carousel2.png') }}' class="full-width"></td>
                  <td>
                    <br> <span class='thin'>DELL</span>
                    <br>XPS 13<br> <span class='thin small'>Color: Gray, Size: 1.29kg</span>
                  </td>
                </tr>
                <tr><td><div class='price'>Rp.13.000.000</div></td></tr>
              </tbody>
            </table>

            {{-- Total --}}
            <div class='line'></div>
            <div class='total'>
              <span style='float:left;'>
                <div class='thin dense'>VAT 19%</div>
                <div class='thin dense'>Delivery</div>
                TOTAL
              </span>
              <span style='float:right; text-align:right;'>
                <div class='thin dense'>Rp.5.000</div>
                <div class='thin dense'>Rp.10.000</div>
                Rp.55.015.000
              </span>
            </div>
          </div>
        </div>

        {{-- Credit Card Form --}}
        <div class='credit-info'>
          <div class='credit-info-content'>
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
            <input class='input-field'>
            Card Holder
            <input class='input-field'>

            <table class='half-input-table'>
              <tr>
                <td>Expires
                  <input class='input-field'>
                </td>
                <td>CVC
                  <input class='input-field'>
                </td>
              </tr>
            </table>

            <button class='pay-btn'>Checkout</button>
          </div>
        </div>
      </div>
    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/check.js') }}" defer></script>
<script src="{{ asset('js/login.js') }}"></script>
@endpush
