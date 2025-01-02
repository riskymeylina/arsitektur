    <!-- Header Section Start -->
    <div class="header header-transparent-bg section-fluid">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="/">
                                    <img class="fit-image" src="/assets/images/logo/logo-web.png" alt="Header Logo">
                                </a>
                            </div>
                            <!-- Header Logo End -->

                        </div>

                        <div class="col-lg-8 col-md-7 d-none d-md-block">

                            <!-- Main Menu Language Wrapper Start -->
                            <div class="main-menu-language-wrapper">

                                <!-- Main Menu Start -->
                                <nav class="main-menu main-menu-white">
                                    <ul>
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/about">About</a>
                                        </li>
                                        <li>
                                            <a href="/project">Project</a>

                                        </li>
                                        <li>
                                            <a href="/portofolio">Portofolio</a>

                                        </li>
                                        <li>
                                            <a href="/contact">Contact</a>
                                        </li>
                                        @if (Auth::check())
                                            <li>
                                                <a href="/chatify">Chat</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                                <!-- Main Menu End -->


                                @if (Auth::check())
                                    <div class="language language-white d-md-none d-lg-flex">
                                        <a href="#" id="user-name">{{ Auth::user()->name }}</a>
                                        <div id="logout-menu" style="display: none;">
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button type="submit">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <div class="language language-white d-md-none d-lg-flex">
                                        <a href="/login">Login</a>
                                    </div>
                                @endif

                            </div>
                            <!-- Main Menu Language Wrapper End -->

                        </div>

                        <div class="col-lg-2 col-md-2 col-6">

                            <!-- Mobile Menu Hamburger Start -->
                            <div class="mobile-menu-hamburger mobile-menu-hamburger-white">
                                <a href="javascript:void(0)">
                                    <span>Menu</span>
                                    <i class="icon ion-android-menu"></i>
                                </a>
                            </div>
                            <!-- Mobile Menu Hamburger End -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">
                <!-- Mobile Menu Inner Top Start -->
                <div class="mobile-menu-inner-top">

                    <!-- Mobile Menu Logo Start  -->
                    <div class="logo-mobile">
                        <img src="/assets/images/logo/logo-web.png" alt="Logo">
                    </div>
                    <!-- Mobile Menu Logo End -->

                    <!-- Button Close Start -->
                    <div class="offcanvas-btn-close">
                        <i class="icofont-close-line"></i>
                    </div>
                    <!-- Button Close End -->

                </div>
                <!-- Mobile Menu Inner Top End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a class="active" href="/about">About</a>
                            </li>
                            <li class="has-children">
                                <a href="/project">Project <i class="icofont-rounded-down" aria-hidden="true"></i></a>

                            </li>
                            <li class="has-children">
                                <a href="/portofolio">Portofolio <i class="icofont-rounded-down"
                                        aria-hidden="true"></i></a>

                            </li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Header Section End -->


    <script>
        document.getElementById('user-name').addEventListener('click', function(event) {
            event.preventDefault();
            var logoutMenu = document.getElementById('logout-menu');
            if (logoutMenu.style.display === 'none') {
                logoutMenu.style.display = 'block';
            } else {
                logoutMenu.style.display = 'none';
            }
        });
    </script>
