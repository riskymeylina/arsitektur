@extends('layout.main')
@section('content')
    <!-- Hero Section Start -->
    <div class="section position-relative overflow-hidden">

        <!-- Hero Slider Start -->
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">

                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="/assets/images/slider/slide1.jpg" alt="Slider Image" />
                        </div>
                        <!-- Hero Slider Bg image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-slide-content">
                                <h4 class="subtitle">Jasa</h4>
                                <h2 class="title">
                                    Desain <br />
                                    Arsitektural
                                </h2>
                                <a href="/project" class="btn-link">See Project</a>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->

                    </div>
                    <!-- Hero Slider Item End -->

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">

                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="/assets/images/slider/slide2.jpg" alt="Slider Image" />
                        </div>
                        <!-- Hero Slider Bg Image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-slide-content">
                                <h4 class="subtitle">Jasa</h4>
                                <h2 class="title">
                                    Desain <br />
                                    Arsitektural
                                </h2>
                                <a href="/project" class="btn-link">See Project</a>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->

                    </div>
                    <!-- Hero Slider Item End -->

                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev d-md-flex d-none"><i class="ion-ios-arrow-thin-left"></i>
                </div>
                <div class="home-slider-next swiper-button-next d-md-flex d-none"><i class="ion-ios-arrow-thin-right"></i>
                </div>
                <!-- Swiper Navigation End -->

            </div>
        </div>


        <!-- History Section Start -->
        <div class="section section-padding-top overflow-hidden">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="500">
                        <div class="history-image">
                            <img class="fit-image" src="/assets/images/history/history-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left"
                        data-aos-delay="500">
                        <div class="history-wrapper">
                            <h1 class="title">Sky Meylina Design</h1>
                            <div class="history-content">
                                <h4 class="subtitle">Mewujudkan Ide Menjadi Karya Arsitektur</h4>
                                <p>Kami adalah penyedia jasa desain arsitektural profesional yang mengutamakan kreativitas,
                                    fungsionalitas, dan keberlanjutan. Kami merancang ruang yang estetis, efisien, dan
                                    sesuai kebutuhan klien, mulai dari hunian pribadi hingga bangunan komersial. Dengan tim
                                    ahli berpengalaman, kami siap mewujudkan ide Anda menjadi karya arsitektural berkelas
                                    yang mencerminkan identitas dan visi Anda.</p>
                            </div>
                            <div class="signature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History Section End -->

        <!-- Services Section Start -->
        <div class="section section-padding-top bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title Start -->
                        <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title">Alasan Memilih Kami</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-12">
                        <div class="service-inner-container">

                            <!-- Service Block Start -->
                            <div class="service-block" data-aos="fade-up" data-aos-delay="300">
                                <div class="inner-box">
                                    <h5 class="title">
                                        <a href="/project">Layanan Terbaik</a>
                                    </h5>
                                    <p>Tim profesional siap merespons cepat untuk memastikan kepuasan pelanggan.</p>
                                    <div class="icon-link-bottom">
                                        <i class="icon icofont-labour"></i>
                                        <a href="/project" class="more">more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Block End -->

                            <!-- Service Block Start -->
                            <div class="service-block" data-aos="fade-up" data-aos-delay="400">
                                <div class="inner-box">
                                    <h5 class="title">
                                        <a href="/project">Efisiensi Waktu</a>
                                    </h5>
                                    <p>Web arsitektural mempercepat perencanaan dengan layanan online.</p>
                                    <div class="icon-link-bottom">
                                        <i class="icon icofont-ruler-compass-alt"></i>
                                        <a href="/project" class="more">more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Block End -->

                            <!-- Service Block Start -->
                            <div class="service-block" data-aos="fade-up" data-aos-delay="500">
                                <div class="inner-box">
                                    <h5 class="title">
                                        <a href="/project">Pembiayaan Mudah</a>
                                    </h5>
                                    <p>Layanan online menekan biaya operasional dan meningkatkan efisiensi proyek.</p>
                                    <div class="icon-link-bottom">
                                        <i class="icon icofont-credit-card"></i>
                                        <a href="/project" class="more">more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Block End -->

                            <!-- Service Block Start -->
                            <div class="service-block" data-aos="fade-up" data-aos-delay="600">
                                <div class="inner-box">
                                    <h5 class="title">
                                        <a href="/project">Konsultasi Gratis</a>
                                    </h5>
                                    <p>Pelanggan dapat berdiskusi dari rumah dengan nyaman dan transparan tanpa biaya
                                        tambahan.</p>
                                    <div class="icon-link-bottom">
                                        <i class="icon icofont-live-support"></i>
                                        <a href="/project" class="more">more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Block End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->


        <!-- Project Tab Section Start -->
        <div class="section bg-light">
            <div class="container">
                <div class="funfact-inner-container">
                    <div class="row" data-aos="fade-up" data-aos-delay="300">

                        <!-- Section Title Start -->
                        <div class="col-xl-3 col-md-12">
                            <div class="section-title mb-0">
                                <h2 class="title">latest Works</h2>
                            </div>
                        </div>
                        <!-- Section Title End -->

                        <!-- Tab Start -->
                        <div class="col-xl-7 col-md-8 col-sm-12">

                            <!-- Section Title & Product Tab Start -->
                            <div class="section-tabs-header">

                            </div>
                            <!-- Section Title & Product Tab End -->
                        </div>
                        <!-- Tab End -->

                        <!-- All Project Button Start -->
                        <div class="col-xl-2 col-md-4 col-sm-12">
                            <div class="all-project-btn">
                                <a href="/project">See All Projects <i class="arrow icofont-rounded-right"></i></a>
                            </div>
                        </div>
                        <!-- All Project Button End -->

                    </div>
                </div>
                <div class="container-auto">
                    <!-- Tab Content Start -->
                    <div class="tab-content" data-aos="fade-up" data-aos-delay="400">
                        <div class="tab-pane fade show active" id="tab-item-all">
                            <div class="tab-pane-carousel position-relative">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($projects as $project)
                                            <div class="swiper-slide">
                                                <!-- Single Project Slide Start -->
                                                <div class="single-project-slide">

                                                    <!-- Thumb Start -->
                                                    <div class="thumb">
                                                        <a href="/project" class="image">
                                                            <img class="fit-image"
                                                                src="{{ asset('storage/' . $project->gambar2) }}"
                                                                alt="Product" />
                                                        </a>
                                                    </div>
                                                    <!-- Thumb End -->

                                                    <!-- Content Start -->
                                                    <div class="content">

                                                        <h3 class="title"><a href="/project">{{ $project->name }}</a>
                                                        </h3>
                                                    </div>
                                                    <!-- Content End -->

                                                </div>
                                                <!-- Single Project Slide End -->
                                            </div>
                                        @endforeach



                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Swiper Navigation Start -->
                                    <div class="tab-carousel-prev swiper-button-prev"><i class="icofont-thin-left"></i>
                                    </div>
                                    <div class="tab-carousel-next swiper-button-next"><i class="icofont-thin-right"></i>
                                    </div>
                                    <!-- Swiper Navigation End -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Tab Content End -->
                </div>
            </div>
            <!-- Project Tab Section End -->


            <!-- News Section -->
            <div class="section news-section">

                <!-- End News Section -->

                <!-- Main Footer -->
                <footer class="section section-padding-top bg-light overflow-hidden">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">


                                <!-- Footer Nav Start -->
                                <ul class="footer-nav mb-n3">
                                    <li class="mb-3"><a href="/">Home</a></li>
                                    <li class="mb-3"><a href="/project">Project</a></li>
                                    <li class="mb-3"><a href="/portofolio">Portofolio</a></li>
                                    <li class="mb-3"><a href="/about">About</a></li>
                                    <li class="mb-3"><a href="/contact">Contact</a></li>
                                </ul>
                                <!-- Footer Nav End -->

                                <!-- Contact Info Start -->
                                <div class="contact-info">Sariharjo, Kec. Ngaglik, Kab. Sleman, Daerah Istimewa Yogyakarta
                                    <br> <a href="tel:+012-345-6789-00">(+62) 85158277835</a> <br>
                                    <!-- Contact Info End -->



                                    <!-- Copyright Start -->
                                    <div class="copyright">© 2024 <span>Meylina</span></div>
                                    <!-- Copyright End -->
                                </div>
                            </div>
                        </div>
                </footer>
                <!-- End Main Footer -->

                <!-- Scroll Top Start -->
                <a href="#" class="scroll-top" id="scroll-top">
                    <i class="arrow-top icofont-circled-up"></i>
                    <i class="arrow-bottom icofont-circled-up"></i>
                </a>
                <!-- Scroll Top End -->

                <!-- Scripts -->
                <!-- Global Vendor, plugins JS -->
            @endsection
