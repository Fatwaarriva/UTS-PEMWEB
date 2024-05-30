@extends('layouts.app')
@section('content')
    <h5>Data Pembayaran SPP AEROFEE</h5>
    <form action="{{ route('pembayaran.store') }}" method="POST" class="mt-5">
        @csrf
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                ID
                <input type="text" class="form-control {{ $errors->has('id') ? 'is-invalid' : '' }}" name="id"
                    value="{{ old('id') }}">
                @if ($errors->has('id'))
                    <p class="text-danger">{{ $errors->first('id') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Nama
                <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama"
                    value="{{ old('nama') }}">
                @if ($errors->has('nama'))
                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                NISN
                <input type="text" class="form-control {{ $errors->has('nisn') ? 'is-invalid' : '' }}"
                    name="nisn" value="{{ old('nisn') }}">
                @if ($errors->has('nisn'))
                    <p class="text-danger">{{ $errors->first('nisn') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Kelas
                <input type="text" class="form-control {{ $errors->has('kelas') ? 'is-invalid' : '' }}" name="kelas"
                    value="{{ old('kelas') }}">
                @if ($errors->has('kelas'))
                    <p class="text-danger">{{ $errors->first('kelas') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Jurusan
                <input type="text" class="form-control {{ $errors->has('jurusan') ? 'is-invalid' : '' }}" name="jurusan"
                    value="{{ old('jurusan') }}">
                @if ($errors->has('jurusan'))
                    <p class="text-danger">{{ $errors->first('jurusan') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Tanggal Pembayaran
                <input type="date" class="form-control {{ $errors->has('tanggal_pembayaran') ? 'is-invalid' : '' }}" name="tanggal_pembayaran"
                    value="{{ old('tanggal_pembayaran') }}">
                @if ($errors->has('tanggal_pembayaran'))
                    <p class="text-danger">{{ $errors->first('tanggal_pembayaran') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Jumlah Pembayaran
                <input type="number" min="0" class="form-control {{ $errors->has('jumlah_pembayaran') ? 'is-invalid' : '' }}" name="jumlah_pembayaran"
                    value="{{ old('jumlah_pembayaran') }}">
                @if ($errors->has('jumlah_pembayaran'))
                    <p class="text-danger">{{ $errors->first('jumlah_pembayaran') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Status
                <input type="text" class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status"
                    value="{{ old('status') }}">
                @if ($errors->has('status'))
                    <p class="text-danger">{{ $errors->first('status') }}</p>
                @endif
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan">
        <a href="{{ route('pembayaran') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection