@extends('layouts.app')

@section('content')
        <div class="container">
            <h2 class="mt-5">Selamat Datang <strong>{{ Auth::user()->name }}</strong></h2>
            <h5 class="fw-light">Ingin memposting sesuatu?</h5>
            <div class="row mb-3">
                <div class="col-md-12">
                    <p class="text-center fw-light fs-5">Buatlah sesuatu yang luar biasa!</p>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-success fw-bold float-end px-5">Posting</a>
                </div>
            </div>
            <div class="row">
                <h3 class="fw-normal mb-3">Postingan kamu</h3>
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