@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Tambah Grup Pengguna</h1>

            <form action="/gruppengguna/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="role">Role Pengguna</label>
                    <input type="text" class="form-control" name="role" required>
                </div>
                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/gruppengguna') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
    {{-- dashboard content ends --}}
@endsection