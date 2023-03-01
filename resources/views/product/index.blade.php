@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Success!</strong> {{ $message }}.
        </div>
    @endif

    <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Produk Baru</a>

    <div class="card-body">
        <h5 class="card-title">List Produk</h5>
        <table id="zero-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Konfirmasi</th>
                    <th>Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $product->judul }}</td>
                        <td>Rp. {{ number_format((float) $product->harga) }}</td>
                        <td>
                            @if ($product->status == 0)
                                <span class="badge bg-success mb-3">Masih Tersedia</span>
                            @else
                                <span class="badge bg-danger mb-3">Sudah Terjual</span>
                            @endif
                        </td>
                        <td>
                            @if (!$product->status)
                                <form action="{{ route('product.status', $product->id) }}" method="post"
                                    onclick="return confirm('Apakah anda yakin ingin mengkonfirmasi ini?')">
                                    @csrf
                                    <button class="btn btn-success"><i
                                            class="fas fa-check-circle"></i>&nbsp;Konfirmasi</button>
                                </form>
                            @endif
                        </td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Konfirmasi</th>
                    <th>Dibuat</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection