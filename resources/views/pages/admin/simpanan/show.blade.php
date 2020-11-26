@extends('layouts.admin')
@section('title', 'Registration')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Simpanan</h1>
    </div>
    <!-- <script>
        var simpanan= `$simpanan->jumlah_simpanan`;
    </script> -->
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <p> Id Anggota : {{ $simpanan->id }}</p>
                        <p> Nama Anggota: {{ $simpanan->nama_anggota }}</p>
                        <p> Nama Admin: {{ $simpanan->nama_admin }}</p>
                        <p> Tanggal Simpanan: {{ $simpanan->tanggal_simpanan }}</p>
                        <p> Jumlah Setoran: {{ $simpanan->jumlah_simpanan }}</p>

                        @forelse ($fullsimpanan as $f)
                        <?php
                        $varArray[] = array($f->nama_anggota => $f->jumlah_simpanan);

                        ?>

                        @empty

                        @endforelse
                        <?php
                        $total = 0;
                        foreach ($varArray as $key => $value) {
                            // var_dump($value);
                            foreach ($value as $k => $v) {
                                if ($k == $simpanan->nama_anggota) {
                                    $total = $total + $v;
                                }
                            }
                        }

                        ?>
                        <h5>Total Simpanan {{$simpanan->nama_anggota}} : {{ $total }}</p>
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