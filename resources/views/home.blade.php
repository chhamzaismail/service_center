@extends('template/header')

@section('pageContent')
<!-- Banner Swiper -->
<div class="banner_main">
    <!-- Swiper -->
    <div class="swiper banner_Swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="main_bnr" >
                    <div class="bnr-overlay"></div>
                    <div class="banner_lines">
                        <img src="{{asset('assets/frontend/images/banner_layer.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="banner_content_main">
                            <div class="banner_left">
                                <a href="" class="btn_primary">All RV Service Centers</a>
                                <h1 class="banner_left_title heading_primary">Looking for a</h1>
                                <h1 class="banner_left_subtitle heading_primary"><span>RV Detailing Service?</span></h1>
                                <p class="banner_left_description description">All RV Service Center is dedicated to providing high-quality services to all our customers committed to giving more than 100%.</p>

                                <a href="" class="btn_secondary start_btn">Start Now<i class="fa-solid fa-arrow-right secondary_btn_icon"></i></a>
                            </div>
                            <div class="banner_right">
                                <h2 class="banner_right_title"><span>Here's How It Works:</span></h2>

                                <div class="banner_icons_main">
                                    <div class="banner_work_icon">
                                        <a href="" class="icon_secondary">
                                            <img src="{{asset('assets/frontend/images/Group 255.png')}}" alt="">
                                        </a>
                                        <a href="" class="banner_link">Book an Appointment</a>
                                    </div>
                                    <img src="{{asset('assets/frontend/images/Group 22.png')}}"  class="drop_img" alt="">
                                    <div class="banner_work_icon">
                                        <a href="" class="icon_secondary"><img src="{{asset('assets/frontend/images/Group 256.png')}}" alt=""></a>
                                        <a href="" class="banner_link">We Travel to You with Supplies, Equipment, Water & Electricity</a>
                                    </div>
                                    <img src="{{asset('assets/frontend/images/Group 22.png')}}"  class="drop_img" alt="">
                                    <div class="banner_work_icon">
                                        <a href="" class="icon_secondary"><img src="{{asset('assets/frontend/images/Group 257.png')}}" alt=""></a>
                                        <a href="" class="banner_link">Your Vehicle is Professionally Cleaned</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
        
            </div>
            <div class="swiper-slide">
            <div class="main_bnr" >
                    <div class="bnr-overlay"></div>
                    <div class="banner_lines">
                        <img src="{{asset('assets/frontend/images/banner_layer.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="banner_content_main">
                            <div class="banner_left">
                                <a href="" class="btn_primary">All RV Service Centers</a>
                                <h1 class="banner_left_title heading_primary">Looking for a</h1>
                                <h1 class="banner_left_subtitle heading_primary"><span>RV Detailing Service?</span></h1>
                                <p class="banner_left_description description">All RV Service Center is dedicated to providing high-quality services to all our customers committed to giving more than 100%.</p>
                        
                                <a href="" class="btn_secondary start_btn">Start Now<i class="fa-solid fa-arrow-right secondary_btn_icon"></i></a>
                            </div>
                            <div class="banner_right">
                                <h2 class="banner_right_title heading_secondary"><span>Here's How It Works:</span></h2>

                                <div class="banner_icons_main">
                                    <div class="banner_work_icon">
                                        <a href="" class="icon_secondary">
                                            <img src="{{asset('assets/frontend/images/Group 255.png')}}" alt="">
                                        </a>
                                        <a href="" class="banner_link">Book an Appointment</a>
                                    </div>
                                    <img src="{{asset('assets/frontend/images/Group 22.png')}}"  class="drop_img" alt="">
                                    <div class="banner_work_icon">
                                        <a href="" class="icon_secondary"><img src="{{asset('assets/frontend/images/Group 256.png')}}" alt=""></a>
                                        <a href="" class="banner_link">We Travel to You with Supplies, Equipment, Water & Electricity</a>
                                    </div>
                                    <img src="{{asset('assets/frontend/images/Group 22.png')}}"  class="drop_img" alt="">
                                    <div class="banner_work_icon">
                                        <a href="" class="icon_secondary"><img src="{{asset('assets/frontend/images/Group 257.png')}}" alt=""></a>
                                        <a href="" class="banner_link">Your Vehicle is Professionally Cleaned</a>
                                    </div>
                                    

                                </div>
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
<div class="margin_top_div"></div>
<!-- Category -->
<div class="category_main">
    <div class="container">
        <h1 class="heading_secondary"><span>To Get Started</span></h1>
        <h1 class="heading_primary category_heading">Select The Category</h1>
        <div class="car_category row">
            <div class="col-sm-3">
                <a href="" class="category_card">
                    <img src="{{asset('assets/frontend/images/cars/car.jpg')}}" alt="">
                    <div class="description_2">Car</div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="" class="category_card">
                    <img src="{{asset('assets/frontend/images/cars/mini-van.jpg')}}" alt="">
                    <div class="description_2">Mini Van</div>                   
                </a>
            </div>
            <div class="col-sm-3 ">
                <a href="" class="category_card">                    
                    <img src="{{asset('assets/frontend/images/cars/suv.jpg')}}" alt="">
                    <div class="description_2">Small Suv</div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="" class="category_card">       
                    <img src="{{asset('assets/frontend/images/cars/suv-car.jpg')}}" alt="">
                    <div class="description_2">Large Suv</div>
                </a>
            </div>
        </div>

        <div class="car_category row">
            <div class="col-sm-3">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/pickup-truck.jpg')}}" alt="">
                    <div class="description_2">Pick-Up Truck</div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/speed-boat.jpg')}}" alt="">
                    <div class="description_2">Boat/Watercraft</div>
                </a>
            </div>
            <div class="col-sm-3 ">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/motorbike.jpg')}}" alt="">
                    <div class="description_2">Motorcycle/ATV</div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/rv.jpg')}}" alt="">
                    <div class="description_2">Rvs/Trailer</div>
                </a>
            </div>
        </div>

        <div class="car_category row">
            <div class="col-sm-3">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/delivery.jpg')}}" alt="">
                    <div class="description_2">Van or Bus</div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/trailer.jpg')}}" alt="">
                    <div class="description_2">Daycab Semi Truck</div>
                </a>
            </div>
            <div class="col-sm-3 ">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/trailer (2).jpg')}}" alt="">
                    <div class="description_2">Sleeper Cab Semi Truck</div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="" class="category_card">     
                    <img src="{{asset('assets/frontend/images/cars/truck.jpg')}}" alt="">
                    <div class="description_2">Box Truck</div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Work Section -->
