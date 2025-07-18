<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KorinTekno - Jual Beli Laptop & PC Parts</title>
    <link rel="stylesheet" href="{{ asset('css/check.css') }}">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
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
<!--checkout starts here -->
<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
                <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='image/gaming1.png' class="full-width"></img>
              </td>
              <td>
                <br> <span class='thin'>Asus</span>
                <br> TUF Gaming A15<br> <span class='thin small'> Color: Black, Size: 2.3kg<br><br></span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>Rp.24.000.000</div>
              </td>
            </tr>
          </tbody>

        </table>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='image/carousel.avif' class="full-width"></img>
              </td>
              <td>
                <br> <span class='thin'>PC</span>
                <br>Pre-Build<br> <span class='thin small'> Color: Black, Size: 15kg</span>
              </td>
            </tr>
            <tr>
              <td>
                <div class='price'>Rp.18.000.000</div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='image/carousel2.png' class="full-width"></img>
              </td>
              <td>
                <br> <span class='thin'>DELL</span>
                <br>XPS 13<br> <span class='thin small'> Color: Gray, Size: 1.29kg</span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>Rp.13.000.000</div>
              </td>
            </tr>
          </tbody>
        </table>
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
            </td></tr>
            </table>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            Card Number
            <input class='input-field'></input>
            Card Holder
            <input class='input-field'></input>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input class='input-field'></input>
                </td>
                <td>CVC
                  <input class='input-field'></input>
                </td>
              </tr>
            </table>
            <button class='pay-btn'>Checkout</button>

          </div>

        </div>
      </div>
</div>

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
<script src="{{ asset('js/check.js') }}" defer></script>
</body>
</html>