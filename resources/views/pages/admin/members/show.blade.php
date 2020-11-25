@extends('layouts.admin')
@section('title', 'Registration')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Registration {{ $member->nama  }}</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <h4>{{ $member->nama }}</h4>
                        <p>{{ $member->email }}</p>
                        <p> Tempat, Tanggal lahir :  {{ $member->tempat }}, {{ $member->lahir }}</p>
                        <p> Jenis Kelamin         :  {{ $member->jeniskelamin }}</p>
                        <p> Pekerjaan             :  {{ $member->pekerjaan }}</p>
                        <p> No.Telp/Whatsup       :  {{ $member->notelp }}</p>
                        <p> Alamat                :  {{ $member->alamat }}</p>
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