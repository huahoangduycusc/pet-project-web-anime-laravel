<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Anime</title>
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/css/style-convert.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/grid.css') }}">
</head>

<body>
    <div class="search-overlay">
        <div class="search-container">
            <div class="form-search">
                <form action="./search.html" method="get">
                    <div class="form-input-search">
                        <input type="text" name="" id="" placeholder="What are you searching for?">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </div>
                </form>
            </div>
            <div class="search-close"><span><i class='bx bx-x'></i></span></div>
        </div>
    </div>
    <header>
        <div class="header-container">
            <div class="header-content">
                <div class="header-logo">
                    <a href="./index.html">
                        <img src="{{ asset('/images/logo-black.png') }}" class="logo" alt="logo">
                    </a>
                </div>
                <!-- logo -->
                <nav class="nav-container">
                    <div class="header-logo-mobile">
                        <a href="./index.html">
                            <img src="./images/logo-black.png" class="logo" alt="logo">
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li class="nav-menu-item">
                            <a href="./index.html" class="nav-link">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="./category.html" class="nav-link">
                                <span>News</span>
                            </a>
                        </li>
                        <li class="nav-menu-item has-child">
                            <a class="nav-link">
                                <span>Category</span>
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="sub-menu menu-desktop">
                                <li><a href="./category.html">Manga</a></li>
                                <li><a href="./category.html">Cosplay</a></li>
                                <li><a href="./category.html">Movie</a></li>
                                <li><a href="./category.html">Fan</a></li>
                            </ul>
                            <ul class="sub-menu menu-mobile">
                                <li><a href="./category.html">Manga</a></li>
                                <li><a href="./category.html">Cosplay</a></li>
                                <li><a href="./category.html">Movie</a></li>
                                <li><a href="./category.html">Fan</a></li>
                            </ul>
                        </li>
                        <li class="nav-menu-item">
                            <a href="./category.html" class="nav-link">
                                <span>Video</span>
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="./contact.html" class="nav-link">
                                <span>Contact</span>
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-link search-open"><i class='bx bx-search'></i></a>
                        </li>
                    </ul>
                </nav>
                <!-- menu toggle bar-->
                <div class="menu-bar">
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-overlay"></div>
    <div class="body-content">
        @yield('content')
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-12 mr-b-10">
                            <div class="footer-header">
                                <img src="./images/logo-white.png" alt="" style="height: 45px;">
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-12 mr-b-10">
                            <div class="footer-header">
                                links and categories
                            </div>
                            <ul class="list-links">
                                <li><a href="">About us</a></li>
                                <li><a href="">Need helps?</a></li>
                                <li><a href="">Privacy</a></li>
                                <li><a href="">Terms of use</a></li>
                            </ul>
                        </div>
                        <div class="col-3 col-md-6 col-sm-12 mr-b-10">
                            <div class="footer-header">
                                Helps
                            </div>
                            <ul class="list-links">
                                <li><a href="">Send feedback</a></li>
                                <li><a href="">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-3 col-md-6 col-sm-12 mr-b-10">
                            <div class="footer-header">
                                Social media
                            </div>
                            <div class="social-list">
                                <a href="" class="social-link s-facebook">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                                <a href="" class="social-link s-instagram">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                                <a href="" class="social-link s-twitter">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space"></div>
                    <div class="line"></div>
                    <div class="empty-space"></div>
                    <div class="center">
                        <div class="copyright">
                            &copy; 2021 Designed by HHD
                        </div>
                        <div class="signature center">
                            <img src="{{ asset('/images/duy.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scrollup">
        <i class='bx bx-chevron-up'></i>
    </div>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>