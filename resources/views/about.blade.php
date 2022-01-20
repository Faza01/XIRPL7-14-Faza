@extends('layouts.main')

@section('container')
    <h1 class="title-text"> Halaman About </h1>
    <h3 class="name-text"> {{ $nama }} </h3>
    <p class="caption-text"> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">
@endsection