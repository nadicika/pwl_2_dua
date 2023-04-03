<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Inthania Nadicika</a>
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
        <li class="nav-item menu-open">
          <a href="{{url('/dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/profile')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/kuliah')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pengalaman Kuliah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/hobi')}}" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
              Hobi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/keluarga')}}" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
              Keluarga
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/matkul')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              Mata Kuliah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/mahasiswa')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              Mahasiswa
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>