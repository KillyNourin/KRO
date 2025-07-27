@extends('layouts.app')

@section('title', ROG Strix G16 - Product Detail | KorinTekno')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
@endpush

@section('content')
@php
  $product = (object)[
    'id' => 1,
    'name' => 'ASUS TUF Gaming A15',
    'price' => 14500000,
    'stock' => 12,
    'main_image' => 'https://images.unsplash.com/photo-1603791440384-56cd371ee9a7?auto=format&fit=crop&w=800&q=80',
    'rating' => 4.8,
    'total_reviews' => 231,
    'description' => 'Laptop gaming bertenaga Ryzen 7 dan RTX 3050Ti, cocok untuk gaming dan editing.',
    'gallery' => [
      'https://images.unsplash.com/photo-1606813909350-8b98b8cc80b0?auto=format&fit=crop&w=400&q=80',
      'https://images.unsplash.com/photo-1620121692222-d4573f34c3d4?auto=format&fit=crop&w=400&q=80'
    ],
    'reviews' => [
      (object)[
        'user_name' => 'Budi',
        'content' => 'Laptop ini mantap buat Valorant dan editing. Kipasnya juga nggak berisik!',
        'created_at' => now()->subDays(3)
      ],
      (object)[
        'user_name' => 'Santi',
        'content' => 'Desain keren, layar mantap. Worth it pokoknya!',
        'created_at' => now()->subWeek()
      ]
    ]
  ];
@endphp


<div class="product-detail">
  <div class="product-images">
    <img class="main-img" src="{{ $product->main_image }}" alt="{{ $product->name }}">
    <div class="gallery">
      @foreach ($product->gallery as $image)
        <img src="{{ $image }}" alt="Gallery image">
      @endforeach
    </div>
  </div>
  <div class="product-info">
    <h1>{{ $product->name }}</h1>
    <p class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    <p class="rating">⭐ {{ $product->rating }} ({{ $product->total_reviews }} ulasan)</p>
    <p class="desc">{{ $product->description }}</p>
    <p class="stock">Stok: {{ $product->stock }}</p>
    <button class="buy-now">Beli Sekarang</button>
  </div>
</div>

<div class="reviews">
  <h2>Ulasan Pengguna</h2>
  @foreach ($product->reviews as $review)
    <div class="review">
      <strong>{{ $review->user_name }}</strong>
      <p>{{ $review->content }}</p>
      <small>{{ $review->created_at->diffForHumans() }}</small>
    </div>
  @endforeach
</div>
@endsection

@push('scripts')
  <script src="{{ asset('js/product-detail.js') }}" defer></script>
@endpush