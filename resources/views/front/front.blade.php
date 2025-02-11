<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="E-book Management System"/>
    <meta name="keywords" content="E-book Management System"/>

    <meta name="author" content="dreambuzz"/>

    <title>E-book Management System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}"/>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"/>
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}"/>
    <!--  icon Css -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/flaticon/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}"/>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}"/>
    <link
        rel="stylesheet"
        href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style-3.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
</head>

<body id="top-header">
<!-- Navigation Menu -->

<!-- NAVBAR
================================================= -->
<div
    class="main-navigation fixed-top site-header nav-classic large-container"
    id="mainmenu-area"
>
    <nav class="navbar navbar-expand-lg">
        <div class="container align-items-center">
            <a class="navbar-brand smoth-scroll" href="#">
                <h2 class="mb-0">E-book Management System</h2>
            </a>
            <!-- Toggler -->
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarmain"
                aria-controls="navbarmain"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="ti-menu-alt"></span>
            </button>

            <!-- Collapse -->
            <div
                class="collapse navbar-collapse text-center text-lg-left"
                id="navbarmain"
            >
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#banner" class="nav-link smoth-scroll"> Home </a>
                    </li>

                    <li class="nav-item">
                        <a href="#book" class="nav-link smoth-scroll"> About </a>
                    </li>

                    <li class="nav-item">
                        <a href="#reviews" class="nav-link smoth-scroll"> Reviews </a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoth-scroll"> Contact </a>
                    </li>

                    @if(auth()->user() == null)
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link smoth-scroll">Login </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link smoth-scroll">Register </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link smoth-scroll">Dashboard</a>
                        </li>
                    @endif
                </ul>


                <ul class="list-inline top-socials-3 mb-0">
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--Menu End -->

<!-- Banner -->
<section class="banner-4 large-container" id="banner">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-md-12">
                <div class="main-banner main-banner-content">
             <span
                 class="mb-3 d-inline-block wow fadeInLeft"
                 data-wow-duration="400ms"
             >eBook includes
  <strong>PDF, Kindle, and ePub</strong> formats
</span>
                    <h1 class="wow fadeInLeft font-serif" data-wow-delay="200ms">
                        Expand Your Knowledge <br/>with Our eLibrary
                    </h1>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="400ms">
                        Access a wide variety of e-books across multiple genres, carefully curated to enhance your
                        reading experience and knowledge growth.
                    </p>
                    <a
                        href="#"
                        target="_blank"
                        class="btn btn-white mt-2 text-capitalize wow fadeInUp"
                        data-wow-delay="450ms"
                    >
                        Explore <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="banner-img4 wow fadeInUp">
                    <img src="{{ asset('images/about/book.png') }}" alt="" class="img-fluid w-100"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Feature Start -->
<section class="pb-80 pt-120 large-container overflow-hidden" id="features">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div
                    class="feature-block feature-two mb-4 mb-lg-0 wow fadeInUp"
                    data-wow-delay="300ms"
                >
                    <i class="flaticon-notebook text-danger"></i>
                    <h5 class="mb-3 mt-4">Extensive eBook Collection</h5>
                    <p class="mb-0">
                        Access thousands of e-books across various categories, from fiction and non-fiction to academic
                        resources.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div
                    class="feature-block feature-two mb-4 mb-lg-0 wow fadeInUp"
                    data-wow-delay="400ms"
                >
                    <i class="flaticon-responsive text-success"></i>
                    <h5 class="mb-3 mt-4">Multi-Device Compatibility</h5>
                    <p class="mb-0">
                        Read your favorite e-books seamlessly on desktops, tablets, and mobile devices with responsive
                        support.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div
                    class="feature-block feature-two mb-4 mb-lg-0 wow fadeInUp"
                    data-wow-delay="450ms"
                >
                    <i class="flaticon-problem text-warning"></i>
                    <h5 class="mb-3 mt-4">Personalized Reading Experience</h5>
                    <p class="mb-0">
                        Enjoy tailored recommendations and bookmarking features to enhance your reading journey.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Feature End -->

