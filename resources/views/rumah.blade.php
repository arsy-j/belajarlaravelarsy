@extends('tata.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">INI ADALAH RUMAH SETELAH DISEKAT</h1>
            <p class="lead">ini adalah halaman rumah yang disekat</p>
        </div>
    </div>
    <p>Nama : {{ $nama }}</p>
    <p>nama pelajaran </p>
    <ul>
        @foreach($pelajaran as $p)
        <li>{{ $p }}</li>
        @endforeach
    </ul>
@endsection