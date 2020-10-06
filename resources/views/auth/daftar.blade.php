@extends('layouts.app')

@section('page-title')
    Pendaftaran Pengguna
@endsection

@section('css')
    
@endsection

@section('content')
    <div class="container">
        <h1 class="my-5">Pendaftaran Pengguna</h1>

        <form action="">

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Nama
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="nama" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    No Kad Pengenalan
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="no_kad_pengenalan">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Bahagian/Jabatan/Kementerian
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <select class="form-control" name="bahagian">
                        <option>Sila Pilih</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    No Telefon
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="no_telefon">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Alamat Emel
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="emel">
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
    
@endsection