<!-- Book preview -->
<section class="preview-section pb-150 large-container" id="book">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-6 pr-lg-5">
                <div class="row">
                    <div
                        class="col-xl-6 wow fadeInUp mt-3 col-md-6"
                        data-wow-delay="350ms"
                    >
                        <div class="about-wrapper">
                            <img src="{{ asset('images/about/01.jpg') }}" alt="" class="img-fluid"/>
                        </div>
                    </div>
                    <div
                        class="col-xl-6 wow fadeInUp col-md-6"
                        data-wow-delay="450ms"
                    >
                        <div class="about-wrapper">
                            <img src="{{ asset('images/about/02.jpg') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="about-wrapper">
                            <img src="{{ asset('images/about/03.jpg') }}" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-xl-6">
                <div class="section-heading book-info mt-5 mt-lg-0 pl-4 pl-xl-0">
                    <div class="heading mb-5 overflow-hidden">
                <span
                    class="featured-text wow fadeInLeft"
                    data-wow-delay="200ms"
                >About The book</span
                >
                        <h2
                            class="text-lg mb-4 wow fadeInLeft font-serif"
                            data-wow-delay="400ms"
                        >
                            Key Features
                        </h2>
                        <p class="lead wow fadeInUp" data-wow-delay="420ms">
                            This captivating and thoughtfully crafted book offers insights and inspiration, making it a
                            must-read for enthusiasts and professionals alike.
                        </p>
                    </div>

                    <div class="about-item2 wow fadeInUp" data-wow-delay="500ms">
                        <div class="about-icon"><i class="flaticon-reading"></i></div>
                        <h5>Read On Any Device</h5>
                        <p>Seamless compatibility with desktops, tablets, and smartphones for uninterrupted reading.</p>
                    </div>
                    <div class="about-item2 wow fadeInUp" data-wow-delay="550ms">
                        <div class="about-icon">
                            <i class="flaticon-responsive"></i>
                        </div>
                        <h5>Very high resolution</h5>
                        <p>Enjoy clear and crisp typography with high-resolution formats for a superior reading
                            experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABout end -->

<!-- Chapter -->

<section id="book" class="section chapter chapter-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-70">
                    <h2 class="text-lg mb-4">Read on Any Device</h2>
                    <p class="lead">
                        Enjoy seamless reading experiences with e-books optimized for all devices, ensuring
                        accessibility.
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12">
                <div class="book-preview mb-5 mb-lg-0">
                    <img
                        src="{{ asset('images/about/kindle.png') }}"
                        class="background-device img-fluid"
                        alt="E-book on Kindle Device"
                    />
                    <div
                        class="owl-book owl-carousel owl-theme"
                        style="opacity: 1; display: block"
                    >
                        <div class="book-item">
                            <img
                                src="{{ asset('images/about/book_page.png') }}"
                                alt="Sample eBook Page 1"
                                class="img-fluid"
                            />
                            <div class="overlay">
                                <a
                                    href="{{ asset('images/about/book_page.png') }}"
                                    class="popup-gallery img-fluid"
                                    data-title="Sample eBook Page"
                                ><i class="ti-fullscreen"></i></a>
                            </div>
                        </div>

                        <div class="book-item">
                            <img
                                src="{{ asset('images/about/book_page2.png') }}"
                                alt="Sample eBook Page 2"
                                class="img-fluid"
                            />
                            <div class="overlay">
                                <a
                                    href="{{ asset('images/about/book_page2.png') }}"
                                    class="popup-gallery img-fluid"
                                    data-title="Sample eBook Page"
                                ><i class="ti-fullscreen"></i></a>
                            </div>
                        </div>

                        <div class="book-item">
                            <img
                                src="{{ asset('images/about/book_page.png') }}"
                                alt="Sample eBook Page 1"
                                class="img-fluid"
                            />
                            <div class="overlay">
                                <a
                                    href="{{ asset('images/about/book_page.png') }}"
                                    class="popup-gallery img-fluid"
                                    data-title="Sample eBook Page"
                                ><i class="ti-fullscreen"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="section-heading book-info mt-5 mt-lg-0 pl-4">
                    <div class="about-features mt-5">
                        <div class="about-item2 mb-40">
                            <div class="about-icon"><i class="ti-book"></i></div>
                            <h4>Read Anytime, Anywhere</h4>
                            <p>
                                Whether on a desktop, tablet, or mobile device, enjoy a seamless reading experience
                                tailored to your preferences.
                            </p>
                        </div>
                        <div class="about-item2">
                            <div class="about-icon"><i class="ti-desktop"></i></div>
                            <h4>High-Resolution eBooks</h4>
                            <p>
                                Experience clear and sharp text with high-resolution eBooks, designed for maximum
                                readability and visual appeal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Chapter End -->

