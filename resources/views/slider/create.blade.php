@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Tambah Slider</h1>

            <form action="/slider/store" method="POST" enctype="multipart/form-data">
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
                    <label for="banner">Banner</label>
                    <input type="file" class="form-control @error('banner') is-invalid @enderror" name="banner">
                    @error('banner')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                @if (Auth::user()->role === 'admin')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" >
                        <option value="waiting" {{ old('status') == 'waiting' ? 'selected' : '' }}>Waiting</option>
                        <option value="accepted" {{ old('status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="rejected" {{ old('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>
                @endif
                
                <button type="submit" name="submit" value="save" class="btn btn-primary">Simpan</button>
                <a href={{ url('/slider') }} class="btn btn-danger">Batal</a>

            </form>
        </div>
    {{-- dashboard content ends --}}
@endsection
