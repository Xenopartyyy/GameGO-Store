@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Edit Slider</h1>
            <form action="/slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Slider</label>
                    <input type="text" class="form-control" name="nama" value="{{ $slider->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="url">Url Slider</label>
                    <input type="text" class="form-control" name="url" value="{{ $slider->url }}" required>
                </div>

                <div class="form-group">
                    <label for="banner">Banner Pengguna</label>
                    <input type="file" class="form-control" name="banner" value="{{ $slider->banner }}" required>
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/slider') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
@endsection
