@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
<div class="col-10">
    <h3 class="text-center mt-2">Selamat datang, {{ Auth::user()->nama }} di halaman dashboard !</h3>
</div>
{{-- dashboard content ends --}}

@endsection
