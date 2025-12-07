<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin - MI Nurul Iman</title>
    
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{ asset('admin/images/logo.svg') }}" alt="Logo MI">
                </div>
                <h4>Halo! Selamat Datang.</h4>
                <h6 class="font-weight-light">Silakan login untuk mengelola data sekolah.</h6>
                
                <form class="pt-3" method="POST" action="{{ route('login') }}">
                  
                  @csrf 

                  @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Login Gagal!</strong> Periksa kembali username dan password Anda.
                    </div>
                  @endif

                  <div class="form-group">
                    <input type="text" 
                           name="username" 
                           class="form-control form-control-lg @error('username') is-invalid @enderror" 
                           id="username" 
                           placeholder="Username" 
                           value="{{ old('username') }}" 
                           required 
                           autofocus>
                    
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
    <div class="input-group">
        <input type="password" 
               name="password" 
               class="form-control form-control-lg @error('password') is-invalid @enderror" 
               id="password" 
               placeholder="Password" 
               required>
        
        <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="border-left: 0;">
            <i class="mdi mdi-eye" id="eyeIcon"></i>
        </button>
    </div>

    @error('password')
        <span class="text-danger small mt-1 d-block">{{ $message }}</span>
    @enderror
</div>

                  <div class="mt-3 d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                      SIGN IN
                    </button>
                  </div>

                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                      </label>
                    </div>
                    <a href="#" class="auth-link text-primary">Lupa password?</a>
                  </div>
                  
                  </form>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/misc.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>
    <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');
      const eyeIcon = document.querySelector('#eyeIcon');

      togglePassword.addEventListener('click', function (e) {
          // Toggle tipe input antara password dan text
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          
          // Ganti icon mata (buka/tutup)
          if (type === 'text') {
              eyeIcon.classList.remove('mdi-eye');
              eyeIcon.classList.add('mdi-eye-off');
          } else {
              eyeIcon.classList.remove('mdi-eye-off');
              eyeIcon.classList.add('mdi-eye');
          }
      });
  </script>
  </body>
</html>