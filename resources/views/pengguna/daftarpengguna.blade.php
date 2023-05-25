@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <h3>Daftar Pengguna</h3>
    
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Email</td>
            <td>Nama</td>
            <td>Role</td>
            <td>Phone</td>
            <td>Address</td>
        </tr>
        @foreach ($pengguna as $item)
        <tr>
                <td> {{ $loop->iteration }} </td>
                <td>{{ $item['Email'] }}</td>
                <td>{{ $item['Name'] }}</td>
                <td>{{ $item['Role'] }}</td>
                <td>{{ $item['Phone'] }}</td>
                <td>{{ $item['Address'] }}</td>
            </tr>
        @endforeach
    </table>

</div>
{{-- dashboard content ends --}}

@endsection
