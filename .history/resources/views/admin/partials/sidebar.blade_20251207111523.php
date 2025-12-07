<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="profile" />
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{ Auth::user()->name ?? 'Admin Sekolah' }}</span>
          <span class="text-secondary text-small">Administrator</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.sejarah*', 'admin.visimisi*', 'admin.struktur*') ? 'active' : '' }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#profil-sekolah" 
         aria-expanded="{{ request()->routeIs('admin.sejarah*', 'admin.visimisi*', 'admin.struktur*') ? 'true' : 'false' }}" 
         aria-controls="profil-sekolah">
        <span class="menu-title">Profil Sekolah</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-domain menu-icon"></i>
      </a>
      <div class="collapse {{ request()->routeIs('admin.sejarah*', 'admin.visimisi*', 'admin.struktur*') ? 'show' : '' }}" id="profil-sekolah">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.sejarah') ? 'active' : '' }}" href="{{ route('admin.sejarah') }}">Sejarah Madrasah</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.visimisi') ? 'active' : '' }}" href="{{ route('admin.visimisi') }}">Visi & Misi</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.struktur') ? 'active' : '' }}" href="{{ route('admin.struktur') }}">Struktur Organisasi</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.guru*', 'admin.siswa*') ? 'active' : '' }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#data-master" 
         aria-expanded="{{ request()->routeIs('admin.guru*', 'admin.siswa*') ? 'true' : 'false' }}" 
         aria-controls="data-master">
        <span class="menu-title">Data Guru & Siswa</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-account-group menu-icon"></i>
      </a>
      <div class="collapse {{ request()->routeIs('admin.guru*', 'admin.siswa*') ? 'show' : '' }}" id="data-master">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.guru*') ? 'active' : '' }}" href="{{ route('admin.guru.index') }}">Data Guru & Staff</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.siswa*') ? 'active' : '' }}" href="{{ route('admin.siswa.index') }}">Data Siswa</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.kurikulum*', 'admin.produk_hukum*') ? 'active' : '' }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#akademik" 
         aria-expanded="{{ request()->routeIs('admin.kurikulum*', 'admin.produk_hukum*') ? 'true' : 'false' }}" 
         aria-controls="akademik">
        <span class="menu-title">Akademik</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-book-open-variant menu-icon"></i>
      </a>
      <div class="collapse {{ request()->routeIs('admin.kurikulum*', 'admin.produk_hukum*') ? 'show' : '' }}" id="akademik">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.kurikulum*') ? 'active' : '' }}" href="{{ route('admin.kurikulum.index') }}">Kurikulum</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.produk_hukum*') ? 'active' : '' }}" href="{{ route('admin.produk_hukum.index') }}">Produk Hukum (SK)</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.ekstrakurikuler*', 'admin.program*') ? 'active' : '' }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#kesiswaan" 
         aria-expanded="{{ request()->routeIs('admin.ekstrakurikuler*', 'admin.program*') ? 'true' : 'false' }}" 
         aria-controls="kesiswaan">
        <span class="menu-title">Kesiswaan</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-run menu-icon"></i>
      </a>
      <div class="collapse {{ request()->routeIs('admin.ekstrakurikuler*', 'admin.program*') ? 'show' : '' }}" id="kesiswaan">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.ekstrakurikuler*') ? 'active' : '' }}" href="{{ route('admin.ekstrakurikuler.index') }}">Ekstrakurikuler</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.program*') ? 'active' : '' }}" href="{{ route('admin.program.index') }}">Program Unggulan</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.berita*', 'admin.galeri*') ? 'active' : '' }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#publikasi" 
         aria-expanded="{{ request()->routeIs('admin.berita*', 'admin.galeri*') ? 'true' : 'false' }}" 
         aria-controls="publikasi">
        <span class="menu-title">Berita & Galeri</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-newspaper menu-icon"></i>
      </a>
      <div class="collapse {{ request()->routeIs('admin.berita*', 'admin.galeri*') ? 'show' : '' }}" id="publikasi">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.berita*') ? 'active' : '' }}" href="{{ route('admin.berita.index') }}">Berita & Artikel</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}" href="{{ route('admin.galeri.index') }}">Galeri Foto</a>
          </li>
        </ul>
      </div>
    </li>

  </ul>
</nav>