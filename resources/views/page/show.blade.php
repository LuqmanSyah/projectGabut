@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0 my-5 shadow p-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('images/'.$post->gambar) }}" alt="" class="img-fluid rounded shadow" width="500">
                    </div>
                    <div class="col-md-6">
                        <h1>{{ $post->nama }}</h1>
                        <p class="fw-light">Post by: {{ $post->user->name }}</p>
                        <p>{!! $post->deskripsi !!}</p>
                    </div>
                </div>
                
                @if (Auth::check())
                    @if ($post->user_id === Auth::user()->id)
                    <div class="d-flex justify-content-center mt-3">
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="ms-2 btn btn-danger">Hapus</a>
                    </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection