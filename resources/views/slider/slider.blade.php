@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <div class="container">
        <h1 class="text-center my-5">Data Slider</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Slider</th>
                        <th>Url</th>
                        <th>Banner</th>
                    </tr>
                </thead>
                <tbody>
                <a href='slider/create' class="btn btn-primary">Tambah Grup Pengguna</a>
                    @foreach($slider as $sldr)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    <a href='' class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                    <a href='/slider/{{ $sldr->id }}/edit' class="btn btn-warning btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                    <form action="/slider/{{ $sldr->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="delete" class="btn btn-danger btn-sm delete-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $sldr['nama'] }}</td>
                            <td>{{ $sldr['url'] }}</td>
                            <td>{{ $sldr['banner'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
{{-- dashboard content ends --}}

@endsection
