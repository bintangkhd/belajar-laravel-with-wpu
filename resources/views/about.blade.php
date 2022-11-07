@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $desc }}</p>
    <img src="img/{{ $image }}" alt="Foto {{ $name }}" width="250">
@endsection
