@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Senarai Bilik</h1>

        <a class="btn btn-primary mb-4" href="{{ route('bilik.create') }}">Tambah Bilik Baru</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Bahagian</th>
                        <th>Pengguna</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($senaraiBilik as $bilik)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">
                                <a href="{{ route('bilik.show', $bilik) }}">{{ $bilik->nama }}</a>
                            </td>
                            <td class="align-middle">{{ $bilik->bahagian->nama ?? '-' }}</td>
                            <td class="align-middle">{{ $bilik->pengguna->nama ?? '-' }}</td>
                            <td class="align-middle">
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdown-menu" data-toggle="dropdown">
                                        Tindakan
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-menu">
                                      <a class="dropdown-item" href="{{ route('bilik.show', $bilik) }}">Butiran</a>
                                      <a class="dropdown-item" href="{{ route('bilik.edit', $bilik) }}">Kemaskini</a>
                                      <a class="dropdown-item" href="{{ route('bilik.destroy', $bilik) }}" data-toggle="modal" data-target="#pengesahan-buang-rekod">Buang</a>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Tiada rekod untuk dipaparkan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            
        </div>
    </div>
@endsection