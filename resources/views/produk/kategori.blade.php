@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <h3>Nama Kategori</h3>
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Nama Kategori</td>
        </tr>
        @foreach ($kategori as $prdk)
        <tr>
                <td> {{ $loop->iteration }} </td>
                <td>{{ $prdk['Nama'] }}</td>

            </tr>
        @endforeach
    </table>

</div>
{{-- dashboard content ends --}}

@endsection
