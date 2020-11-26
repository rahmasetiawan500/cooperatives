@extends('layouts.simpanan')
@section('title', 'Data Simpanan')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pinjaman</h1>
    </div>
    <a href="{{ route('simpanan.create') }}" class="btn btn-getstarted px-4 mt-4 font-weight-bold">Tambah Simpanan </a>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center display" widht="100%" cellspacing="0" id="table_simpanan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Jumlah Pinjaman</th>
                            <th scope="col">Tanggal Pinjaman</th>
                            <th scope="col">Nama Admin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pinjaman as $s)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $s->nama_anggota }}</td>
                            <td>{{ $s->nilai_pinjaman }}</td>
                            <td>{{ $s->tanggal_pinjaman }}</td>
                            <td>{{ $s->nama_admin }}</td>
                            <td>
                                <a href="{{ route('pinjaman.show', $s->id) }}" class="badge badge-primary badge-pill">Detail</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#table_simpanan').DataTable();
    });
</script>
@endsection