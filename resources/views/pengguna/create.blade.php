@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
    <div class="col-10">
        <div class="container">
            <h1 class="text-center my-5">Tambah Pengguna</h1>

            <form action="/pengguna/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" required>
                        <option value="staff">Staff</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control" name="avatar" required>
                </div>

                <div class="form-group">
                    <label for="phone">No. Handphone</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" name="address" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" required>
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/pengguna') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    </div>
    {{-- dashboard content ends --}}
@endsection
