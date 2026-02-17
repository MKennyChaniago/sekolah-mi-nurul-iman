<style>
  /* Logo Admin Navbar (AMAN, TIDAK GESER) */
  .admin-logo {
    max-height: 0px; /* IDEAL untuk navbar admin */
    width: auto;
    object-fit: contain;
    display: block;
  }

  /* Animasi untuk tombol Logout */
  .logout-link {
    transition: all 0.3s ease-in-out;
    display: flex;
    align-items: center;
  }

  .logout-link:hover {
    transform: scale(1.1);
    color: #dc3545 !important;
  }

  .logout-link:hover i {
    color: #dc3545 !important;
  }
</style>


<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
      <img src="{{ asset('images/logo/logo-mi.png') }}"
           alt="Logo MI Nurul Iman"
           class="admin-logo">
    </a>
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