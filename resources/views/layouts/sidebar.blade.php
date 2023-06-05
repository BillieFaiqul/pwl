    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PWL 2023</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-bottom: 400px">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Billie Faiqul Izzat</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kuliah" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                History Kuliah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/hobi" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Hobi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="matakuliah" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data MataKuliah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="keluarga" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Keluarga
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/mahasiswa') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/transaksi') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tansaksi
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>