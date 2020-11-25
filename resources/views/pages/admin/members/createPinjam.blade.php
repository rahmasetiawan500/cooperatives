@extends('layouts.daftar')
@section('title', 'Registration')

@section('content')

<div class="container">

    <div class="jumbotron  bg-light">
        <h1 class="display-4">Input Data Pinjam</h1>
        <div class="d-flex">
            <div class="icon mr-2">
                <i class="icofont-megaphone"></i>
            </div>


        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            lihat disini
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kutipan Peraturan Koperasi Mitra Sarasa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            1. Anggota baru diharuskan menyerahkan setoran awal minimal Rp. 100.000,- ( Seratus Ribu
                            Rupiah ) dengan rincian sebagai berikut :
                            <br>Simpanan Pokok : Rp. 50.000,-
                            <br>Simpanan Wajib : Rp. 20.000,-
                            <br>Simpanan Sukarela : Rp. 20.000,-
                            <br>Uang Pangkal : Rp. 10.000,-
                            <br><br>
                            2. Untuk Anggota baru dapat mengajukan pinjaman setelah tiga bulan menjadi anggota
                            Koperasi Mitra Sarasa
                            <br><br>
                            3. Semua anggota harus menyimpan minimal sebulan sekali yang dititipkan kepada
                            kordinator/kolektor yang telah ditunjuk
                            <br><br>
                            4. Bila anggota tidak menyimpan 3 bulan berturut-turut, maka anggota tersebut dianggap
                            mengundurkan diri dari keanggotaan koperasi
                            <br><br>
                            5. Simpanan wajib dan angsuran pinjaman akan dipotong langsung dari simpanan sukarela
                            secara otomatis tanpa meminta persetujuan dari anggota.
                            <br><br>
                            6. Anggota koperasi wajib menjaga nama baik koperasi Mitra Sarasa
                            <br><br>
                            7. Jika anggota mengundurkan diri atau dikeluarkan dari keanggotaan koperasi tapi
                            anggota tersebut masih mempunyai utang, maka hal tersebut akan diselesaikan melalui
                            proses hukum yang berlaku.
                            <br><br>
                            8. Mentaati seluruh peraturan Koperasi Mitra Sarasa yang tercantum dalam Anggaran Dasar
                            dan Anggaran Rumah Tangga serta pola kebijakan pengurus yang telah disepakati seluruh
                            anggota dalam Rapat Anggota Tahunan

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Saya Mengerti</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>



<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Formulir Pinjaman</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pinjam.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama_admin">Nama Peminjam</label>
                            <input type="text" class="form-control" id="nama_peminjam" placeholder="Masukan Nama" name="nama_peminjam" value="{{ old('nama_peminjam') }}">
                            @error('nama_peminjam')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jumlah_pinjam">Jumlah Pinjaman</label>
                            <input type="text" class="form-control" id="nilai_pinjam" placeholder="Jumlah Pinjaman" name="nilai_pinjam" value="{{ old('nilai_pinjam') }}">
                            @error('nilai_pinjam')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama_admin">Nama Admin</label>
                            <input type="text" class="form-control" id="nama_admin" placeholder="Nama Admin" name="nama_admin" value="{{ old('nama_admin') }}">
                            @error('nama_admin')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                            <input type="text" class="form-control datepicker" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                            @error('tanggal_pinjam')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alasan_pinjam">Alasan Meminjam</label>
                            <textarea name="alasan_pinjam" rows="10" class="d-blok w-100 form-control" id="alasan_pinjam" name="alasan_pinjam" value="{{ old('alasan_pinjam') }}"></textarea>
                            @error('alasan_pinjam')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            kirim data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        Dengan ini saya bermaksud untuk mengajukan diri sebagai anggota koperasi
                                        Mitra Sarasa
                                        yang berkedudukan di wilayah RW 04 Desa Jati Endah Kec. Cilengkrang Kab.
                                        Bandung.
                                        Oleh karena itu saya siap memenuhi syarat-syarat sebagai berikut :<br><br>
                                        1. Mentaati segala aturan yang tercantum dalam AD/ART Koperasi.<br><br>
                                        2. Membayar uang pangkal sebesar Rp. 10.000,-<br><br>
                                        3. Menyetor Simpanan Pokok Rp. 50.000,- secara langsung<br><br>
                                        4. Menyetor Simpanan Wajib sebesar Rp. 20.000,-/ bulan<br><br>
                                        5. Bersedia menerima sanksi bilamana saya melanggar AD/ART.<br><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Setuju&Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

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
            rightIcon: '<img src="{{ url("sarasa/assets/img/ic_doe.png") }}"/>'
        }
    });
</script>
<div id="preloader"></div>
@endpush