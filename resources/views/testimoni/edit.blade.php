@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Edit Testimoni</h1>
            <form action="/testimoni/{{ $testimoni->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Klien</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama',$testimoni->nama) }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                    @error('avatar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="profesi">Profesi</label>
                    <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi',$testimoni->profesi) }}">
                    @error('profesi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="testi">Testi</label>
                    <input type="text" class="form-control @error('testi') is-invalid @enderror" name="testi" value="{{ old('testi',$testimoni->testi) }}">
                    @error('testi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                @if (Auth::user()->role === 'admin')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status">
                        <option value="accepted" {{ old('status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="waiting" {{ old('status') == 'waiting' ? 'selected' : '' }}>Waiting</option>
                        <option value="rejected" {{ old('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>
            @endif
            
            
                
                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/testimoni') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
@endsection
