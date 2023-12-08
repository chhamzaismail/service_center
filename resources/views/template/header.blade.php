<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap Link  -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css')}}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper-bundle.min.css')}}" />
    <!-- Light gallery css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lightgallery-bundle.css')}}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
    <title>Service Center</title>
</head>

<body>
    <!-- Header -->
<div class="main_header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-7">
                <nav class="navbar navbar-dark navbar-expand-lg ">
                    <div class="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse collapse_custom" id="navbarNav">
                        <ul class="navbar-nav navigation_menu">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Professional RV Ceramic coating</a>
                            </li>
                        
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-5">
                <div class="nav_icons_main d-flex justify-content-end align-items-center">
                    <p>Connect With Us</p>
                    <div class="nav_icons">
                        <a href="https://www.facebook.com/RVservicecentremtmaunganui/" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/RVServiceCenter" target="blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/generalrvcenter/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/watch?v=WOHsxHM4ybc" target="blank"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logo Section -->
<div class="container">
    <div class="main_logo_section">
        <a href="" class="site_logo" >
            <img src="{{asset('assets/frontend/images/logo.png')}}" alt="">
        </a>
        <div class="contact_section">
            <a href="" class="btn_primary">Contact Us <i class="fa-solid fa-arrow-right contact_icon"></i></a>

            <div class="contact_main">
                <a href="tel:(877) 770-2052" class="icon_primary"><i class="fa-solid fa-phone"></i></a>

                <div class="contact_no">
                    <p class="contact_title">Call Now</p>
                    <a href="tel:(877) 770-2052" class="phone_no">(877) 770-2052</a>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('pageContent')

@extends('template/footer')
<!-- Light Gallery JS -->
<script src="{{asset('assets/frontend/js/lightgallery.min.js')}}"></script>
<!-- Gallery Plugins -->
<script src="{{asset('assets/frontend/js/lg-thumbnail.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/lg-zoom.min.js')}}"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        selector: 'a',
        thumbnail: true,
        plugins: [lgThumbnail,lgZoom],
    });
</script>

<!-- Bootstrap JS -->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>

<!-- Bannner Swiper -->
<script src="{{asset('assets/frontend/js/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper(".banner_Swiper", {
        centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
</script>
<!-- Review Swiper -->
<script>
var swiper1 = new Swiper(".review_Swiper", {
    breakpoints: {
          380: {
            slidesPerView: 1,
            // spaceBetween: 50,
          },
          480: {
            slidesPerView: 1,
            // spaceBetween: 50,
          },
          580: {
            slidesPerView: 2,
          },
          640: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          836:{
            slidesPerView: 2,
          },
          993:{
            slidesPerView: 3,
          },
          1200:{
            slidesPerView: 3,
          },
          1365: {
            slidesPerView: 3,
          },
        },
    // spaceBetween: 30,
    navigation: {
        nextEl: ".review-button-next",
        prevEl: ".review-button-prev",
      },
});
</script>
<!-- Gallery Swiper -->
<script>
    var swiper = new Swiper(".gallerySwiper", {
      spaceBetween: 25,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
          380: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          580: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          640: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 4,
          },
          1365: {
            slidesPerView: 4,
          },
        },
    });
    var swiper2 = new Swiper(".gallerySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".gallery-button-next",
        prevEl: ".gallery-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
</body>
</html>