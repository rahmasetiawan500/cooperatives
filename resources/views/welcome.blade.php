@extends('layouts.home')
@section('title', 'Koperasi Mitra Sarasa')
@section('content')

  <!-- ======= Hero Section ======= -->
  <!-- header -->
  <header class="text-center">
    <h1>Gabung Sekarang
        <br> dan Berkembang Bersama</h1>
    <p class="mt-3">Koperasi Mitra Sarasa
        <br> "semua untuk satu, satu untuk semua" </p>
    <a href="{{ route('registration.create') }}" class="btn btn-getstarted px-4 mt-4 font-weight-bold">Gabung Sekarang </a>
</header>
<!-- end header -->

<!-- section status -->
<div class="container">
    <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
            <h2 data-toggle="counter-up">240</h2>
            <p>Anggota</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2 data-toggle="counter-up">3</h2>
            <p>Pengawas</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2 data-toggle="counter-up">7</h2>
            <p>Pengurus</p>
        </div>
    </section>
</div>
<!-- end section status -->


<section class="section-visi" id="visi">
    <div class="container">
        <div class="row">
            <div class="col text-center section-visi-heading">
                <h2>Tentang Koperasi Mitra Sarasa</h2>
                <p>Koperasi adalah badan usaha yang beranggotakan orang-orang atau badan hukum koperasi dengan melandaskan kegiatannya berdasarkan prinsip koperasi sekaligus sebagai gerakan ekonomi rakyat yang berdasarkan asas kekeluargaan. </p>
            </div>
        </div>

    </div>
</section>
<section class="section-networks" id="networks">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Visi Koperasi Mitra Sarasa</h2>
                <p>Menjadi lembaga keuangan mikro untuk menunjang perkembangan ekonomi kreatif di wilayah RW. 04 Desa Jati Endah, Kecamatan Cilengkrang </p>
                <h2>Misi Koperasi Mitra Sarasa</h2>
                <p> 1.	Memupuk rasa kebersamaan diantara anggota koperasi Mitra sarasa <br>
                    2.	Menumbuhkan sikap gemar menabung <br>
                    3.	Mengembangkan pola managerial ekonomi keuangan keluarga anggota <br>
                    4.	Mendorong anggota yang berwira usaha untuk meningkatkan usahanya <br>
                    5.	Membentuk usaha ekonomi kreatif 
                     </p>
            </div>
            <div class="col-md-6 text-center d-flex justify-content-center align-items-stretch">
                <img src="{{ url('frontend/images/targeting.png') }}" alt="logos_partner" class="img-patner">
            </div>
        </div>
    </div>
</section>

<section class="section-tetimonial-heading" id="testimonialHeading">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>They Are Loving Us</h2>
                <p>Moments were giving them <br>
                    the best experience</p>
            </div>
        </div>
    </div>
</section>

<section class="section-testimonial-content" id="testimonialContent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{ url('frontend/images/personcircle.png') }}" alt="User" class="mb-4 rounded-circle">
                        <h3 class="mb4">Bp.Surya(Petani)</h3>
                        <p class="testimonial">
                            Koperasi Mitra Sarasa sangat membantu dalam perkembangan usaha mikro saya teima kasih Koperasi Mitra sarasa Semoga Sukse selalu dan terus berkembang pesat
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{ url('frontend/images/personcircle.png') }}" alt="User" class="mb-4 rounded-circle">
                        <h3 class="mb4">Bp.Asep (WiraUsaha) </h3>
                        <p class="testimonial">
                            Koperasi Mitra Sarasa sangat membantu dalam perkembangan usaha mikro saya teima kasih Koperasi Mitra sarasa Semoga Sukse selalu dan terus berkembang pesat
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{ url('frontend/images/personcircle.png') }}" alt="User" class="mb-4 rounded-circle">
                        <h3 class="mb4">Bp. Indra(pedagang)</h3>
                        <p class="testimonial">
                            Koperasi Mitra Sarasa sangat membantu dalam perkembangan usaha mikro saya teima kasih Koperasi Mitra sarasa Semoga Sukse selalu dan terus berkembang pesat
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx1">
                    Butuh Bantuan
                </a>
                <a href="{{ route('registration.create') }}" class="btn btn-get-started px-4 mt-4 mx1">
                    Gabung sekarang
                </a>
            </div>
        </div>
    </div>
</section>


</main>
  @endsection