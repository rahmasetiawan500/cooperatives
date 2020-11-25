@extends('layouts.admin')
@section('title', 'Registration')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pinjam</h1>
    </div>
    <a href="{{ route('pinjam.create') }}" class="btn btn-getstarted px-4 mt-4 font-weight-bold">Tambah Peminjam </a>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" widht="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Pinjaman</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Nama Admin</th>
                            <th scope="col">Alasan Minjam</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pinjam as $p)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $p->nama_peminjam }}</td>
                            <td>{{ $p->nilai_pinjam }}</td>
                            <td>{{ $p->tanggal_pinjam }}</td>
                            <td>{{ $p->nama_admin }}</td>
                            <td>{{ $p->alasan_pinjam }}</td>
                            <td>
                                <a href="" class="badge badge-primary badge-pill">Detail</a>
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
@endsection