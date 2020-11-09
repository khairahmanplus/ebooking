@extends('layouts.app')

@section('page-title')
    Log Masuk
@endsection

@section('css')
    
@endsection

@section('content')
    <div class="container">
        <h1 class="my-5">Log Masuk Pengguna</h1>
        
        <form action="{{ route('log-masuk') }}" method="post">
            @csrf

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
                    Kata Laluan
                    <strong class="text-danger">*</strong>
                </label>
                <div class="col-md-6">
                    <input class="form-control @error('kata_laluan') is-invalid @enderror" type="password" name="kata_laluan" value="{{ old('kata_laluan') }}">
                    @error('kata_laluan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Log Masuk</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
    
@endsection