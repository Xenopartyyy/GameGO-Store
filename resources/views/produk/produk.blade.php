@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
    <div class="container">
        <h1 class="text-center my-5">Data Produk</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @if (Auth::user()->role != 'admin')
                    
                @else
                    <a href='produk/create' class="btn btn-primary">Tambah Produk</a>
                @endif
                    @foreach($produk as $prdk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    @if (Auth::user()->role != 'admin')
                                        -
                                    @else
                                        <a href='' class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                        <a href='/produk/{{ $prdk->id }}/edit' class="btn btn-warning btn-sm mr-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="/produk/{{ $prdk->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button value="delete" class="btn btn-danger btn-sm delete-link"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                            <td>{{ $prdk['nama'] }}</td>
                            <td>{{ $prdk['deskripsi'] }}</td>
                            <td>{{ $prdk['harga'] }}</td>
                            <td>{{ $prdk['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
{{-- dashboard content ends --}}

@endsection
