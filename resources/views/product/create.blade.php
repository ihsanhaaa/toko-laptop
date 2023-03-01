@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Input Produk Baru</h5>
            <form action="{{ route('product.store') }}" class="needs-validation" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        id="judul" value="{{ old('judul') }}" placeholder="Nama Produk" required>
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Foto</label>
                    <input name="imageFile[]" class="form-control" type="file" id="images" multiple="multiple">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                        id="harga" value="{{ old('harga') }}" placeholder="Harga" required>
                </div>
                <div class="mb-3">
                    <label for="ringkasan" class="form-label">Ringkasan</label>
                    <input type="text" class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan"
                        id="ringkasan" value="{{ old('ringkasan') }}" placeholder="Ringkasan Produk" maxlength="80" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Lengkap</label>
                    <input class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi"
                        type="hidden" value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection
