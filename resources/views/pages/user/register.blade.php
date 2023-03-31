<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Register | Pengaduan</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
</head>

<body class="bg-gradient-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                Home
            </a>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-10">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Register</h1>
                            <p class="text-lead text-white">Silahkan isi form dibawah ini untuk membuat akun baru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--6 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="card bg-light border-0">
                        {{-- <div class="card-header bg-transparent pb-10">
                            <div class="text-muted text-center mt-2 mb-2"><small>Sign up with</small></div>
                            <div class="text-center">
                                <a href="#" class="btn btn-neutral btn-icon mr-4">
                                    <span class="btn-inner--icon"><img
                                            src="{{ asset('assets/backend/img/icons/common/facebook.svg') }} "></span>
                                    <span class="btn-inner--text">Facebook</span>
                                </a>
                                <a href="#" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon"><img
                                            src="{{ asset('assets/backend/img/icons/common/google.svg') }}"></span>
                                    <span class="btn-inner--text">Google</span>
                                </a>
                            </div>
                        </div> --}}
                        <div class="card-body px-lg-5 py-lg-10">
                            {{-- <div class="text-center text-muted mb-2">
                                <small>Or sign up with credentials</small>
                            </div> --}}
                            <div class="card-body">
                                <form action="{{ route('user.register-post') }}" role="form" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Induk
                                                    Kependudukan</label>
                                                <input id="nik" type="number"
                                                    class="form-control @error('nik') is-invalid @enderror"
                                                    name="nik" value="{{ old('nik') }}" autofocus>
                                                @error('nik')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama
                                                    Lengkap</label><br>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="name" value="{{ old('name') }}" autofocus>

                                                @error('nama')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Username</label>
                                                <input id="username" type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    name="username" value="{{ old('username') }}" required
                                                    autocomplete="username" autofocus>

                                                @error('nama')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor
                                                    Telepon</label>
                                                <input id="telp" type="number"
                                                    class="form-control @error('telp') is-invalid @enderror"
                                                    name="telp" value="{{ old('telp') }}" autofocus>

                                                @error('telp')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Password</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jenis
                                                    Kelamin</label>
                                                <br>
                                                <div class="mt-2">
                                                    <select name="jenis_kelamin"
                                                        class="custom-select @error('jenis_kelamin') is-invalid @enderror">
                                                        <option value="">Silahkan Pilih</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                @error('jenis_kelamin')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <input id="role" type="text"
                                            class="form-control @error('role') is-invalid @enderror" name="role"
                                            value="Warga" required autocomplete="role" autofocus hidden>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Alamat</label>
                                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="60"
                                                    rows="3"></textarea>

                                                @error('alamat')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">RT</label>
                                                <input id="rt" type="number"
                                                    class="form-control @error('rt') is-invalid @enderror"
                                                    name="rt" value="{{ old('rt') }}" required
                                                    autocomplete="rt" autofocus>

                                                @error('rt')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">RW</label>
                                                <input id="rw" type="number"
                                                    class="form-control @error('rw') is-invalid @enderror"
                                                    name="rw" value="{{ old('rw') }}" required
                                                    autocomplete="rw" autofocus>

                                                @error('rw')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kode
                                                    Pos</label>
                                                <input id="kode_pos" type="number"
                                                    class="form-control @error('kode_pos') is-invalid @enderror"
                                                    name="kode_pos" value="{{ old('kode_pos') }}" required
                                                    autocomplete="kode_pos" autofocus>

                                                @error('kode_pos')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Provinsi</label>
                                                <select id="province_id"
                                                    class="form-control @error('province_id') is-invalid @enderror"
                                                    name="province_id">
                                                    <option value="">--Pilih Provinsi--</option>
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('province_id')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Kabupaten/Kota</label>
                                                <select id="regency_id"
                                                    class="form-control @error('regency_id') is-invalid @enderror"
                                                    name="regency_id">
                                                </select>

                                                @error('regency_id')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Kecamatan</label>
                                                <select id="district_id"
                                                    class="form-control @error('district_id') is-invalid @enderror"
                                                    name="district_id">
                                                </select>

                                                @error('district_id')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Desa</label>
                                                <select id="village_id"
                                                    class="form-control @error('village_id') is-invalid @enderror"
                                                    name="village_id">
                                                </select>

                                                @error('village_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4">Buat Akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-right">
                            <a href="{{ url('login') }}" class="text-light"><small>Sudah punya akun?</small></a>
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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('#province_id').on('change', function() {
                    let province_id = $('#province_id').val();

                    console.log(province_id);

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkota') }}",
                        data: {
                            province_id: province_id
                        },
                        cache: false,

                        success: function(message) {
                            $('#regency_id').html(message);
                            $('#district_id').html('');
                            $('#village_id').html('');
                        },
                        error: function(data) {
                            console.log(`Error on ${data}`);
                        }
                    });
                });

                $('#regency_id').on('change', function() {
                    let regency_id = $('#regency_id').val();
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkecamatan') }}",
                        data: {
                            regency_id: regency_id
                        },
                        cache: false,

                        success: function(message) {
                            $('#district_id').html(message);
                            $('#village_id').html('');
                        },

                        error: function(data) {
                            console.log(`Error on ${data}`);
                        }
                    });
                });

                $('#district_id').on('change', function() {
                    let district_id = $('#district_id').val();
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getdesa') }}",
                        data: {
                            district_id: district_id
                        },
                        cache: false,

                        success: function(message) {
                            $('#village_id').html(message);
                        },
                        error: function(data) {
                            console.log(`Error on ${data}`);
                        }

                    })
                })
            })
        });
    </script>

</body>

</html>
