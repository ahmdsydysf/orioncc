@extends('layouts.front.app')
@php
$p_nam = 'projects';
@endphp
@section('page_name' ,)

@section('js-para-index')
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
@endsection
@section('js-video-index')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Create the video element
        var video = document.createElement('video');

        // Set video attributes
        video.setAttribute('muted', 'muted');
        video.setAttribute('loop', 'loop');
        video.setAttribute('autoplay', 'autoplay');
        video.setAttribute('playsInline', 'playsInline');
        video.setAttribute('id', 'background-video');
        video.setAttribute('poster', {{ asset('orionFrontAssets/assets/video/video-screen.png') }});
        // Add poster attribute

        // Create the source element
        var source = document.createElement('source');
        source.src = {{ asset('orionFrontAssets/assets/video/0903.mp4') }};
        source.type = "video/mp4";

        // Append the source to the video
        video.appendChild(source);

        // Append the video to the container
        document.getElementById('hero-slider-sect').prepend(video);
        video.play();
        // Optional: Play the video if autoPlay doesn't work (e.g., due to browser policies)
        document.body.addEventListener('click', function () {
            video.play()
                .then(() => console.log("Video playback started successfully"))
                .catch(error => console.error("Error trying to play the video:", error));
        }, { once: true }); // The { once: true } option auto-removes the event listener after one use
    });
</script>
@endsection
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/resources/project-up-back.webp)">
    </div>
    <div class="page-header__ripped-paper"
        style="background-image: url(assets/images/shapes/page-header-ripped-paper.png);"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>/</span></li>
                <li><a href="{{ route('projects.index') }}">Projects</a></li>
            </ul>
            <h2 class="fnt-clr-g">Rakez Industrial</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Portfolio Details page Start-->
