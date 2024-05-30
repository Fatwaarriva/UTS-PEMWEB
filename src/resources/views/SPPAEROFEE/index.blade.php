@extends('layouts.app')

@section('content')
    <form class="{{ route('pembayaran') }}" method="GET">
        <div class="card mt-3">
            <h5 class="card-header">Aplikasi Data Pembayaran SPP</h5>
            <div class="card-body">
                <div class="col-8">
                    ID
                    <input type="text" class="form-control" name="id" id="id">
                </div>
                <div class="col-8 mt-3">
                    Nama 
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3 gap-2">
            <input type="submit" class="btn btn-primary" value="Search">
            <a href="{{ route('pembayaran.tambah') }}" class="btn btn-primary">Add</a>
        </div>
    </form>
    @include('components.alert')
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <tr class="table-primary">
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Tanggal Pembayaran</th>
                <th>Jumlah Pembayaran</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @forelse ($pembayarans as $pembayaran)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->nama }}</td>
                    <td>{{ $pembayaran->nisn }}</td>
                    <td>{{ $pembayaran->kelas }}</td>
                    <td>{{ $pembayaran->jurusan }}</td>
                    <td>{{ $pembayaran->tanggal_pembayaran }}</td>
                    <td>{{ $pembayaran->jumlah_pembayaran }}</td>
                    <td>{{ $pembayaran->status }}</td>
                    <td>
                        <a href="{{ route('pembayaran.view', $pembayaran->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteData" data-id="{{ $pembayaran->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10"> Tidak ada data</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Menghapus Data Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pembayaran.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Anda yakin menghapus data dengan ID <span id="id"></span> ?
                        <input type="hidden" name="id" id="idup">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Ok">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $('#deleteData').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);
            modal.find('.modal-body #id').text(id);
            modal.find('.modal-body #idup').val(id);
        });
    </script>
@endsection