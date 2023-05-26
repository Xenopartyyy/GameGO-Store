@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Edit Pengguna</h1>

            <form action="/pengguna/{{ $pengguna->id }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $pengguna->email }}" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $pengguna->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" required>
                        <option value="staff" {{ $pengguna->role == 'staff' ? 'selected' : '' }}>Staff</option>
                        <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="text" class="form-control" name="avatar" value="{{ $pengguna->avatar }}"required>
                </div>

                <div class="form-group">
                    <label for="phone">No. Handphone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $pengguna->phone }}"required>
                </div>

                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" name="address" value="{{ $pengguna->address }}"required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ $pengguna->password }}"required>
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/pengguna') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
@endsection
