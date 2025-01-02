@extends('layout.main')
@section('content')
    <!-- Project Banner Section Start -->

    <div class="section">
        <div class="project-banner-section">
            <div class="image">
                <img class="fit-image" src="{{ asset('storage/' . $images->gambar1) }}" alt="Project">
            </div>
        </div>
    </div>
    <!-- Project Banner Section End -->

    <!-- Project Details Section Start -->
    <div class="section section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 ms-auto me-auto">
                    <!-- Project Details Content Start -->
                    <div class="project-details-content" data-aos="fade-up" data-aos-delay="300">

                        <h1 class="project-details-title">Culture House</h1>

                        <p>{{ $images->culture }}</p>

                        <h2 class="project-details-title section-padding-top">Concept</h2>

                        <p>{{ $images->concept }}</p>

                    </div>
                    <!-- Project Details Content End -->
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                    <!-- Project Details Slider Start -->
                    <div class="project-details-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="fit-image" src="{{ asset('storage/' . $images->gambar2) }}"
                                            alt="Project Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="fit-image" src="{{ asset('storage/' . $images->gambar3) }}"
                                            alt="Project Image">
                                    </div>
                                </div>
                            </div>



                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="project-details-slider-prev swiper-button-prev"><i class="icofont-thin-left"></i>
                            </div>
                            <div class="project-details-slider-next swiper-button-next"><i class="icofont-thin-right"></i>
                            </div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                    <!-- Project Details Slider End -->
                </div>
            </div>
            <!-- Project Right Content Box Start -->
            <div class="row project-right-content-box section-padding mb-n10">
                <div class="col-lg-8 mb-10 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="300">
                    <!-- Project Box Image Start -->
                    <div class="project-box-image">
                        <img class="fit-image" src="{{ asset('storage/' . $images->gambar4) }}" alt="Project Image">
                    </div>
                    <!-- Project Box Image End -->
                </div>
                <div class="col-lg-4 mb-10 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="500">
                    <!-- Project Box Inner Start -->
                    <div class="project-box-inner">
                        <div class="section-title">
                            <h2 class="text-capitalize title">Challenge</h2>
                        </div>
                        <p>{{ $images->challenge }}</p>
                    </div>
                    <!-- Project Box Inner End -->
                </div>
            </div>
            <!-- Project Right Content Box End -->

            <!-- Project Left Content Box Start -->
            <div class="row project-left-content-box mb-n10">
                <div class="col-lg-5 mb-10" data-aos="fade-up" data-aos-delay="300">
                    <!-- Project Box Inner Start -->
                    <div class="project-box-inner">
                        <div class="section-title">
                            <h2 class="text-capitalize title">Solution</h2>
                        </div>
                        <p>{{ $images->solution }}</p>
                    </div>
                    <!-- Project Box Inner End -->
                </div>
                <div class="col-lg-7 mb-10" data-aos="fade-up" data-aos-delay="500">
                    <!-- Project Box Image Start -->
                    <div class="project-box-image">
                        <img class="fit-image" src="{{ asset('storage/' . $images->gambar5) }}" alt="Project Image">
                    </div>
                    <!-- Project Box Image End -->
                </div>
            </div>
            <!-- Project Left Content Box End -->



        </div>
    </div>
    <!-- Project Details Section End -->



    <!-- Main Footer -->
    <footer class="section section-padding-top bg-light overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">



                    <!-- Contact Info Start -->
                    <div class="contact-info">Sariharjo, Kec. Ngaglik, Kab. Sleman, Daerah Istimewa Yogyakarta <br> <a
                            href="tel:+012-345-6789-00">(+62) 85158277835</a> <br>
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
