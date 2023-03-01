@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">

            <div class="row">

                <div class="col-sm-12 col-md-12 mb-4">
                    <img src="{{ asset('photos/' . json_decode($product->foto)[0]) }}" class="card-img" alt="...">
                </div>

                <?php foreach (json_decode($product->foto)as $picture) { ?>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <a href="{{ asset('photos/' . $picture) }}">
                            <img src="{{ asset('photos/' . $picture) }}" class="card-img" alt="...">
                        </a>
                    </div>
                <?php } ?>
            </div>

            <div class="card">

                <div class="card-body">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="my-2 text-grey">
                                    {{ Carbon\Carbon::parse($product->created_at)->diffForHumans() }}
                                </p>
                                <h5 class="card-title mb-3">{{ $product->judul }}</h5>
                                @if ($product->status == 0)
                                    <span class="badge bg-success mb-3">Masih Tersedia</span>
                                @else
                                    <span class="badge bg-danger mb-3">Sudah Terjual</span>
                                @endif
                                <h5>
                                    Rp. {{ number_format((float) $product->harga) }}
                                </h5>
                            </div>

                            <div class="col">
                                <div class="text-end mt-5">
                                    @if ($product->status == 0)
                                        <a href="https://wa.me/+6289602461010?text=Apakah {{ $product->judul }} dengan harga Rp. {{ number_format((float) $product->harga) }} masih tersedia? Link: {{ Request::url() }}" target="_blank" class="btn btn-primary my-2">Hubungi
                                            Penjual</a>
                                    @else
                                        <button class="btn btn-secondary my-2" disabled>
                                            Hubungi Penjual
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h5 class="card-title">Spesifikasi Perangkat</h5>
                        <p class="card-description">{!! $product->deskripsi !!}</p>

                        <div class="text-center">
                            <form method="get" action="{{ URL::previous() }}">
                                <button class="btn btn-dark my-2">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Tertarik Dengan Barang Ini?</h5>
                <p class="card-description">Segera pesan sekarang, ntar keburu dibeli orang</p>
                <button type="button" class="btn btn-primary">
                    Hubungi Penjual
                </button>
            </div>
        </div>
    </div>
@endsection
