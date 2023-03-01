@extends('layouts.app')

@section('content')
    @push('css-plugins')
        <style>
            .icon-truck {
            width: 14px;
            height: 14px;
        }
        </style>
    @endpush

    <div class="row mb-4">
        <div class="col-xl-12">
            <div class="profile-cover"></div>
        </div>
    </div>

    <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Ihsan Comp</h5>
            <p class="card-description">Menjual dan membeli laptop bekas Anda cepat dan mudah. Menerima jasa service laptop juga.</p>
            <a class="btn btn-primary" href="https://wa.me/+6289602461010?text=Saya mau jual laptop nih min!" target="_blank">Saya Mau Jual Laptop Nih!</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">FAQ</h5>
            <p class="card-description">Pertanyaan dibawah ini merupakan pertanyaan yang sering ditanyakan oleh konsumen.
            </p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah laptop yang dijual aman? #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Barang yang kami jual sudah dipastikan <strong>aman 100%</strong>, kami juga memberikan <strong>garansi toko selama 1 bulan</strong>
                            jika laptop tersebut ada masalah bisa di klaim garansi ke toko kami, <strong>selama segel tidak rusak</strong>,
                            sudah banyak konsumen yang sudah beli ditoko kami jadi sudah dipastikan barang yang kami jual 100% aman.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lokasi toko dimana? kalau beli diluar kota apakah bisa dikirim? #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lokasi toko berada di <strong>jalan Swadiri No. 5 Pontianak</strong>, bagi konsumen yang dari Pontianak
                            silahkan datang ke toko langsung atau COD. Bagi konsumen yang berasal dari luar kota 
                            Pontianak bisa juga, kami menyediakan jasa pengiriman, yang pastinya barang akan kami kemas
                            dengan bubble wrap yang super tebal supaya unit sampai dengan selamat ditangan konsumen.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Jasa pengiriman pakai apa ya? #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Untuk pengiriman ke luar kota pontianak, misal ke Sambas, Singkawang, Sintang, Ketapang, dll
                            bisa menggunakan <strong>jasa pengiriman Taxi dan JNT</strong>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Berapa ongkir kirim ke luar kota? #4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Untuk kirim keluar kota menggunakan <strong>Taxi dan JNT dibawah 50k</strong>, untuk lebih jelasnya
                            nanti bisa didiskusikan sama admin 😁
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            Gimana prosedur pembeliannya? #5
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Untuk pembelian laptop, pastikan teman-teman sudah memilih laptop yang ingin dibeli
                            kemudian silahkan konfirmasi ke admin. Yang diluar kota Pontianak <strong>barang akan dikirim 
                                jika uang sudah di transfer</strong> dan segera diproses dan bawa ke ekspedisi untuk segera dikirim.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                            Satu lagi... #6
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse"
                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Kami tidak mejual barang dari hasil kriminal</strong>, semua laptop yang kami beli dari konsumen
                            harus melampirkan identitas pengenal diri buat verifikasi bahwa barang yang dijual adalah barang milik pribadi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-sm-6 col-md-4">
                <div class="card">

                    <img src="{{ asset('photos/' . json_decode($product->foto)[0]) }}" class="card-img-top" alt="...">

                    <div class="card-body">

                        <p class="my-2 text-grey">
                            {{ Carbon\Carbon::parse($product->created_at)->diffForHumans() }}
                        </p>

                        <h5 class="card-title mb-3">{{ $product->judul }}</h5>

                        @if ($product->status == 0)
                            <span class="badge bg-success mb-3">Masih Tersedia</span>
                        @else
                            <span class="badge bg-danger mb-3">Sudah Terjual</span>
                        @endif
                        <br>
                        <span class="badge bg-warning mb-3"><i class="icon-truck" data-feather="truck"></i> Gratis Ongkir</span>

                        <h6>Rp. {{ number_format((float) $product->harga) }}</h6>

                        <p class="card-text">{{ $product->ringkasan }}</p>
                        <a href="/lihat-spesifikasi/{{ $product->slug }}" class="btn btn-primary">Lihat Spesifikasi</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