<div class="container">
    <div class="work_section_main">
        <div class="work_section_left">
            <img src="{{asset('assets/frontend/images/work_sec.png')}}" alt="">
        </div>
        <div class="work_section_right">
            <h2 class="heading_secondary"><span>RV Detailing Service</span></h2>
            <h1 class="heading_primary">How It Works</h1>
            <p class="description_2">RV Detailing Pros is a fully-equipped RV detailing service provider. This means that we travel to the location of your choice with our own equipment, supplies, water and electricity. </p>
            <p class="description_2 work_description">We cater to clients who enjoy the luxury of a detailing service without having to sacrifice convenience. Kick back, relax and enjoy the comfort of your home or office while we make your vehicle look beautiful again.</p>

            <a href="" class="btn_secondary ">Contact Us<i class="fa-solid fa-arrow-right secondary_btn_icon"></i></a>
        </div>
    </div>
</div>

<!-- Reviews -->
<div class="review_section_main">
    <div class="review_section">
        <div class="container">
            <div class="heading_secondary review_heading"><span>Ratings</span></div>
            <div class="heading_primary">Customer Reviews</div>

            <div class="swiper_buttons">
                <div class="review-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="review-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            </div>
        </div>    
            <!-- Review Swiper -->
            <div class=" swiper_review_container">
                <div class="container">
                    <div class="swiper review_Swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="review_bg_icon">
                                    <i class="fa-solid fa-pause"></i>
                                </div>
                                <p class="description">We couldn’t be happier with the amazing job our technician did. So happy with how great our vehicle looks!</p>
        
                                <div class="review_profile">
                                    <img src="{{asset('assets/frontend/images/review_pic.png')}}" alt="">
        
                                    <div class="profile_details">
                                        <h3 class="heading_third">Umair Alvi</h3>
                                        <div class="review_rating">
                                            <p class="description">Rating:</p>
                                            <div class="review_icons">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i> 
                                                <i class="fa-regular fa-star"></i> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review_bg_icon">
                                    <i class="fa-solid fa-pause"></i>
                                </div>
                                <p class="description">We couldn’t be happier with the amazing job our technician did. So happy with how great our vehicle looks!</p>
        
                                <div class="review_profile">
                                    <img src="{{asset('assets/frontend/images/review_pic.png')}}" alt="">
        
                                    <div class="profile_details">
                                        <h3 class="heading_third">Umair Alvi</h3>
                                        <div class="review_rating">
                                            <p class="description">Rating:</p>
                                            <div class="review_icons">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i> 
                                                <i class="fa-regular fa-star"></i> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review_bg_icon">
                                    <i class="fa-solid fa-pause"></i>
                                </div>
                                <p class="description">We couldn’t be happier with the amazing job our technician did. So happy with how great our vehicle looks!</p>
        
                                <div class="review_profile">
                                    <img src="{{asset('assets/frontend/images/review_pic.png')}}" alt="">
        
                                    <div class="profile_details">
                                        <h3 class="heading_third">Umair Alvi</h3>
                                        <div class="review_rating">
                                            <p class="description">Rating:</p>
                                            <div class="review_icons">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i> 
                                                <i class="fa-regular fa-star"></i> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review_bg_icon">
                                    <i class="fa-solid fa-pause"></i>
                                </div>
                                <p class="description">We couldn’t be happier with the amazing job our technician did. So happy with how great our vehicle looks!</p>
        
                                <div class="review_profile">
                                    <img src="{{asset('assets/frontend/images/review_pic.png')}}" alt="">
        
                                    <div class="profile_details">
                                        <h3 class="heading_third">Umair Alvi</h3>
                                        <div class="review_rating">
                                            <p class="description">Rating:</p>
                                            <div class="review_icons">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i> 
                                                <i class="fa-regular fa-star"></i> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>

    </div>
