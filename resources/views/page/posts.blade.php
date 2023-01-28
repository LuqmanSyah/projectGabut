@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-3">All <strong>Posts</strong></h1>
        <div class="row">
            <div class="col-md-6 ms-auto">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                      </div>
                </form>
            </div>
        </div>
        <div class="row">
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