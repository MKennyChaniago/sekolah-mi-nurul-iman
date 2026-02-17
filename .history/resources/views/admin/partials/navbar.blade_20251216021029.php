<style>
  /* Animasi untuk tombol Logout */
  .logout-link {
    transition: all 0.3s ease-in-out; /* Gerakan halus */
    display: flex;
    align-items: center;
  }

  /* Efek saat Mouse diarahkan (Hover) */
  .logout-link:hover {
    transform: scale(1.1); /* Membesar sedikit (10%) */
    color: #dc3545 !important; /* Berubah warna jadi Merah */
  }

  .logout-link:hover i {
    color: #dc3545 !important; /* Icon juga jadi merah */
  }
</style>

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}"><img src="{{ asset('admin/images/logo-mini.svg') }}" alt="logo" /></a>
  </div>
  
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item nav-logout">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </li>

    </ul>
    
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>