</div>
<!-- Gallery Section -->
<div class="container">
    <div class="gallery_parent">
        <h2 class="heading_secondary"><span>Our Work</span></h2>
        <h1 class="heading_primary">Gallery</h1>
        <!--  -->
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-gallery gallerySwiper2">
            <div class="swiper-wrapper" id="lightgallery" >
                <a href="{{asset('assets/frontend/images/g_main.png')}}" data-lg-size="1024-800" class="swiper-slide swiper-slide-gallery">
                    <img alt="img1" src="{{asset('assets/frontend/images/g_main.png')}}" />
                </a>
                <a href="{{asset('assets/frontend/images/g1_main.png')}}" data-lg-size="1024-800" class="swiper-slide swiper-slide-gallery">
                    <img alt="img1" src="{{asset('assets/frontend/images/g1_main.png')}}" />
                </a>
                <a href="{{asset('assets/frontend/images/g3_main.png')}}" data-lg-size="1024-800" class="swiper-slide swiper-slide-gallery">
                    <img alt="img1" src="{{asset('assets/frontend/images/g3_main.png')}}" />
                </a>
                <a href="{{asset('assets/frontend/images/g_main.png')}}" data-lg-size="1024-800" class="swiper-slide swiper-slide-gallery">
                    <img alt="img1" src="{{asset('assets/frontend/images/g_main.png')}}" />
                </a>

            </div>
            <div class="gallery_buttons">
                <div class="gallery-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="gallery-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            </div>
        </div>

        <div thumbsSlider="" class="swiper swiper-gallery gallerySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-gallery">
                <img src="{{asset('assets/frontend/images/g2.png')}}" />
            </div>
            <div class="swiper-slide swiper-slide-gallery">
                <img src="{{asset('assets/frontend/images/g1.png')}}" />
            </div>
            <div class="swiper-slide swiper-slide-gallery">
                <img src="{{asset('assets/frontend/images/g3.png')}}" />
            </div>
            <div class="swiper-slide swiper-slide-gallery">
                <img src="{{asset('assets/frontend/images/g2.png')}}" />
            </div>
         
            </div>
        </div>
        <div class="gallery_insta_img">
            <img src="{{asset('assets/frontend/images/insta_logo.png')}}" alt="">
        </div>
    </div>
</div>

@endsection

