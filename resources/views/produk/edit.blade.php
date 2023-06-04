@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Edit Produk</h1>

            <form action="/produk/{{ $produk->id }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $produk->nama) }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi', $produk->deskripsi) }}">
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $produk->harga) }}">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $produk->status) }}">
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/produk') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
@endsection
