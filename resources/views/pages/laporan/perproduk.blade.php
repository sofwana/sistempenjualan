@extends('layout.app')

@section('content')
    <div class="card p-5">
        <div class="d-flex">
            <h1>Laporan per produk</h1>
            <a href="{{ route('produk.create') }}" class="ms-auto"><button class="btn btn-primary">Add
                    produk</button></a>
        </div>
        <div class="my-4">
            <form action="{{ route('lap-perproduk', $idproduk) }}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="id_produk">Produk</label>
                    <select name="id_produk" id="id_produk" class="form-control">
                        <option value="">pilih produk</option>
                        @foreach ($dataproduk as $item)
                            <option value="{{ $item->id }}">{{ $item->nm_produk }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID pesan</th>
                    <th>Tanggal pesan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah produk</th>
                    <th>Total harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>P{{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $item->tgl_pesan }}</td>
                        <td>{{ $item->nm_pelanggan }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->total_harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
