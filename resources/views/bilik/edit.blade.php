@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Kemaskini Butiran Bilik</h1>
        
        <form action="{{ route('bilik.update', $bilik->id) }}" method="post">
            @csrf 
            @method('put')
            
            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Nama
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama', $bilik->nama) }}" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label font-weight-bold">
                    Bahagian
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <select class="form-control @error('bahagian') is-invalid @enderror" name="bahagian">
                        <option disabled selected>Sila Pilih</option>
                        @foreach ($senaraiBahagian as $bahagian)
                            <option value="{{ $bahagian->id }}" {{ $bahagian->id == old('bahagian', $bilik->id_bahagian) ? 'selected' : null }}>{{ $bahagian->nama }}</option>
                        @endforeach
                    </select>
                    @error('bahagian')
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