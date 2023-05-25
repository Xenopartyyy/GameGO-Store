@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <h3>Grup Pengguna</h3>
    
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Role</td>
        </tr>
        @foreach ($gruppengguna as $prdk)
        <tr>
                <td> {{ $loop->iteration }} </td>
                <td>{{ $prdk['Role'] }}</td>
            </tr>
        @endforeach
    </table>

</div>
{{-- dashboard content ends --}}

@endsection
