@extends('template/header')

@section('pageContent')
<!-- Banner Swiper -->
<div class="banner_main">
    <!-- Swiper -->
    <div class="swiper banner_Swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="main_bnr_order " >
                    <div class="bnr-overlay"></div>
                    <div class="container">
                        <div class="banner_content_main">
                            <div class="banner_left">
                                <div class="description"><span>Home / Select RV Category / Airstream Trailer / Order</span></div>
                                <h1 class="banner_left_title heading_primary">Order</h1>
                            </div>  
                        </div>
                    </div>    
                </div>
        
            </div>
            <div class="swiper-slide">
                <div class="main_bnr_order " >
                    <div class="bnr-overlay"></div>
                    <div class="container">
                        <div class="banner_content_main">
                            <div class="banner_left">
                                <div class="description"><span>Home / Select RV Category / Airstream Trailer / Order</span></div>
                                <h1 class="banner_left_title heading_primary">Order</h1>
                            </div>
                        </div>
                    </div>    
                </div>
        
            </div>
        </div>
        <div class="container swipper_pagination_main">
            <div class="swiper-pagination"></div>
            <div class="swiper_buttons">
                <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            </div>
        </div>

    </div>
</div>
<!-- margin div -->
<div class="margin_top_div_order"></div>

@endsection