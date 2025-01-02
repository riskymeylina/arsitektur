@extends('layout.main')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">

                    <!-- breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <!-- Bread Title Start -->
                        <div class="bread-title">
                            <h1 class="title">Our Project</h1>
                        </div>
                        <!-- Bread Title End -->

                        <!-- Post Meta Start -->
                        <ul class="post-meta">
                            <li><a href="/">Home</a></li>
                            <li>Works</li>
                        </ul>
                        <!-- Post Meta End -->
                    </div>
                    <!-- breadcrumb Wrapper End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Section Start Here -->
    <div class="section project-masonry-section">
        <div class="container">
            <div class="row mt-n2">


            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1  mesonry-list">

                <div class="resizer col"></div>
                @foreach ($projects as $project)
                    <!-- Single project Start -->
                    <div class="col cat-2 cat-3 cat-4 mb-10">
                        <div class="single-project-wrap">
                            <div class="project-thumb position-relative m-0">
                                <a class="image" href="/{{ $project->id }}/project-details">
                                    <img src="{{ asset('storage/' . $project->gambar1) }}" alt="project Image">
                                </a>
                            </div>
                            <div class="inner-content">

                                <h4 class="title"><a href="/{{ $project->id }}/project-details">{{ $project->name }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single project End -->
                @endforeach

                @if (auth()->user()->role == 'admin')
                    <div class="row section-padding-bottom">
                        <div class="col-12">

                            <!-- Load More Start -->
                            <div class="load-more text-center">
                                <a href="/images/create">...ADD PROJECT...</a>
                            </div>
                            <!-- Load More End -->

                        </div>
                    </div>
                @endif

            </div>
        </div>
        <!-- project Section End Here -->

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
