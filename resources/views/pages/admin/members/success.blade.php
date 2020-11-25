@extends('layouts.daftar')
@section('title', 'Sukses Daftar Koperasi Mitra Sarasa')
@section('content')
<main>
    <div class="section-success d-flex align-item-center mt-4 ">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail.png') }}" s>
            <h1>Ya!, Berhasil Terkirim</h1>
            <p>
               Tunggu balasan dari kami melalui email atau no whatsapp anda <br>
                Terima Kasih Sudah Mendaftar
            </p>
            <a href="{{ url('/') }}" class="btn  btn-home-page mt-3 px-5">
                Home Page
            </a>

        </div>
    </div>
</main>
@endsection