<section class="portfolio-details">
    <div class="container">
        <div class="portfolio-details__top">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Checkout Our Project</span>
                        <h2 class="section-title__title">Rakez Industrial
                            <br> Rakez Project
                        </h2>
                    </div>
                    <div class="portfolio-details__img">
                        <img src="assets/images/project/rakez/1/Project_20230209_0006.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-details__bottom">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="portfolio-details__left">
                        <h3 class="portfolio-details__title">About our project</h3>
                        <p class="portfolio-details__text-1">Tincidunt elit magnis nulla facilisis sagittis
                            sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo
                            orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci
                            dolors sit amet elit amet.</p>
                        <p class="portfolio-details__text-2">It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. The point
                            of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content here, content here', making it look like readable
                            English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                            as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites still in their infancy. Various versions have evolved over the years,
                            sometimes by accident, humour and the like.</p>
                        <ul class="portfolio-details__points-box list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet is simply free text available in the market
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Sed tempor arcu non ligula convallis suffered alternation in some form by
                                        injected</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Fusce sodales lacus sollicitudin, if you are going to use a passage</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="portfolio-details__right">
                        <ul class="list-unstyled portfolio-details__details-list">
                            <li>
                                <p class="portfolio-details__client">Client:</p>
                                <h4 class="portfolio-details__name">Rakez</h4>
                            </li>
                            <li>
                                <p class="portfolio-details__client">Category:</p>
                                <h4 class="portfolio-details__name">Industrial</h4>
                            </li>
                            <li>
                                <p class="portfolio-details__client">Done In:</p>
                                <h4 class="portfolio-details__name">9 Months</h4>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <section class="testimonial-two" style="padding: 50px 0 50px;">
        <div class="testimonial-two__bg"
            style="background-image: url(assets/images/backgrounds/testimonial-two-bg.jpg);"></div>
        <div class="testimonial-two__bg-img"
            style="background-image: url(assets/images/backgrounds/testimonial-two-bg-img.png);"></div>
        <div class="testimonial-two__shape-1">
            <img src="assets/images/shapes/testimonial-two-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-two__left mt-5">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our project Gallary</span>
                            <h2 class="section-title__title">It's Good To Share Our Work With You</h2>
                        </div>
                        <p class="testimonial-two__text-1">Lorem ipsum dolor sit amet, elit sed, ading do eiusmod
                            tempor incididunt labore et dolore elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-two__right">
                        <div class="main-slider-three__right">
                            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                      "effect": "fade",
                      "pagination": {
                      "el": "#main-slider-pagination",
                      "type": "bullets",
                      "clickable": true
                      },
                      "navigation": {
                      "nextEl": "#main-slider__swiper-button-next",
                      "prevEl": "#main-slider__swiper-button-prev"
                      },
                      "autoplay": {
                      "delay": 5000
                      }}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="image-layer-three">
                                            <img src="assets/images/project/rakez/1/Project_20230209_0007.jpg" alt="">
                                        </div>
                                        <div class="main-slider-three__bg-shape-1"
                                            style="background-image: url(assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                        </div>
                                        <div class="main-slider-three__content">
                                            <h4 class="main-slider-three__sub-title">
                                            </h4>
                                            <h2 class="main-slider-three__title">
                                            </h2>
                                            <div class="main-slider-three__btn-box">
                                                <a href="product-details.html"
                                                    class="thm-btn main-slider-three__btn"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-layer-three image-layer-three--2">
                                            <img src="assets/images/project/rakez/1/Project_20230209_0012.jpg" alt="">
                                        </div>
                                        <div class="main-slider-three__bg-shape-1"
                                            style="background-image: url(assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                        </div>
                                        <div class="main-slider-three__content">
                                            <h4 class="main-slider-three__sub-title">
                                            </h4>
                                            <h2 class="main-slider-three__title">
                                            </h2>
                                            <div class="main-slider-three__btn-box">
                                                <a href="product-details.html"
                                                    class="thm-btn main-slider-three__btn"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-layer-three image-layer-three--3">
                                            <img src="assets/images/project/rakez/1/Project_20230209_0014.jpg" alt="">
                                        </div>
                                        <div class="main-slider-three__bg-shape-1"
                                            style="background-image: url(assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                        </div>
                                        <div class="main-slider-three__content">
                                            <h4 class="main-slider-three__sub-title">
                                            </h4>
                                            <h2 class="main-slider-three__title">
                                            </h2>
                                            <div class="main-slider-three__btn-box">
                                                <a href="product-details.html"
                                                    class="thm-btn main-slider-three__btn"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-layer-three image-layer-three--3">
                                            <img src="assets/images/project/rakez/1/Project_20230209_0015.jpg" alt="">
                                        </div>
                                        <div class="main-slider-three__bg-shape-1"
                                            style="background-image: url(assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                        </div>
                                        <div class="main-slider-three__content">
                                            <h4 class="main-slider-three__sub-title">
                                            </h4>
                                            <h2 class="main-slider-three__title">
                                            </h2>
                                            <div class="main-slider-three__btn-box">
                                                <a href="product-details.html"
                                                    class="thm-btn main-slider-three__btn"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-layer-three image-layer-three--3">
                                            <img src="assets/images/project/rakez/1/Project_20230209_0026.jpg" alt="">
                                        </div>
                                        <div class="main-slider-three__bg-shape-1"
                                            style="background-image: url(assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                        </div>
                                        <div class="main-slider-three__content">
                                            <h4 class="main-slider-three__sub-title">
                                            </h4>
                                            <h2 class="main-slider-three__title">
                                            </h2>
                                            <div class="main-slider-three__btn-box">
                                                <a href="product-details.html"
                                                    class="thm-btn main-slider-three__btn"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-pagination" id="main-slider-pagination"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<div class="container" style="margin-top: 120px;">
    <div id="customize-thumbnails-gallery">

        <ul class="flip-items enhanced-reflection">
            <li data-flip-title="Title 1">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0001.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0001.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 2">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0002.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0002.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0003.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0003.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0004.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0004.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0005.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0005.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0006.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0006.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0007.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0007.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0008.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0008.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0009.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0009.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0010.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0010.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0011.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0011.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0012.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0012.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0013.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0013.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0014.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0014.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0015.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0015.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0016.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0016.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0017.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0017.jpg" />
                </a>
            </li>
            <li data-flip-title="Title 3">
                <a class="flipster__item" href="assets/images/project/rakez/1/Project_20230209_0018.jpg">
                    <img src="assets/images/project/rakez/1/Project_20230209_0018.jpg" />
                </a>
            </li>
        </ul>
    </div>

