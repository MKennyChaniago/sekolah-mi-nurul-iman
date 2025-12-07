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
      <a class="nav-link" data-bs-toggle="collapse" href="#profil-sekolah" aria-expanded="false" aria-controls="profil-sekolah">
        <span class="menu-title">Profil Sekolah</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-domain menu-icon"></i>
      </a>
      <div class="collapse" id="profil-sekolah">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sejarah') }}">Sejarah Madrasah</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.visimisi') }}">Visi & Misi</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.struktur') }}">Struktur Organisasi</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#data-master" aria-expanded="false" aria-controls="data-master">
        <span class="menu-title">Data Guru & Siswa</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-account-group menu-icon"></i>
      </a>
      <div class="collapse" id="data-master">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.guru.index') }}">Data Guru & Staff</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.siswa.index') }}">Data Siswa</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#akademik" aria-expanded="false" aria-controls="akademik">
        <span class="menu-title">Akademik</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-book-open-variant menu-icon"></i>
      </a>
      <div class="collapse" id="akademik">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.kurikulum.index') }}">Kurikulum</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.produk_hukum.index') }}">Produk Hukum (SK)</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#kesiswaan" aria-expanded="false" aria-controls="kesiswaan">
        <span class="menu-title">Kesiswaan</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-run menu-icon"></i>
      </a>
      <div class="collapse" id="kesiswaan">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.ekstrakurikuler.index') }}">Ekstrakurikuler</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.prestasi.index') }}">Program Unggulan</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#publikasi" aria-expanded="false" aria-controls="publikasi">
        <span class="menu-title">Berita & Galeri</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-newspaper menu-icon"></i>
      </a>
      <div class="collapse" id="publikasi">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.berita.index') }}">Berita & Artikel</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.galeri.index') }}">Galeri Foto</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>