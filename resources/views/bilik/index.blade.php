@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Senarai Bilik</h1>

        <a class="btn btn-primary" href="{{ route('bilik.create') }}">Tambah Bilik Baru</a>
    </div>
@endsection