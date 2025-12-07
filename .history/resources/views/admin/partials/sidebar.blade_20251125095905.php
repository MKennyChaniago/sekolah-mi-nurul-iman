<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="profile" />
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Admin Sekolah</span>
          <span class="text-secondary text-small">Administrator</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#data-master" aria-expanded="false" aria-controls="data-master">
        <span class="menu-title">Data Master</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-database menu-icon"></i>
      </a>
      <div class="collapse" id="data-master">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.guru.index') }}">Data Guru & Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.siswa.index') }}">Data Siswa</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.kurikulum.index') }}">
        <span class="menu-title">Kurikulum</span>
        <i class="mdi mdi-book-open-variant menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#informasi" aria-expanded="false" aria-controls="informasi">
        <span class="menu-title">Informasi & Galeri</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-newspaper menu-icon"></i>
      </a>
      <div class="collapse" id="informasi">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.berita.index') }}">Berita & Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.pengumuman.index') }}">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.galeri.index') }}">Galeri Foto</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.profil.index') }}">
        <span class="menu-title">Profil Sekolah</span>
        <i class="mdi mdi-school menu-icon"></i>
      </a>
    </li>

  </ul>
</nav>