@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Tambah Slider</h1>

            <form action="/slider/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Slider</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="url">Url Slider</label>
                    <input type="text" class="form-control" name="url" required>
                </div>

                <div class="form-group">
                    <label for="banner">Banner Slider</label>
                    <input type="text" class="form-control" name="banner" required>
                </div>
                
                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/slider') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
    {{-- dashboard content ends --}}
@endsection