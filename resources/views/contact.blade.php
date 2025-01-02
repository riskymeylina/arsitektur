@extends('layout.main')
@section('content')
    <!-- Contact Map Start -->
    <div class="section">
        <!--Google Map Area Start-->
        <div class="google-map-area w-100">
            <iframe class="contact-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3403136014254!2d110.3692949!3d-7.7536834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f867e07d1b%3A0x815d073067c98a8d!2sGg.%20Intan%2C%20Nandan%2C%20Sariharjo%2C%20Kec.%20Ngaglik%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055581!5e0!3m2!1sid!2sid!4v1735747405456!5m2!1sid!2sid"></iframe>
        </div>
        <!--Google Map Area Start-->
    </div>
    <!-- Contact Map End -->

    <!-- Contact Page Section Start -->
    <div class="section contact-content-wrapper">
        <div class="container">
            <!-- Contact Info Boxed Start -->
            <div class="contact-info-boxed bg-light mb-10" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="inner-content">
                            <h1 class="title">Sleman, <span>Yogyakarta</span></h1>
                            <span class="text">Sariharjo, Kec. Ngaglik, Kab. Sleman, Daerah Istimewa Yogyakarta<br>
                                Indonesia</span>
                            <span class="email">Email: <a href="mailto:infor@yourdomain.com">meylina@gmail.com</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="inner-info">
                            <span class="call">Call directly:<br><a href="tel:+035-527-1710-70">(+62)
                                    85158277835</a></span>
                            <ul class="location-list">
                                <li><span>Work Hours:</span>Mon - Sat: 8.00 - 17.00, Sunday closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Info Boxed End -->

            <!-- Form Boxed Start -->
            <div class="form-boxed bg-light" data-aos="fade-up" data-aos-delay="300">
                <div class="section-title text-center">
                    <h2 class="title">Have A Question? Contact Us</h2>
                </div>

                <div class="boxed-inner">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!-- Contact Form -->
                        <form method="post" action="https://htmlmail.hasthemes.com/rezaul/gothic.php" id="contact-form">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input class="input-item" type="text" name="name"
                                        placeholder="Enter your name...">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input class="input-item" type="email" name="email" placeholder="Your Email">
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                    <input class="input-item" type="text" name="subject"
                                        placeholder="Subject (optional)">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-10">
                                    <div class="input-item">
                                        <textarea class="textarea-item" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                                    <button class="btn btn-primary btn-hover-dark" type="submit" name="submit"
                                        id="submit"><span class="txt">Send Message</span></button>
                                </div>
                                <p class="col-8 form-message mb-0"></p>

                            </div>
                        </form>
                        <p class="text-center form-messege"></p>

                    </div>
                    <!--End Contact Form -->
                </div>

            </div>
            <!-- Form Boxed End -->
        </div>
    </div>
    <!-- Contact Page Section End -->

    <!-- Main Footer -->
    <footer class="section section-padding-top bg-light overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">


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
