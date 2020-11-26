@extends('layouts.admin')
@section('title', 'Registration')

@section('content')


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Data</div>
                <div class="card-body">
                    <form method="POST" action="{{ route ('member.update', $member->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $member->nama }}">
                            @error('nama')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{ $member->email }}">
                            @error('email')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jeniskelamin">JenisKelamin</label>
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control" name="jeniskelamin" value="{{ $member->jeniskelamin }}">
                                <Option disabled selected>Choose One</Option>
                                <Option value="laki-laki">laki-laki</Option>
                                <option value="perempuan">perempuan</option>
                            </select>
                            @error('jeniskelamin')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat" placeholder="Masukan tempat lahir" name="tempat" value="{{ $member->tempat }}">
                            @error('tempat')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker" id="lahir" name="lahir" value="{{ $member->lahir }}">
                            @error('lahir')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan pekerjaan" name="pekerjaan" value="{{ $member->pekerjaan }}">
                            @error('pekerjaan')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="notelp">No. Whatsapp</label>
                            <input type="text" class="form-control" id="notelp" placeholder="+6289XXXXXX" name="notelp" value="{{ $member->notelp }}">
                            @error('notelp')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" rows="10" class="d-blok w-100 form-control" id="alamat" name="alamat" >{{ $member->alamat }}</textarea>
                            @error('alamat')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status"  name="status" value="{{ $member->status }}">
                            @error('status')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>



                        <button type="submit" class="btn btn-primary" >
                            Update data
                        </button>



@endsection
