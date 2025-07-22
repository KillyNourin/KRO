<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KorinTekno')</title>
    {{-- favicon --}}
    <link rel="stylesheet" href="{{ asset('tailwind/output.css') }}">
    <!-- Kalo mau make tailwind -->
    <link rel="icon" href="{{ asset('image/logo1.png') }}" type="image/png">
    <!-- CSS Global -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- CSS Tambahan per halaman -->
    @stack('styles')
</head>
<body>

    {{-- Navbar global --}}
<header class="fixed top-0 left-0 right-0 z-50">
            @include('partials.navbar')
</header>

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
