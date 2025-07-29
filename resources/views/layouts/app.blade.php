<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title', 'KorinTekno')</title>
    {{-- favicon --}}
    <link rel="stylesheet" href="{{ asset('tailwind/output.css') }}">
    <!-- Kalo mau make tailwind -->
    <link rel="icon" href="{{ asset('image/logo1.png') }}" type="image/png">
    <!-- CSS Global -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    {{-- boxicon --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- CSS Tambahan per halaman -->
    @stack('styles')
    <!-- FONT family -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- FONT family local -->
    <style>
    @font-face {
        font-family: 'LemonMilk';
        src: url('{{ asset('fonts/LEMONMILK-Bold.otf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'SourceSans3';
        src: url('{{ asset('fonts/SourceSans3-Regular.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'ROG';
        src: url('{{ asset('fonts/ROGLyonsTypeRegular3.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Rajdhani';
        src: url('{{ asset('fonts/Rajdhani-Bold.ttf') }}') format('truetype');
        font-weight: bold;
        font-style: normal;
    }

    @font-face {
        font-family: 'Horyzen';
        src: url('{ asset('fonts/HoryzenDigital-24.ttf')}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    body {
        font-family: 'SourceSans3', 'ROG', 'Rajdhani', 'Horyzen', sans-serif, 'LemonMilk';
    }
    </style>

</head>
<body>

    {{-- Navbar global --}}
    @include('partials.navbar')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer global --}}
    @include('partials.footer')

    <!-- JS Global -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- JS Tambahan per halaman -->
    @stack('scripts')
<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
