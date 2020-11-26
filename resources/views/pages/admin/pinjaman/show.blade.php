@extends('layouts.admin')
@section('title', 'Registration')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pinjaman</h1>
    </div>
    <!-- <script>
        var simpanan= `$simpanan->jumlah_simpanan`;
    </script> -->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <p> Id Anggota : {{ $pinjaman->id }}</p>
                        <p> Nama Anggota: {{ $pinjaman->nama_anggota }}</p>
                        <p> Nama Admin: {{ $pinjaman->nama_admin }}</p>
                        <p> Tanggal pinjaman: {{ $pinjaman->tanggal_pinjaman }}</p>
                        <p> Nilai Pinjaman: {{ $pinjaman->nilai_pinjaman }}</p>
                        <p> Alasan Pinjaman: {{ $pinjaman->alasan_pinjaman }}</p>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                    <div>
                        <a href="{{ route('member.index') }}" class="btn btn-primary my-4">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection