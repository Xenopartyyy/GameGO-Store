@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Tambah Kategori</h1>

            <form action="/kategori/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" {{ old('kategori') }}>
                    @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/kategori') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    {{-- dashboard content ends --}}
@endsection
