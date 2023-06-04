@extends('layout.utamadashboard')

@section('kontendashboard')
    
{{-- dashboard content start --}}
    <h3 class="text-center mt-2">Selamat datang, {{ Auth::user()->nama }} di halaman dashboard !</h3>
{{-- dashboard content ends --}}

@endsection
