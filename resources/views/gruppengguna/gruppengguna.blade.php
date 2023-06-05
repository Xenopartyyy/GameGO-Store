@extends('layout.utamadashboard')

@section('kontendashboard')

{{-- dashboard content start --}}
    <div class="container">
        <h1 class="text-center my-5">Data Grup Pengguna</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Role Pengguna</th>
                </tr>
            </thead>
            <tbody>
                @if (Auth::user()->role != 'admin')
                    
                @else
                    <a href='gruppengguna/create' class="btn btn-primary">Tambah Grup Pengguna</a>
                @endif
                @foreach($gruppengguna as $grpgn)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="d-flex">
                        <div class="btn-group">
                            @if (Auth::user()->role != 'admin')
                                -
                            @else
                                <a href='' class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Detail"><i class='bx bx-show'></i></a>
                                <a href='/gruppengguna/{{ $grpgn->id }}/edit' class="btn btn-warning btn-sm mr-1"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bx-edit-alt'></i></a>
                                    <form action="/gruppengguna/{{ $grpgn->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="delete" class="btn btn-danger btn-sm delete-link"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class='bx bx-trash-alt' ></i></button>
                                    </form>
                            @endif
                        </div>
                    </td>
                    <td>{{ $grpgn['role'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- dashboard content ends --}}

@endsection
