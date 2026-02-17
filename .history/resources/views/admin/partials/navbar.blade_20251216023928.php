<style>
  /* Logo navbar (lebih besar tapi aman) */
  .navbar-logo-inline {
    max-height: 36px; /* BESAR tapi masih aman */
    width: auto;
    object-fit: contain;
    margin-left: 14px;
  }

  /* Teks nama sekolah di navbar */
  .navbar-school-name {
    font-weight: 600;
    font-size: 16px;
    color: #2d2d2d;
    margin-left: 10px; /* jarak logo ke teks */
    white-space: nowrap;
  }

  /* Animasi logout */
  .logout-link {
    transition: all 0.3s ease-in-out;
    display: flex;
    align-items: center;
  }

  .logout-link:hover {
    transform: scale(1.05);
    color: #dc3545 !important;
  }

  .logout-link:hover i {
    color: #dc3545 !important;
  }
</style>

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between w-100">

    <div class="d-flex align-items-center">
  <!-- Burger -->
  <button class="navbar-toggler navbar-toggler align-self-center" 
          type="button" 
          data-toggle="minimize">
    <span class="mdi mdi-menu"></span>
  </button>

  <!-- Logo -->
  <img src="{{ asset('images/logo/logo-mi.png') }}"
       alt="Logo MI Nurul Iman"
       class="navbar-logo-inline">

  <!-- Nama Sekolah -->
  <span class="navbar-school-name">
    MI Nurul Iman
  </span>
</div>


    <!-- KANAN: Logout -->
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-logout">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">
            Logout
          </button>
        </form>
      </li>
    </ul>

    <!-- Mobile menu -->
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>

  </div>
</nav>
