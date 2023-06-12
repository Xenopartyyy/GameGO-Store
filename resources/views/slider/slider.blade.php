@extends('layout.utamadashboard')

@section('kontendashboard')
    {{-- dashboard content start --}}
        <div class="container">
            <h1 class="text-center my-5">Data Slider</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Nama Slider</th>
                        <th>Banner</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
                    
                    @else
                        <a href='slider/create' class="btn btn-primary">Tambah Slider</a>
                    @endif
                    @foreach ($slider as $sldr)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex">
                                <div class="btn-group">
                                    @if (Auth::user()->role == 'admin')
                                        <a href='/slider/{{ $sldr->id }}/edit' class="btn btn-warning btn-sm mr-1"
                                         data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bx-edit-alt'></i></a>
                                        <form action="/slider/{{ $sldr->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="delete" class="btn btn-danger btn-sm delete-link"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class='bx bx-trash-alt' ></i></button>
                                        </form>
                                        @elseif (Auth::user()->role == 'staff')
                                        <a href='/slider/{{ $sldr->id }}/edit' class="btn btn-warning btn-sm mr-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bx-edit-alt'></i></a>    
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td>{{ $sldr['nama'] }}</td>
                            <td><img src="{{ asset('storage/banner/' . $sldr['banner']) }}" style="width: 40px"></td>
                            <td>{{ $sldr['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       {{-- dashboard content ends --}}
@endsection
