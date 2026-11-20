@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Selamat datang!!</h2>
    <p class="fs-5">
        Perkenalkan saya <strong>{{ $nama }}</strong>, dari kelas <strong>{{ $kelas }}</strong> dengan nim <strong>{{ $nim }}</strong>
    </p>
</div>
@endsection