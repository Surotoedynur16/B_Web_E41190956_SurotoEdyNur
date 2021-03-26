@extends('Layout.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@section('content')
<div class="jumbroton jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Halaman Home</h1>
        <p class="lead">Halaman ini merupakan halaman home</p>
    </div>
    <p>Nama : </p>
    <p>Mata Pelajaran</p>
    <ul>
        @foreach($pelajaran as $p)
        <li>{{ $p }}</li>
        @endforeach
    </ul>
</div>

@endsection
