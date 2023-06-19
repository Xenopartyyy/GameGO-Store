@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Data testimoni</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Avatar</th>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Testi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
                    
                    @else
                        <a href='testimoni/create' class="btn btn-primary">Tambah testimoni</a>
                    @endif
                    @foreach ($testimoni as $testi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    @if (Auth::user()->role == 'admin')
                                        <a href='/testimoni/{{ $testi->id }}/edit' class="btn btn-warning btn-sm mr-1"
                                         data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bx-edit-alt'></i></a>
                                        <form action="/testimoni/{{ $testi->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="delete" class="btn btn-danger btn-sm delete-link"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class='bx bx-trash-alt' ></i></button>
                                        </form>
                                        @elseif (Auth::user()->role == 'staff')
                                        <a href='/testimoni/{{ $testi->id }}/edit' class="btn btn-warning btn-sm mr-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bx-edit-alt'></i></a>    
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td><img src="{{ asset('storage/avatartesti/' . $testi['avatar']) }}" style="width: 40px"></td>
                            <td>{{ $testi['nama'] }}</td>
                            <td>{{ $testi['profesi'] }}</td>
                            <td>{{ $testi['testi'] }}</td>
                            <td>{{ $testi['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       {{-- dashboard content ends --}}
@endsection
