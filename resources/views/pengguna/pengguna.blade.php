@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
    <div class="container">
        <h1 class="text-center my-5">Data Pengguna</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Avatar</th>
                        <th>No. Handphone</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @if (Auth::user()->role != 'admin')
                    
                     @else
                        <a href='pengguna/create' class="btn btn-primary">Tambah Pengguna</a>
                     @endif
                    @foreach($pengguna as $pggn)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    @if (Auth::user()->role != 'admin')
                                        -
                                    @else

                                    <a href='' class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                    <a href='/pengguna/{{ $pggn->id }}/edit' class="btn btn-warning btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                    <form action="/pengguna/{{ $pggn->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="delete" class="btn btn-danger btn-sm delete-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                    </form>

                                    @endif
                                </div>
                            </td>
                            <td>{{ $pggn['email'] }}</td>
                            <td>{{ $pggn['nama'] }}</td>
                            <td>{{ $pggn['role'] }}</td>
                            <td>
                                <img src="{{ asset('storage/Avatar/' . $pggn['avatar']) }}" style="width: 40px">                                <td>{{ $pggn['phone'] }}</td>
                            <td>{{ $pggn['address'] }}</td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
    </div>
{{-- dashboard content ends --}}

@endsection
