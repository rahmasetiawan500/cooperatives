@extends('layouts.admin')
@section('title', 'Registration')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 ml-4">
        <h1 class="h3 mb-0 text-gray-800">Input Simpanan Anggota</h1>
    </div>


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Simpanan</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('simpanan.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="member_id">Member Id</label>
                            <input type="text" class="form-control" id="member_id" placeholder="Masukan Member Id" name="member_id" value="{{ old('member_id') }}">
                            @error('member_id')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama_admin">Nama Admin</label>
                            <input type="text" class="form-control" id="nama_admin" placeholder="Masukan Nama Admin" name="nama_admin" value="{{ old('nama_admin') }}">
                            @error('nama_admin')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="tempat">Nama Anggota</label>
                            <input type="text" class="form-control" id="nama_anggota" placeholder="Masukan Nama Anggota" name="nama_anggota" value="{{ old('nama_anggota') }}">
                            @error('nama_anggota')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_simpanan">Tanggal Simpanan</label>
                            <input type="text" class="form-control datepicker" id="tanggal_simpanan" name="tanggal_simpanan" value="{{ old('tanggal_simpanan') }}">
                            @error('tanggal_simpanan')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jumlah_simpanan">Jumlah Simpanan</label>
                            <input type="text" class="form-control" id="jumlah_simpanan" placeholder="Masukan Jumlah Simpanan" name="jumlah_simpanan" value="{{ old('jumlah_simpanan') }}">
                            @error('jumlah_simpanan')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary" >
                            Simpan Data
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('prepend-style')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush
@push('prepend-script')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uilibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="{{ url("frontend/images/ic_doe.png") }}"/>'
        }
    });
</script>
<div id="preloader"></div>
@endpush