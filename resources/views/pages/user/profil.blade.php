@extends('layouts.app')

@section('title', 'Pengaduan')

@section('content')

    <section class="inner-page">
        <div class="container ">
            <div class="row">
                <div class="row mt-5">

                    <div class="col">

                        <h4 class="fw-bold text-center">Profil</h4>

                    </div>

                </div>


                <div class="row justify-content-center">

                    <div class="col-md-6">

                        <div class="card shadow mb-5">

                            <ul class="list-group list-group-flush">


                                <li class="list-group-item">

                                    <h6 class="fw-bold">Nama: </h6>{{ $masyarakat->name }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Username: </h6>{{ $masyarakat->username }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">NIK: </h6>{{ $masyarakat->nik }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Jenis Kelamin: </h6>{{ $masyarakat->jenis_kelamin }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Email: </h6>{{ $masyarakat->email }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">No Telepon: </h6>{{ $masyarakat->telp }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Alamat: </h6>{{ $masyarakat->alamat }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">RT: </h6>{{ $masyarakat->rt }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">RW: </h6>{{ $masyarakat->rw }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Kode Pos: </h6>{{ $masyarakat->kode_pos }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Provinsi: </h6>{{ $masyarakat->province_id }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Kabupaten/Kota: </h6>{{ $masyarakat->regency_id }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Kecamatan: </h6>{{ $masyarakat->district_id }}

                                </li>

                                <li class="list-group-item">

                                    <h6 class="fw-bold">Desa: </h6>{{ $masyarakat->village_id }}

                                </li>

                                <li class="list-group-item text-center my-2">

                                    <a href="/ubah" class="btn btn-primary">Ubah Profil</a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