</div>
<!--Counter One Start-->
<section class="counter-one">
    <div class="counter-one__bg" style="background-image: url(assets/images/backgrounds/OIU9IB1-01.png);background-size: auto;
    background-repeat: repeat;">
    </div>
    <div class="container">
        <ul class="counter-one__inner list-unstyled">
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <img class="icon-farmer-1"
                        src="assets/images/icon/completed-checkmark-done-complete-svgrepo-com.svg" width="60"
                        height="60" alt="">
                </div>
                <div class="counter-one__content count-box">
                    <h3 class="count-text" data-stop="154" data-speed="1500">00</h3>
                    <p class="counter-one__text">Completed Project</p>
                </div>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <img class="icon-farmer-1" src="assets/images/icon/engineer-worker-svgrepo-com.svg" width="60"
                        height="60" alt="">
                </div>
                <div class="counter-one__content count-box">
                    <h3 class="count-text" data-stop="163" data-speed="1500">00</h3>
                    <p class="counter-one__text">Expert Engineer</p>
                </div>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <img src="assets/images/icon/worker-svgrepo-com.svg" width="60" height="60" alt="" srcset="">
                </div>
                <div class="counter-one__content count-box">
                    <h3 class="count-text" data-stop="2384" data-speed="1500">00</h3>
                    <p class="counter-one__text">Good Workers</p>
                </div>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <img src="assets/images/icon/deal-svgrepo-com.svg" width="65" height="65" alt="" srcset="">

                </div>
                <div class="counter-one__content count-box">
                    <h3 class="count-text" data-stop="65" data-speed="1500">00</h3>
                    <p class="counter-one__text">Trusted Client</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--Counter One End-->
<!--Video One Start-->
<section class="video-one">
    <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/project/rakez/1/Project_20230209_0004.jpg)"></div>
    <div class="video-one-border"></div>
    <div class="video-one-border video-one-border-two"></div>
    <div class="video-one-border video-one-border-three"></div>
    <div class="video-one-border video-one-border-four"></div>
    <div class="video-one-border video-one-border-five"></div>
    <div class="video-one-border video-one-border-six"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>

                    <h2 class="video-one__video-title">We Will Be Happy to Share
                        <br> Our Project Video
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->
<!--Portfolio Details page End-->
<section class="portfolio-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="portfolio-details__pagination-box">
                    <ul class="portfolio-details__pagination list-unstyled clearfix">
                        <li class="next">
                            <div class="icon">
                                <a href="project-details.html" aria-label="Previous"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                            <div class="content">
                                <span>Previous Project</span>
                                <p>Project Name</p>
                            </div>
                        </li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="previous">
                            <div class="content">
                                <span>Next Project</span>
                                <p>Project Name</p>
                            </div>
                            <div class="icon">
                                <a href="project-details.html" aria-label="Previous"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Gallery One Start-->
<section class="gallery-one gallery-two">
    <div class="section-title text-center">
        <span class="section-title__tagline">Checkout</span>
        <h2 class="section-title__title">Related Projects
            <br> For You
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/project/Ahmad tea/IMG_5411.jpg" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="project-details.html">Ahmed Tea</a></h3>
                                    <p class="gallery-one__sub-title">Project Type Category</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="project-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/project/Gulf Rubber Factory/22.JPG" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="project-details.html">Gulf Rubber</a></h3>
                                    <p class="gallery-one__sub-title">Project Type Category</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="project-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/project/utico-water and power plant/_MG_7157.JPG" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="project-details.html">Utico</a></h3>
                                    <p class="gallery-one__sub-title">Project Type Category</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="project-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/project/Duber/100_0618.JPG" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="project-details.html">Duber</a></h3>
                                    <p class="gallery-one__sub-title">Project Type Category</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="project-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
        </div>
    </div>
</section>
<!--Gallery One End-->













