@extends('layouts.daftar')
@section('title', 'Sukses Daftar Koperasi Mitra Sarasa')
@section('content')
<main>
    <div class="section-success d-flex align-item-center mt-4 ">
        <div class="col text-center">
            <img src="{{ url('frontend/images/Payment.png') }}" s>
            <h1>Data Pinjaman berhasil disimpan</h1>
            <a href="{{ url('home') }}" class="btn  btn-home-page mt-3 px-5">
                Kembali
            </a>
        </div>
    </div>
</main>
@endsection