@extends('layouts.daftar')
@section('title', 'Registration')

@section('content')

<div class="container">

    <div class="jumbotron  bg-light">
        <h1 class="display-4">Hallo, Pendaftar</h1>
        <div class="d-flex">
            <div class="icon mr-2">
                <i class="icofont-megaphone"></i>
            </div>
            <p class="lead">Sebelum lanjut mendaftar harap dibaca terlebih dahulu Peraturan Koperasi Mitra Sarasa</p>

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
                <div class="card-header">Formulir Pendaftaran</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('registration.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jeniskelamin">JenisKelamin</label>
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control" name="jeniskelamin" value="{{ old('jeniskelamin') }}">
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
                            <input type="text" class="form-control" id="tempat" placeholder="Masukan tempat lahir" name="tempat" value="{{ old('tempat') }}">
                            @error('tempat')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker" id="lahir" name="lahir" value="{{ old('lahir') }}">
                            @error('lahir')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                            @error('pekerjaan')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="notelp">No. Whatsapp</label>
                            <input type="text" class="form-control" id="notelp" placeholder="+6289XXXXXX" name="notelp" value="{{ old('notelp') }}">
                            @error('notelp')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" rows="10" class="d-blok w-100 form-control" id="alamat" name="alamat" value="{{ old('alamat') }}"></textarea>
                            @error('alamat')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <input type="hidden" name="status" value="calon anggota">



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
            rightIcon: '<img src="{{ url("frontend/images/ic_doe.png") }}"/>'
        }
    });
</script>
<div id="preloader"></div>
@endpush