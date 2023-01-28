@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0 mt-5 mb-5 shadow-lg p-3">
        <h1>Selamat Datang di <strong>WebGabut</strong></h1>
        <p>Selamat datang di website kami! Kami sangat senang Anda berkunjung ke sini. Di sini Anda akan menemukan informasi yang Anda butuhkan tentang produk dan layanan kami. Kami berusaha untuk memberikan pengalaman yang baik bagi Anda saat menjelajahi website kami. Jika Anda memiliki pertanyaan atau komentar, silakan hubungi kami melalui kontak yang tersedia. Terima kasih telah mengunjungi website kami.</p>
    </div>

    <div class="row">
        <h3 class="fw-normal mb-3">Lastest Posts</h3>
        @foreach ($posts as $post)
        <div class="col-md-3">
            <div class="card shadow mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/'.$post->gambar) }}" alt="" class="img-fluid rounded">
                    <h3 class="mt-2">{{ $post->nama }}</h3>
                    <p class="text-secondary">{!! $post->deskripsi !!} <a href="{{ route('show', $post->slug) }}" class="text-decoration-none">Lihat detail</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection