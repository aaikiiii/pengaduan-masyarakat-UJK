@extends('layouts.app1')

@section('title', 'Home')

@section('content')
    <!-- This -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Pengaduan Masyarakat</h1>
            <a href="{{ route('pengaduan') }}" class="btn btn-primary scrollto">Buat Pengaduan</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row justify-content-center">


                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0 bg-primary">
                                        <i class="bx bxs-megaphone bg-white"></i>
                                        <h4 class="text-white">Tulis Pengaduan</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0 bg-primary">
                                        <i class="bx bx-loader bg-white"></i>
                                        <h4 class="text-white">Proses Verifikasi</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0 bg-primary">
                                        <i class="bx bx-cube-alt bg-white"></i>
                                        <h4 class="text-white">Tindak Lanjut</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0 bg-primary">
                                        <i class='bx bx-check-circle bg-white'></i>
                                        <h4 class="text-white">Selesai</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 bg-primary">
                        <div class="count-box">
                            <i class='bx bx-list-check bg-dark'></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $pengaduan }} "
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Semua Pengaduan</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0 bg-primary">
                        <div class="count-box">
                            <i class='bx bx-loader bg-dark'></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $proses }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Sedang Diproses</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 bg-primary">
                        <div class="count-box">
                            <i class='bx bx-check-circle bg-dark'></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $selesai }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Selesai</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

    </main><!-- End #main -->

    <!-- End This -->

@endsection
