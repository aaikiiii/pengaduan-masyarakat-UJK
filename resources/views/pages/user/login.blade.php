<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login | Pengaduan</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
</head>

<body class="bg-gradient-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="">
                Pengaduan Masyakarat
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <span class="nav-link-inner--text">Home</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
            <a href="{{ url('tentang')}}" class="nav-link">
              <span class="nav-link-inner--text">Tentang</span>
            </a>
          </li> --}}
                </ul>
                <hr class="d-lg-none" />

            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-8">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Login</h1>
                            <p class="text-lead text-white">Silahkan login menggunakan akun yang sudah didaftarkan.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> --}}
        </div>
        <!-- Page content -->
        <div class="container mt--6 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-light border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" action="{{ route('user.login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input type="text" value="{{ old('username') }}"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            id="username" placeholder="Email atau Username">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control form-control @error('password') is-invalid @enderror"
                                            name="password" id="password" placeholder="Password" type="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3 text-right">
                            <a href="{{ url('register') }}" class="text-light"><small>Buat akun baru</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="bg-gradient-info">

            <div class="copyright text-center">
                &copy; Copyright <strong><span>Muhammad Rizki</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session()->has('pesan'))
        <script>
            Swal.fire(
                'Pemberitahuan!',
                '{{ session()->get('pesan') }}',
                'error'
            );
        </script>
    @endif
</body>

</html>
