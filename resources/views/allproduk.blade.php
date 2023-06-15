@extends('layout.utama')

@section('konten')
<section class="produk">
    <div class="container-fluid mx-auto">
        <br><br>
        <h1 class="text-center">Daftar Produk</h1>
        <br>
        <form method="GET" action="{{ route('produk.filter') }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama produk" value="{{ request('nama') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="harga_min">Harga Minimum</label>
                        <input type="number" class="form-control" id="harga_min" name="harga_min" placeholder="Masukkan harga minimum (tanpa titik)" value="{{ request('harga_min') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="harga_max">Harga Maksimum</label>
                        <input type="number" class="form-control" id="harga_max" name="harga_max" placeholder="Masukkan harga maksimum (tanpa titik)" value="{{ request('harga_max') }}">
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Terapkan Filter</button>
            <a href="{{ route('produk.all') }}" class="btn btn-danger">Hapus Filter</a>
        </form>
        
        <br>
        <div class="row justify-content-center">
            @forelse ($produk as $item)
                <div class="col-lg-4 col-md-6 mb-4 text-center column mx-auto">
                    <div class="card item cardpro text-center" style="width: 300px;">
                        <img src="{{ asset('storage/avatarproduk/' . $item['avatar']) }}">
                        <div class="card-body ">
                            <h5 class="card-title">{{ $item['nama'] }}</h5>
                            <p class="card-text">{{ 'Rp. ' . number_format($item['harga'], 0, ',', '.') }}</p>
                            <a class="btn btn-primary" href="/showproduct/{{ $item->id }}">Lihat lebih lanjut</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12 text-center">
                    <p>Tidak ada produk yang sesuai dengan filter yang diberikan.</p>
                </div>
            @endforelse
        </div>
        
    </div>
</section>
@endsection
