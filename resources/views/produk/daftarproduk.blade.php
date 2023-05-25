@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <h3>Daftar Produk</h3>
    
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Deskripsi</td>
            <td>Harga</td>
            <td>Status</td>
        </tr>
        @foreach ($produk as $prdk)
        <tr>
                <td> {{ $loop->iteration }} </td>
                <td>{{ $prdk['Nama'] }}</td>
                <td>{{ $prdk['Deskripsi'] }}</td>
                <td>{{ $prdk['Harga'] }}</td>
                <td>{{ $prdk['Status'] }}</td>
            </tr>
        @endforeach
    </table>

</div>
{{-- dashboard content ends --}}

@endsection
