@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <div class="container">
        <h1 class="text-center my-5">Data Kategori</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Nama Kategori</th>
                    </tr>
                </thead>
                <tbody>
                <a href='kategori/create' class="btn btn-primary">Tambah Produk</a>
                    @foreach($kategori as $ktgr)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    <a href='' class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                    <a href='/kategori/{{ $ktgr->id }}/edit' class="btn btn-warning btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                    <form action="/kategori/{{ $ktgr->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="delete" class="btn btn-danger btn-sm delete-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $ktgr['kategori'] }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
{{-- dashboard content ends --}}

@endsection
