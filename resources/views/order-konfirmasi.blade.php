@extends('layouts.app')

@section('title', 'Konfirmasi Pembayaran')

@section('content')
<div class="container" style="padding: 40px; text-align:center;">
  <h2>Pesanan Anda Telah Diterima!</h2>
  <p>Terima kasih telah berbelanja di <strong>KorinTekno</strong>.</p>

  <form method="POST" action="{{ route('order.konfirmasi.page', $id) }}">
    @csrf
    <button class="btn btn-success">Konfirmasi Pembayaran</button>
  </form>
</div>
@endsection
