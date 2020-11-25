 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
      <a class="navbar-brand" href="#">
          <img src="{{ url('frontend/images/koperasi.png') }}" width="30" height="30" alt="#" loading="lazy">
      </a>
      <a class="navbar-brand font-weight-bold text-white" href="#">MITRA SARASA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.5 19H21.5" stroke="white" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" />
                  <path d="M2.5 12H21.5" stroke="white" stroke-width="2" stroke-miterlimit="10"
                      stroke-linecap="round" />
                  <path d="M2.5 5C2.5 5 3 5 12 5C21 5 21.5 5 21.5 5" stroke="white" stroke-width="2"
                      stroke-miterlimit="10" stroke-linecap="round" />
              </svg>

          </span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav ml-lg-auto ml-md-auto ">
              <a class="text-white nav-link active" href="#">Beranda</a>
              <a class="text-white nav-link" href="#visi">Tentang</a>
              <a class="text-white nav-link" href="#networks">Visi&MIsi</a>
              <a class="text-white nav-link" href="{{ route('login') }}">Login</a>
          </div>
      </div>
  </div>
</nav>