    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-balance-scale"></i>
              </div>
          <div class="sidebar-brand-text mx-3">KMS Admin</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Nav Item - calonpendaftar -->
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('member.index') }}">
                <i class="fas fa-file-alt"></i>
                <span>Calon Pendaftar</span></a>
            </li>

                    <!-- Nav Item - calonpendaftar -->


          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-file-alt"></i>
              <span>Simpanan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Simpanan</h6>
                <a class="collapse-item" href="{{ url('/simpanan/create') }}">Masukan Simpanan</a>
                <a class="collapse-item" href="cards.html">Tabel Simpanan</a>
              </div>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwos" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-file-alt"></i>
              <span>Pinjaman</span>
            </a>
            <div id="collapseTwos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pinjaman</h6>
                <a class="collapse-item" href="{{ url('/pinjaman/create') }}">Masukan Pinjaman</a>
                <a class="collapse-item" href="cards.html">Tabel Pinjaman</a>
              </div>
            </div>
          </li>


  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->