<!-- Review-->
<div class="section testimonial-section" data-aos="fade-up" id="reviews">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="heading mb-4 overflow-hidden text-center text-lg-left">
              <span class="featured-text wow fadeInDown" data-wow-delay="200ms"
              >Reviews</span
              >
                    <h2
                        class="text-lg mb-2 wow fadeInLeft font-serif"
                        data-wow-delay="200ms"
                    >
                        Customer Reviews
                    </h2>
                    <p class="lead">
                        Hear what our readers have to say about their experience with this engaging and insightful
                        e-book.
                    </p>

                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="text-center text-lg-right">
                    <div id="reviewNavs" class="owl-nav"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-xl-12">
                <div class="owl-carousel testimonial-slider owl-theme">
                    <div class="testimonial-item2">
                        <div class="author-img">
                            <img
                                src="{{ asset('images/about/person_1.jpg') }}"
                                alt="Image placeholder"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            A small river named Duden flows by their place and supplies it
                            with the necessary regelialia. It is a paradisematic country,
                            in which roasted
                        </p>
                        <div class="author">
                            <h4 class="mb-0">Maxim Smith</h4>
                            <p>CEO, Founder</p>
                        </div>
                    </div>

                    <div class="testimonial-item2">
                        <div class="author-img">
                            <img
                                src="{{ asset('images/about/person_2.jpg') }}"
                                alt="Image placeholder"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            A small river named Duden flows by their place and supplies it
                            with the necessary regelialia. It is a paradisematic country,
                            in which roasted
                        </p>
                        <div class="author">
                            <h4 class="mb-0">Geert Green</h4>
                            <p>CEO, Founder</p>
                        </div>
                    </div>

                    <div class="testimonial-item2">
                        <div class="author-img">
                            <img
                                src="{{ asset('images/about/person_3.jpg') }}"
                                alt="Image placeholder"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            A small river named Duden flows by their place and supplies it
                            with the necessary regelialia. It is a paradisematic country,
                            in which roasted
                        </p>
                        <div class="author">
                            <h4 class="mb-0">Dennis Roman</h4>
                            <p>CEO, Founder</p>
                        </div>
                    </div>

                    <div class="testimonial-item2">
                        <div class="author-img">
                            <img
                                src="{{ asset('images/about/person_2.jpg') }}"
                                alt="Image placeholder"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            A small river named Duden flows by their place and supplies it
                            with the necessary regelialia. It is a paradisematic country,
                            in which roasted
                        </p>
                        <div class="author mt-5">
                            <h4 class="mb-0">Geert Green</h4>
                            <p>CEO, Founder</p>
                        </div>
                    </div>

                    <div class="testimonial-item2">
                        <div class="author-img">
                            <img
                                src="{{ asset('images/about/person_1.jpg') }}"
                                alt="Image placeholder"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            A small river named Duden flows by their place and supplies it
                            with the necessary regelialia. It is a paradisematic country,
                            in which roasted
                        </p>
                        <div class="author">
                            <h4 class="mb-0">Geert Green</h4>
                            <p>CEO, Founder</p>
                        </div>
                    </div>

                    <div class="testimonial-item2">
                        <div class="author-img">
                            <img
                                src="{{ asset('images/about/person_2.jpg') }}"
                                alt="Image placeholder"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            A small river named Duden flows by their place and supplies it
                            with the necessary regelialia. It is a paradisematic country,
                            in which roasted
                        </p>
                        <div class="author">
                            <h4 class="mb-0">Geert Green</h4>
                            <p>CEO, Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tetsimonial End -->

