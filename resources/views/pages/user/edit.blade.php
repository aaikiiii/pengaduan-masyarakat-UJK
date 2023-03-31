@extends('layouts.app')

@section('title', 'Pengaduan')

@section('content')

    <section class="inner-page">
        <div class="container ">
            <div class="row">
                <div class="row mt-5">

                    <div class="col">

                        <h4 class="fw-bold text-center">Update Profil</h4>

                    </div>

                </div>
                <div class="row justify-content-center">

                    <div class="col-md-8">

                        <div class="card mb-5">

                            <div class="card-body shadow">
                                <form action="/ubah" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('patch')
                                    <div class="mb-3">

                                        <label class="form-label">Nama Lengkap dan Gelar</label>

                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ $masyarakat->name }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Username</label>

                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" value="{{ $masyarakat->username }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Nomor Induk Kependudukan</label>

                                        <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                            id="nik" name="nik" value="{{ $masyarakat->nik }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>

                                        @if ($masyarakat->jenis_kelamin == 'Laki-laki')
                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="jenis_kelamin" value="Laki-laki" checked>

                                                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>

                                            </div>

                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="jenis_kelamin" value="Perempuan">

                                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>

                                            </div>
                                        @else
                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="jenis_kelamin" value="Laki-laki">

                                                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>

                                            </div>

                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="jenis_kelamin" value="Perempuan" checked>

                                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>

                                            </div>
                                        @endif

                                    </div>

                                    <div class="mb-3">

                                        <label for="password" class="form-label">Password</label>

                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" minlength="8" autocomplete="off" required>

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Email</label>

                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $masyarakat->email }}" required
                                            maxlength="30">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">No Telepon</label>

                                        <input type="number" class="form-control @error('telp') is-invalid @enderror"
                                            id="telp" name="telp" value="{{ $masyarakat->telp }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Alamat</label>

                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            id="alamat" name="alamat" value="{{ $masyarakat->alamat }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">RT</label>

                                        <input type="number" class="form-control @error('rt') is-invalid @enderror"
                                            id="rt" name="rt" value="{{ $masyarakat->rt }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">RW</label>

                                        <input type="number" class="form-control @error('rw') is-invalid @enderror"
                                            id="rw" name="rw" value="{{ $masyarakat->rw }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Kode Pos</label>

                                        <input type="number" class="form-control @error('kode_pos') is-invalid @enderror"
                                            id="kode_pos" name="kode_pos" value="{{ $masyarakat->kode_pos }}" required
                                            maxlength="25">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label" for="province_id">Provinsi Sesuai Tempat Tinggal</label>

                                        <select class="form-select @error('province_id') is-invalid @enderror"
                                            id="province_id" name="province_id" required>

                                            <option value="">-- Pilih Provinsi --</option>

                                            @foreach ($provinces as $province)
                                                @if ($province->id == $masyarakat->province_id)
                                                    <option value="{{ $province->id }}" selected>{{ $province->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endif
                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label" for="regency_id">Kota/Kabupaten Sesuai Tempat
                                            Tinggal</label>

                                        <select class="form-select @error('regency_id') is-invalid @enderror"
                                            id="regency_id" name="regency_id" required>

                                            <option value="">-- Pilih Kota/Kabupaten --</option>

                                            @foreach ($regencies as $regency)
                                                @if ($regency->id == $masyarakat->regency_id)
                                                    <option value="{{ $regency->id }}" selected>{{ $regency->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                                @endif
                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label" for="district_id">Kecamatan Sesuai Tempat
                                            Tinggal</label>

                                        <select class="form-select @error('district_id') is-invalid @enderror"
                                            id="district_id" name="district_id" required>

                                            <option value="">-- Pilih Kecamatan --</option>

                                            @foreach ($districts as $district)
                                                @if ($district->id == $masyarakat->district_id)
                                                    <option value="{{ $district->id }}" selected>{{ $district->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endif
                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label" for="village_id">Desa/Kelurahan Sesuai Tempat
                                            Tinggal</label>

                                        <select class="form-select @error('village_id') is-invalid @enderror"
                                            id="village_id" name="village_id" required>

                                            <option value="">-- Pilih Desa/Kelurahan --</option>

                                            @foreach ($villages as $village)
                                                @if ($village->id == $masyarakat->village_id)
                                                    <option value="{{ $village->id }}" selected>{{ $village->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $village->id }}">{{ $village->name }}</option>
                                                @endif
                                            @endforeach

                                        </select>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

                                    <a href="/pengaduan" class="btn btn-success">Kembali</a>


                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
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
    </section>
@endsection
