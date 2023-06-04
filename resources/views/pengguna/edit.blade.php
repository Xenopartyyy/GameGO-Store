@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Edit Pengguna</h1>

            <form action="/pengguna/{{ $pengguna->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{  old('email', $pengguna->email) }}" >
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $pengguna->nama) }}" >
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" >
                        <option value="user" {{ $pengguna->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="staff" {{ $pengguna->role == 'staff' ? 'selected' : '' }}>Staff</option>
                        <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" >
                    @error('avatar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">No. Handphone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone',$pengguna->phone) }}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $pengguna->address) }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password', $pengguna->password) }}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/pengguna') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
@endsection
