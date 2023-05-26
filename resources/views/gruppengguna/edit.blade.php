@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Edit Grup Pengguna</h1>
            <form action="/gruppengguna/{{ $gruppengguna->id }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="role">Role Pengguna</label>
                    <input type="text" class="form-control" name="role" value="{{ $gruppengguna->nama }}" required>
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/gruppengguna') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
@endsection