{{--
<footer class="site-footer">
    <div class="site-footer__bg"
        style="background-image: url(assets/images/backgrounds/site-footer-bg-img.png);background-repeat: repeat;background-size: 350px;">
    </div>
    <div class="site-footer__ripped-paper"
        style="background-image: url(assets/images/shapes/site-footer-ripped-paper.png);"></div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index-2.html"><img src="assets/images/resources/logo-white.webp" alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">We’re Making Your Dream <br> Became Reality</p>
                        </div>
                        <div class="footer-widget__social-box">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Explore</h3>
                        </div>
                        <div class="footer-widget__explore-list-box">
                            <ul class="footer-widget__explore-list list-unstyled">
                                <li><a href="about.html">About Company</a></li>
                                <li><a href="services.html">Our Sectors</a></li>
                                <li><a href="pricing.html">Our Staff</a></li>
                                <li><a href="products.html">Projects</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contact</h3>
                        </div>
                        <p class="footer-widget__contact-text">UAE , Ras Al-Khaimah , Al-Hamra Industrial Area
                        </p>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="text">
                                    <p><a href="tel:97172335531">
                                            +971 7233 5531</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p><a href="mailto:info@orioncc.com ">info@orioncc.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__gallery">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Gallery</h3>
                        </div>
                        <ul class="footer-widget__gallery-list list-unstyled clearfix">
                            <li>
                                <div class="footer-widget__gallery-img">
                                    <img src="assets/images/project/Picture1.jpg" alt="">
                                    <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__gallery-img">
                                    <img src="assets/images/project/Picture10.png" alt="">
                                    <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__gallery-img">
                                    <img src="assets/images/project/Picture12.png" alt="">
                                    <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__gallery-img">
                                    <img src="assets/images/project/Picture32.jpg" alt="">
                                    <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__gallery-img">
                                    <img src="assets/images/project/Picture212.jpg" alt="">
                                    <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__gallery-img">
                                    <img src="assets/images/project/Picture3.jpg" alt="">
                                    <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__bottom-left">
                            <p class="site-footer__bottom-text">© Copyright 2024 by <a href="#">Orion</a>
                            </p>
                        </div>
                        <div class="site-footer__bottom-right">
                            <ul class="list-unstyled site-footer__bottom-menu">
                                <li><a href="about.html">Terms & Conditions</a></li>
                                <li><span>/</span></li>
                                <li><a href="about.html">Privacy Policy</a></li>
                                <li><span>/</span></li>
                                <li><a href="about.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index-2.html" aria-label="logo image"><img src="assets/images/resources/logo-white.webp"
                    width="104" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@orioncc.com">info@orioncc.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:97172335531">+971 7 2335531</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="https://www.facebook.com/orioncontractingcompany"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/orion-contracting-company-llc/mycompany/"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/@orioncontracting9881"><i class="fab fa-youtube"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.3.0/lightgallery.min.js"></script>
<script src="assets/vendors/countdown/jquery.countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendors/vegas/vegas.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/timepicker/timePicker.js"></script>
<script src="assets/vendors/circleType/jquery.circleType.js"></script>
<script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="assets/js/flip/jquery.flipster.min.js"></script>
<!-- template js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function () {
      // Initialize LightGallery
      var lightGalleryInstance = lightGallery(document.getElementById('customize-thumbnails-gallery'), {
        selector: 'a',
        addClass: 'lg-custom-thumbnails',
        appendThumbnailsTo: '.lg-outer',
        animateThumb: true,
        allowMediaOverlap: true,
        speed: 500,
        closeOnTap: true,
        hideBarsDelay: 3000,
        loop: true,
        download: false,
        counter: true,
        enableSwipe: true,
        enableDrag: true,
        swipeThreshold: 50,
        thumbnail: true,
        animateThumb: true,
        currentPagerPosition: 'middle',
        thumbWidth: 100,
        thumbHeight: '80px',
        thumbContHeight: 100,
        showThumbByDefault: true,
        toogleThumb: true,
        fullScreen: true,
        zoom: true,
        scale: 1,
        actualSize: true
      });

      // Initialize Flipster
      var flipsterInstance = $("#customize-thumbnails-gallery").flipster({
        itemContainer: 'ul',
        itemSelector: 'li',
        style: 'coverflow',
        responsive: true,

        start: 'center',
        loop: false,
        spacing: -0.2,
        visible: 4,

        perspective: 1000,

        autoplay: false,
        pauseOnHover: false,
        click: false,
        keyboard: true,
        scrollwheel: true,
        touch: true,
        nav: false,
        buttons: false,
        buttonPrev: 'Previous',
        buttonNext: 'next',
        onItemSwitch: $.noop
      });

      // Add click event to Flipster items to trigger LightGallery
      $('.flipster__item').on('click', function (e) {
        e.preventDefault();
        var index = $(this).index();
        lightGalleryInstance.openGallery(index);
      });

    });

</script>
</body>


</html> --}}