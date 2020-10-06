@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Pendaftaran Berjaya</h1>

        <div class="list-group">
            <div class="list-group-item">
                <div class="d-flex justify-content-between">
                    <strong>Nama</strong>
                    {{ $pengguna->nama ?? '-' }}
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex justify-content-between">
                    <strong>No Kad Pengenalan</strong>
                    {{ $pengguna->no_kad_pengenalan ?? '-' }}
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex justify-content-between">
                    <strong>Bahagian/Jabatan/Kementerian</strong>
                    {{ $pengguna->bahagian->nama ?? '-' }}
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex justify-content-between">
                    <strong>No Telefon</strong>
                    {{ $pengguna->no_tel ?? '-' }}
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex justify-content-between">
                    <strong>Alamat Emel</strong>
                    {{ $pengguna->emel ?? '-' }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
<div class="modal fade" id="pendaftaran-berjaya-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Berjaya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Maklumat anda berjaya didaftarkan.
            </div>
        </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
        $(function () {
            $('#pendaftaran-berjaya-modal').modal({
                show: true
            })
        })
    </script>
@endsection