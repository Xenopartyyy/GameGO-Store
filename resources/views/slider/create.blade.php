@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Tambah Slider</h1>

            <form action="/slider/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Slider</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url">Url Slider</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}">
                    @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                       
                    @enderror
                </div>

                <div class="form-group">
                    <label for="banner">Banner Slider</label>
                    <input type="text" class="form-control @error('banner') is-invalid @enderror" name="banner" value="{{ old('banner') }}">
                    @error('banner')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                       
                    @enderror
                </div>
                
                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/slider') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    {{-- dashboard content ends --}}
@endsection
