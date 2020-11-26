@extends('layouts.admin')
@section('title', 'Registration')

@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 ml-4">
    <h1 class="h3 mb-0 text-gray-800">Input Pinjaman Anggota</h1>
</div>


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Pinjaman</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pinjaman.store') }}">
                        @csrf

                        <!-- <div class="form-group">
                            <label for="member_id">Member Id</label>
                            <input type="text" class="form-control" id="member_id" placeholder="Masukan Member Id" name="member_id" value="{{ old('member_id') }}">
                            @error('member_id')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Id Anggota</label>
                            <select class="form-control" id="exampleFormControlSelect1" id="member_id" name="member_id" value="{{ old('member_id') }}">
                                @forelse ($member as $m)
                                <option>{{ $m->id }}</option>
                                @empty
                                <option>tidak ada member id</option>
                                @endforelse
                            </select>
                        </div>

                        <!-- <div class="form-group">
                            <label for="tempat">Nama Anggota</label>
                            <input type="text" class="form-control" id="nama_anggota" placeholder="Masukan Nama Anggota" name="nama_anggota" value="{{ old('nama_anggota') }}">
                            @error('nama_anggota')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Nama Anggota</label>
                            <select class="form-control" id="exampleFormControlSelect1" id="nama_anggota" name="nama_anggota" value="{{ old('nama_anggota') }}">
                                @forelse ($member as $m)
                                <option>{{ $m->nama }}</option>
                                @empty
                                <option>tidak ada member</option>
                                @endforelse
                            </select>
                        </div>

                        <!-- <div class="form-group">
                            <label for="nama_admin">Nama Admin</label>
                            <input type="text" class="form-control" id="nama_admin" placeholder="Masukan Nama Admin" name="nama_admin" value="{{ old('nama_admin') }}">
                            @error('nama_admin')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Nama Admin</label>
                            <select class="form-control" id="exampleFormControlSelect1" id="nama_admin" name="nama_admin" value="{{ old('nama_admin') }}">
                                @forelse ($user as $s)
                                <option>{{ $s->name }}</option>
                                @empty
                                <option>tidak ada admin</option>
                                @endforelse
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="tanggal_pinjaman">Tanggal Pinjman</label>
                            <input type="text" class="form-control datepicker" id="tanggal_pinjaman" name="tanggal_pinjaman" value="{{ old('tanggal_pinjaman') }}">
                            @error('tanggal_pinjaman')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nilai_pinjaman">Nilai Pinjaman</label>
                            <input type="text" class="form-control" id="nilai_pinjaman" placeholder="Masukan Jumlah Simpanan" name="nilai_pinjaman" value="{{ old('nilai_pinjaman') }}">
                            @error('nilai_pinjaman')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lama_pinjaman">Lama Pinjaman</label>
                            <input type="text" class="form-control" id="lama_pinjaman" placeholder="Masukan Jumlah Simpanan" name="lama_pinjaman" value="{{ old('lama_pinjaman') }}">
                            @error('lama_pinjaman')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alasan_pinjaman">Alasan_pinjaman</label>
                            <textarea rows="5" class="d-blok w-100 form-control" id="alasan_pinjaman" name="alasan_pinjaman" value="{{ old('alasan_pinjaman') }}"></textarea>
                            @error('alasan_pinjaman')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">
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