<!-- Others books -->
<section class="section-bottom others-book">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="pb-4">
                    <h2>Available Books</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="{{ asset('images/about/b-1.jpg') }}" alt="" class="img-fluid"/>
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="{{ asset('images/about/b-2.jpg') }}" alt="" class="img-fluid"/>
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="{{ asset('images/about/b-3.jpg') }}" alt="" class="img-fluid"/>
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="{{ asset('images/about/b-4.jpg') }}" alt="" class="img-fluid"/>
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe END -->

<!-- Contact -->
<section class="pb-80 contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="section-heading mb-5">
                    <span class="featured-text">Get Connected</span>
                    <h2 class="mb-2 text-lg font-serif">Contact Us</h2>
                    <p class="lead">
                        Have questions or just want to say hello? Reach out to us—we're here to help with your e-book management needs.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xl-7">
                <form
                    class="contact__form form-row contact-form"
                    method="post"
                    action=""
                    id="contactForm"
                >
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="alert alert-success contact__msg"
                                style="display: none"
                                role="alert"
                            >
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    placeholder="Enter Your Name"
                                />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                    placeholder="Enter Your Email Address"
                                />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                    <textarea
                        id="message"
                        name="message"
                        cols="30"
                        rows="6"
                        class="form-control"
                        placeholder="Your Message"
                    ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button
                            id="submit"
                            name="submit"
                            type="submit"
                            class="btn btn-main btn-rounded"
                        >
                            Submit Message<i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-sm-12 col-md-12 col-xl-4">
                <div class="contact-info-wrapper pl-lg-5 mt-5 mt-lg-0">
                    <div class="contact-info-block">
                        <h4>Contact Info</h4>

                        <ul class="list-unstyled">
                            <li>Email: hello@treaser.com</li>
                            <li>Phone: +2 343-435-3454</li>
                        </ul>
                    </div>

                    <div class="contact-info-block">
                        <h4>Address:</h4>
                        <p>3490 Drive Park New York ,NY 10011</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

<!-- Footer Start -->
<footer class="footer-dark">
    <div
        class="shape-container shape-line shape-position-top shape-orientation-inverse"
    >
        <svg
            width="2560px"
            height="100px"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            preserveAspectRatio="none"
            x="0px"
            y="0px"
            viewBox="0 0 2560 100"
            style="enable-background: new 0 0 2560 100"
            xml:space="preserve"
            class=""
        >
          <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mr-auto col-md-6 col-sm-6">
                    <div class="footer-widget logo mb-5 mb-lg-0">
                        <h4>E-book Management System</h4>
                        <p>
                            Members can easily read and access a wide collection of e-books anytime, anywhere.
                        </p>
                        <h6 class="text-white mt-4 mb-3">Payment Worldwide:</h6>
                        <img src="{{ asset('images/about/cards-3.png') }}" alt="" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6">
                    <div class="footer-widget footer-menu mb-5 mb-lg-0">
                        <h4>Useful Pages</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6">
                    <div class="footer-widget footer-menu mb-5 mb-lg-0">
                        <h4>Socials</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer-menu">
                        <h4>Contact</h4>
                        <ul class="list-unstyled">
                            <li>
                                Email:
                                <a href="">support@gtt</a>
                            </li>
                            <li>Phone: <a href="tel:01 369 6792">01 369 6792</a></li>
                            <li>Location : <span>10/12 USA Road</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <p class="footer-copy text-white-50 mb-sm-4 mb-lg-0 mb-md-0">
                        &copy; Copyright
                        <span class="current-year">Tahnid Ferdous</span> All rights
                        reserved 2025.
                    </p>
                </div>
                <!-- <div class="col-lg-6 col-md-5">
                  <ul class="list-inline text-md-right mb-0">
                    <li class="list-inline-item">
                      <a href="#">Privacy Policy |</a>
                    </li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                  </ul>
                </div> -->
            </div>
            <!-- / .row -->
        </div>
    </div>
</footer>
<!--  Footer End -->

<!--  Page Scroll to Top  -->

<a class="scroll-to-top smoth-scroll" href="#top-header">
    <i class="ti-angle-up"></i>
</a>

<!--
Essential Scripts
=====================================-->
</body>

<!-- Main jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/counterup/waypoint.js') }}"></script>
<script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('plugins/animate-css/wow.min.js') }}"></script>
<script src="{{ asset('plugins/countdown/countdown.jquery.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
</html>
