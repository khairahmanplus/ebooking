@extends('layouts.app')

@section('page-title')
    Pendaftaran Pengguna
@endsection

@section('css')
    
@endsection

@section('content')
    <div class="container">
        <h1 class="my-5">Pendaftaran Pengguna</h1>
       
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        
        <form action="{{ route('daftar') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Nama
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama') }}" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    No Kad Pengenalan
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control @error('no_kad_pengenalan') is-invalid @enderror" type="text" name="no_kad_pengenalan" value="{{ old('no_kad_pengenalan') }}">
                    @error('no_kad_pengenalan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Bahagian/Jabatan/Kementerian
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <select class="form-control @error('bahagian') is-invalid @enderror" name="bahagian">
                        <option disabled selected>Sila Pilih</option>
                        @foreach ($senaraiBahagian as $bahagian)
                            <option value="{{ $bahagian->id }}" {{ $bahagian->id == old('bahagian') ? 'selected' : null }}>{{ $bahagian->nama }}</option>
                        @endforeach
                    </select>
                    @error('bahagian')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    No Telefon
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control @error('no_telefon') is-invalid @enderror" type="text" name="no_telefon" value="{{ old('no_telefon') }}">
                    @error('no_telefon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Alamat Emel
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control @error('emel') is-invalid @enderror" type="text" name="emel" value="{{ old('emel') }}">
                    @error('emel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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