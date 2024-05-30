@extends('layouts.app')

@section('content')
    <h5>Tambah Data Pembayaran</h5>
    <form action="{{ route('pembayaran.update', $payment->id) }}" method="POST" class="mt-5">
        @method('put')
        @csrf
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                ID
                <input type="text" class="form-control {{ $errors->has('id') ? 'is-invalid' : '' }}" name="id"
                    value="{{ $payment->id }}" readonly>
                @if ($errors->has('id'))
                    <p class="text-danger">{{ $errors->first('id') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Nama
                <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama"
                    value="{{ old('nama') ?: $payment->nama }}">
                @if ($errors->has('nama'))
                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                NISN
                <input type="text" class="form-control {{ $errors->has('nisn') ? 'is-invalid' : '' }}" name="nisn"
                    value="{{ old('nisn') ?: $payment->nisn }}">
                @if ($errors->has('nisn'))
                    <p class="text-danger">{{ $errors->first('nisn') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Kelas
                <input type="text" class="form-control {{ $errors->has('kelas') ? 'is-invalid' : '' }}" name="kelas"
                    value="{{ old('kelas') ?: $payment->kelas }}">
                @if ($errors->has('kelas'))
                    <p class="text-danger">{{ $errors->first('kelas') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Jurusan
                <input type="text" class="form-control {{ $errors->has('jurusan') ? 'is-invalid' : '' }}"
                    name="jurusan" value="{{ old('jurusan') ?: $payment->jurusan }}">
                @if ($errors->has('jurusan'))
                    <p class="text-danger">{{ $errors->first('jurusan') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Tanggal Pembayaran
                <input type="text" class="form-control {{ $errors->has('tanggal_pembayaran') ? 'is-invalid' : '' }}"
                    name="tanggal_pembayaran" value="{{ old('tanggal_pembayaran') ?: $payment->tanggal_pembayaran }}">
                @if ($errors->has('tanggal_pembayaran'))
                    <p class="text-danger">{{ $errors->first('tanggal_pembayaran') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Jumlah Pembayaran
                <input type="number" min="0"
                    class="form-control {{ $errors->has('jumlah_pembayaran') ? 'is-invalid' : '' }}"
                    name="jumlah_pembayaran" value="{{ old('jumlah_pembayaran') ?: $payment->jumlah_pembayaran }}">
                @if ($errors->has('jumlah_pembayaran'))
                    <p class="text-danger">{{ $errors->first('jumlah_pembayaran') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Status
                <input type="text" class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status"
                    value="{{ old('status') ?: $payment->status }}">
                @if ($errors->has('status'))
                    <p class="text-danger">{{ $errors->first('status') }}</p>
                @endif
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Ubah">
        <a href="{{ route('pembayaran') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection