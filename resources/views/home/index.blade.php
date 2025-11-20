@extends('app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                    src="https://sma1klaten.sch.id/sw-content/slider/slider-62e6693201c6d94975cfe0368ac563b5.jpg"
                    alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                    src="https://sma1klaten.sch.id/sw-content/slider/slider-0f4843c402427009069a351246a24318.jpg"
                    alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                    src="https://sma1klaten.sch.id/sw-content/slider/slider-782728f6e5b879c43f4b0f284c5bebbf.jpg"
                    alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Guru Berkualitas</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Lingkungan Asri</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Fasilitas Nyaman</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Perpustakaan Lengkap</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h5 class="mb-3">Lab Komputer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-mosque text-primary mb-4"></i>
                            <h5 class="mb-3">Tempat Ibadah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-store text-primary mb-4"></i>
                            <h5 class="mb-3">Kantin dan Koperasi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book text-primary mb-4"></i>
                            <h5 class="mb-3">E-Learning</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-76 border border-5 text-center">
                        <video width="500" height="300" autoplay>
                            <source src="https://sma1klaten.sch.id/smansa.mp4" type="video/mp4">
                        </video>
                        {{-- <img class="img-fluid position-absolute w-100 h-100" src="https://sma1klaten.sch.id/timthumb?src=/sw-content/blog/image/LAHIR_PANCASILA_2.jpg&h=352&w=600"
                            alt="" style="object-fit: cover;"> --}}
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to SMA N 1 Klaten</h1>
                    <p class="mb-4">SMA Negeri 1 Klaten dikenal dengan sekolah yang menekankan nilai-nilai luhur bangsa. Selain itu, sekolah ini juga dikenal sebagai pencetak siswa-siswa yang memiliki segudang prestasi akademik maupun non-akademik baik di tingkat kabupaten, provinsi, nasional, bahkan internasional.</p>
                    <p class="mb-4">Para alumni siswa SMA Negeri 1 Klaten pada umumnya menjadi orang-orang yang sukses, baik menjadi tokok masyarakat, pegawai negeri, pegawai swasta, wiraswasta, atau rohaniawan.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href={{route('profil')}}>Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
