@extends('layouts.app')
@section('content')
    <h5>Detail Data Pembayaran</h5>
    <div class="row mt-5">
        <div class="col-md-6">
            <h6>ID Pembayaran</h6>
            <p>{{ $payment->id }}</p>
        </div>
        <div class="col-md-6">
            <h6>Nama</h6>
            <p>{{ $payment->nama ?: 'Belum diatur' }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>NISN</h6>
            <p>{{ $payment->nisn ?: 'Belum diatur' }}</p>
        </div>
        <div class="col-md-6">
            <h6>Kelas</h6>
            <p>{{ $payment->kelas ?: 'Belum diatur' }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Jurusan</h6>
            <p>{{ $payment->jurusan ?: 'Belum diatur' }}</p>
        </div>
        <div class="col-md-6">
            <h6>Tanggal Pembayaran</h6>
            <p>{{ $payment->tanggal_pembayaran ?: 'Belum diatur' }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Jumlah Pembayaran</h6>
            <p>{{ $payment->jumlah_pembayaran ?: 'Belum diatur' }}</p>
        </div>
        <div class="col-md-6">
            <h6>Status</h6>
            <p>{{ $payment->status ?: 'Belum diatur' }}</p>
        </div>
        <hr>
    </div>
    <a href="/" class="btn btn-secondary">Kembali</a>
@endsection