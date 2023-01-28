@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Buat Postingan</h1>
        <div class="card border-0 shadow mt-3">
            <div class="card-body">
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <label class="input-group-text" for="gambar">Upload Gambar</label>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="test" class="form-control" id="judul" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control ckeditor" id="deskripsi" rows="3" name="deskripsi">{{ old('deskripsi') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success px-5 float-end mt-3">Posting</button>
                </form>
            </div>
        </div>
    </div>
@endsection