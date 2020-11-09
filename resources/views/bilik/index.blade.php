@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Senarai Bilik</h1>

        <a class="btn btn-primary mb-4" href="{{ route('bilik.create') }}">Tambah Bilik Baru</a>

        <div class="table-responsive">
            <table class="table text-nowrap">
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

@section('modal')
<div class="modal fade" id="pengesahan-buang-rekod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <strong>Adakah anda pasti ingin membuang rekod?</strong>
            <form id="form-pengesahan-buang-rekod" action="" method="post">
                @csrf
                @method('delete')
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button form="form-pengesahan-buang-rekod" type="submit" class="btn btn-primary">Ya, buang.</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
        // Apabila dokumen HTML sudah dimuat pada pelayar web
        $(document).ready(function () {
            // Apabila modal id=pengesahan-buang-rekod dipaparkan
            $('#pengesahan-buang-rekod').on('show.bs.modal', function (e) {
                // Dapatkan butang yang memaparkan modal
                var button = $(e.relatedTarget);
                // Dapatkan URL pada butang tersebut
                var url = button.prop('href');
                
                // Modal id=pengesahan-buang-rekod
                var modal = $(this);
                // Cari form pada modal dan tetapkan property action dengan url
                modal.find('#form-pengesahan-buang-rekod').prop('action', url);
            });
        });
    </script>
@endsection