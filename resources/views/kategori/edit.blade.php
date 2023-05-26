@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Edit Kategori</h1>

            <form action="/kategori/{{ $kategori->id }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="{{ $kategori->kategori }}" required>
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/kategori') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
@endsection
