@extends('base')

@section('content')
        <div class="header-bottom">
            <div class="container d-flex align-items-center">
                <div class="categories-nav position-relative">
                    <h3 class="categories-nav__title">Browse Categories</h3>
                    <ul class="categories-nav__list list-unstyled">
                        <li class="categories-nav__item"><a href="shop1.html">Electronics</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Computers</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Audio & Video</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Mobiles & Tablets</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">TV & Audio</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Car & Motorbike</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Hmoe & Garden</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Toys & Kids</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Sporting Goods</a></li>
                        <li class="categories-nav__item"><a href="shop1.html">Pet Supplies</a></li>
                    </ul>
                </div>

                <nav class="navigation flex-grow-1">
                    <ul class="navigation__list list-unstyled d-flex">
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Home</a>

                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Shop</a>
                            <div class="mega-menu">
                                <div class="container d-flex">
                                    <div class="col pe-4">
                                        <a href="#" class="sub-menu__title">Shop List</a>
                                        <ul class="sub-menu__list list-unstyled">
                                            <li class="sub-menu__item"><a href="shop1.html" class="menu-link menu-link_us-s">Shop List V1</a></li>
                                            <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">Shop List V2</a></li>
                                            <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Shop List V3</a></li>
                                            <li class="sub-menu__item"><a href="shop4.html" class="menu-link menu-link_us-s">Shop List V4</a></li>
                                            <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Shop List V5</a></li>
                                            <li class="sub-menu__item"><a href="shop6.html" class="menu-link menu-link_us-s">Shop List V6</a></li>
                                            <li class="sub-menu__item"><a href="shop7.html" class="menu-link menu-link_us-s">Shop List V7</a></li>
                                            <li class="sub-menu__item"><a href="shop8.html" class="menu-link menu-link_us-s">Shop List V8</a></li>
                                            <li class="sub-menu__item"><a href="shop9.html" class="menu-link menu-link_us-s">Shop List V9</a></li>
                                            <li class="sub-menu__item"><a href="shop10.html" class="menu-link menu-link_us-s">Shop Item Style</a></li>
                                            <li class="sub-menu__item"><a href="shop11.html" class="menu-link menu-link_us-s">Horizontal Scroll</a></li>
                                        </ul>
                                    </div>

                                    <div class="col pe-4">
                                        <a href="#" class="sub-menu__title">Shop Detail</a>
                                        <ul class="sub-menu__list list-unstyled">
                                            <li class="sub-menu__item"><a href="product2_variable.html" class="menu-link menu-link_us-s">Shop Detail V1</a></li>
                                            <li class="sub-menu__item"><a href="product7_v2.html" class="menu-link menu-link_us-s">Shop Detail V2</a></li>
                                            <li class="sub-menu__item"><a href="product8_v3.html" class="menu-link menu-link_us-s">Shop Detail V3</a></li>
                                            <li class="sub-menu__item"><a href="product9_v4.html" class="menu-link menu-link_us-s">Shop Detail V4</a></li>
                                            <li class="sub-menu__item"><a href="product10_v5.html" class="menu-link menu-link_us-s">Shop Detail V5</a></li>
                                            <li class="sub-menu__item"><a href="product11_v6.html" class="menu-link menu-link_us-s">Shop Detail V6</a></li>
                                            <li class="sub-menu__item"><a href="product12_v7.html" class="menu-link menu-link_us-s">Shop Detail V7</a></li>
                                            <li class="sub-menu__item"><a href="product13_v8.html" class="menu-link menu-link_us-s">Shop Detail V8</a></li>
                                            <li class="sub-menu__item"><a href="product14_v9.html" class="menu-link menu-link_us-s">Shop Detail V9</a></li>
                                            <li class="sub-menu__item"><a href="product15_v10.html" class="menu-link menu-link_us-s">Shop Detail V10</a></li>
                                            <li class="sub-menu__item"><a href="product16_v11.html" class="menu-link menu-link_us-s">Shop Detail V11</a></li>
                                        </ul>
                                    </div>

                                    <div class="col pe-4">
                                        <a href="#" class="sub-menu__title">Other Pages</a>
                                        <ul class="sub-menu__list list-unstyled">
                                            <li class="sub-menu__item"><a href="shop12.html" class="menu-link menu-link_us-s">Collection Grid</a></li>
                                            <li class="sub-menu__item"><a href="product1_simple.html" class="menu-link menu-link_us-s">Simple Product</a></li>
                                            <li class="sub-menu__item"><a href="product2_variable.html" class="menu-link menu-link_us-s">Variable Product</a></li>
                                            <li class="sub-menu__item"><a href="product3_external.html" class="menu-link menu-link_us-s">External Product</a></li>
                                            <li class="sub-menu__item"><a href="product4_grouped.html" class="menu-link menu-link_us-s">Grouped Product</a></li>
                                            <li class="sub-menu__item"><a href="product5_onsale.html" class="menu-link menu-link_us-s">On Sale</a></li>
                                            <li class="sub-menu__item"><a href="product6_outofstock.html" class="menu-link menu-link_us-s">Out of Stock</a></li>
                                            <li class="sub-menu__item"><a href="shop_cart.html" class="menu-link menu-link_us-s">Shopping Cart</a></li>
                                            <li class="sub-menu__item"><a href="shop_checkout.html" class="menu-link menu-link_us-s">Checkout</a></li>
                                            <li class="sub-menu__item"><a href="shop_order_complete.html" class="menu-link menu-link_us-s">Order Complete</a></li>
                                            <li class="sub-menu__item"><a href="shop_order_tracking.html" class="menu-link menu-link_us-s">Order Tracking</a></li>
                                        </ul>
                                    </div>

                                    <div class="mega-menu__media col">
                                        <div class="position-relative">
                                            <img loading="lazy" class="mega-menu__img" src="https://uomo-html.flexkitux.com/images/mega-menu-item.jpg" alt="New Horizons">
                                            <div class="mega-menu__media-content content_abs content_left content_bottom">
                                                <h3>NEW</h3>
                                                <h3 class="mb-0">HORIZONS</h3>
                                                <a href="shop1.html" class="btn-link default-underline fw-medium">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.container d-flex -->
                            </div>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Blog</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="blog_list1.html" class="menu-link menu-link_us-s">Blog V1</a></li>
                                <li class="sub-menu__item"><a href="blog_list2.html" class="menu-link menu-link_us-s">Blog V2</a></li>
                                <li class="sub-menu__item"><a href="blog_list3.html" class="menu-link menu-link_us-s">Blog V3</a></li>
                                <li class="sub-menu__item"><a href="blog_single.html" class="menu-link menu-link_us-s">Blog Detail</a></li>
                            </ul><!-- /.box-menu -->
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Pages</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="account_dashboard.html" class="menu-link menu-link_us-s">My Account</a></li>
                                <li class="sub-menu__item"><a href="login_register.html" class="menu-link menu-link_us-s">Login / Register</a></li>
                                <li class="sub-menu__item"><a href="store_location.html" class="menu-link menu-link_us-s">Store Locator</a></li>
                                <li class="sub-menu__item"><a href="lookbook.html" class="menu-link menu-link_us-s">Lookbook</a></li>
                                <li class="sub-menu__item"><a href="faq.html" class="menu-link menu-link_us-s">Faq</a></li>
                                <li class="sub-menu__item"><a href="terms.html" class="menu-link menu-link_us-s">Terms</a></li>
                                <li class="sub-menu__item"><a href="404.html" class="menu-link menu-link_us-s">404 Error</a></li>
                                <li class="sub-menu__item"><a href="coming_soon.html" class="menu-link menu-link_us-s">Coming Soon</a></li>
                            </ul><!-- /.box-menu -->
                        </li>
                        <li class="navigation__item">
                            <a href="about.html" class="navigation__link">About</a>
                        </li>
                        <li class="navigation__item">
                            <a href="contact.html" class="navigation__link">Contact</a>
                        </li>

                        <li class="navigation__item ms-auto">
                            <a href="#" class="navigation__link">Special Offer</a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Purchase Theme</a>
                        </li>
                    </ul><!-- /.navigation__list -->
                </nav><!-- /.navigation -->
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="slideshow-boxed-right">
            <section class="swiper-container js-swiper-slider slideshow"
                     data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "pagination": {
              "el": ".slideshow-pagination",
              "type": "bullets",
              "clickable": true
            },
            "slidesPerView": 1,
            "effect": "fade",
            "loop": true
          }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="overflow-hidden position-relative h-100">
                            <div class="slideshow-character position-absolute position-right-center mx-3 mx-xl-5">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/slideshow-character1.png" width="350" height="403" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto" style="max-height: 78%; width: auto;">
                            </div>
                            <div class="slideshow-text container px-4 mx-3 mx-lg-4 mx-xl-5 position-absolute start-50 top-50 translate-middle">
                                <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3 theme-color">TOP SMARTPHONES</h6>
                                <h2 class="fs-50 fw-bold mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5 lh-1 text-shadow-white">Heavy on features.<br>Light on price.</h2>
                                <h2 class="fs-3 fw-normal mb-3 animate animate_fade animate_btt animate_delay-5">From $279</h2>
                                <a href="shop1.html" class="btn-link btn-link_lg default-underline fw-medium text-uppercase animate animate_fade animate_btt animate_delay-7">Discover More</a>
                            </div>
                        </div>
                    </div><!-- /.slideshow-item -->
                    <div class="swiper-slide">
                        <div class="overflow-hidden position-relative h-100">
                            <div class="slideshow-character position-absolute position-right-center mx-3 mx-xl-5">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/slideshow-character1.png" width="350" height="403" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto" style="max-height: 78%; width: auto;">
                            </div>
                            <div class="slideshow-text container px-4 mx-3 mx-lg-4 mx-xl-5 position-absolute start-50 top-50 translate-middle">
                                <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3 theme-color">TOP SMARTPHONES</h6>
                                <h2 class="fs-50 fw-bold mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5 lh-1 text-shadow-white">Heavy on features.<br>Light on price.</h2>
                                <h2 class="fs-3 fw-normal mb-3 animate animate_fade animate_btt animate_delay-5">From $279</h2>
                                <a href="shop1.html" class="btn-link btn-link_lg default-underline fw-medium text-uppercase animate animate_fade animate_btt animate_delay-7">Discover More</a>
                            </div>
                        </div>
                    </div><!-- /.slideshow-item -->
                    <div class="swiper-slide">
                        <div class="overflow-hidden position-relative h-100">
                            <div class="slideshow-character position-absolute position-right-center mx-3 mx-xl-5">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/slideshow-character1.png" width="350" height="403" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto" style="max-height: 78%; width: auto;">
                            </div>
                            <div class="slideshow-text container px-4 mx-3 mx-lg-4 mx-xl-5 position-absolute start-50 top-50 translate-middle">
                                <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3 theme-color">TOP SMARTPHONES</h6>
                                <h2 class="fs-50 fw-bold mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5 lh-1 text-shadow-white">Heavy on features.<br>Light on price.</h2>
                                <h2 class="fs-3 fw-normal mb-3 animate animate_fade animate_btt animate_delay-5">From $279</h2>
                                <a href="shop1.html" class="btn-link btn-link_lg default-underline fw-medium text-uppercase animate animate_fade animate_btt animate_delay-7">Discover More</a>
                            </div>
                        </div>
                    </div><!-- /.slideshow-item -->
                    <div class="swiper-slide">
                        <div class="overflow-hidden position-relative h-100">
                            <div class="slideshow-character position-absolute position-right-center mx-3 mx-xl-5">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/slideshow-character1.png" width="350" height="403" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto" style="max-height: 78%; width: auto;">
                            </div>
                            <div class="slideshow-text container px-4 mx-3 mx-lg-4 mx-xl-5 position-absolute start-50 top-50 translate-middle">
                                <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3 theme-color">TOP SMARTPHONES</h6>
                                <h2 class="fs-50 fw-bold mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5 lh-1 text-shadow-white">Heavy on features.<br>Light on price.</h2>
                                <h2 class="fs-3 fw-normal mb-3 animate animate_fade animate_btt animate_delay-5">From $279</h2>
                                <a href="shop1.html" class="btn-link btn-link_lg default-underline fw-medium text-uppercase animate animate_fade animate_btt animate_delay-7">Discover More</a>
                            </div>
                        </div>
                    </div><!-- /.slideshow-item -->
                </div><!-- /.slideshow-wrapper js-swiper-slider -->

                <div class="container">
                    <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 left-50 mb-4"></div>
                    <!-- /.products-pagination -->
                </div><!-- /.container -->
            </section><!-- /.slideshow -->
        </div>
    </div>

    <div class="mb-3 mb-xl-5 pb-3 pt-1 pb-xl-5"></div>

    <section class="products-carousel container">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3 pb-xl-2 mb-xl-4">
            <h2 class="section-title fw-bold">Top Hot Deals</h2>
            <a class="btn-link btn-link_md default-underline text-uppercase fw-medium" href="shop1.html">See All Deals</a>
        </div>
        <div id="product_hot_deals" class="position-relative">
            <div class="swiper-container js-swiper-slider"
                 data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 5,
            "slidesPerGroup": 1,
            "effect": "none",
            "loop": false,
            "navigation": {
              "nextEl": "#product_hot_deals .products-carousel__next",
              "prevEl": "#product_hot_deals .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              },
              "1200": {
                "slidesPerView": 5,
                "slidesPerGroup": 1,
                "spaceBetween": 35,
                "pagination": false
              }
            }
          }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-1.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Fire TV Stick 4K streaming device with Alexa built in</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$35.90</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-2.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Letsfit Smart Watch, Fitness Tracker with Heart Rate</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$79.99</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-3.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Acer Aspire 5 Slim Laptop, 15.6 inches Full HD IPS</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$929.00</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-4.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Apple iPhone 11 Pro Max (64GB, Midnight Green)</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$729.00</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-5.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">DJI Mavic Mini - Drone FlyCam Quadcopter UAV</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$399.00</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-1.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Fire TV Stick 4K streaming device with Alexa built in</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$35.90</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-2.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Letsfit Smart Watch, Fitness Tracker with Heart Rate</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$79.99</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-3.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Acer Aspire 5 Slim Laptop, 15.6 inches Full HD IPS</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$929.00</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-4.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">Apple iPhone 11 Pro Max (64GB, Midnight Green)</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$729.00</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card product-card_style8">
                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                            <a href="product1_simple.html">
                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-5.jpg" width="252" height="229" alt="" class="pc__img">
                            </a>
                        </div><!-- /.pc__img-wrapper -->

                        <div class="pc__info position-relative">
                            <p class="pc__category">Television &amp; Video</p>
                            <h6 class="pc__title"><a href="product1_simple.html">DJI Mavic Mini - Drone FlyCam Quadcopter UAV</a></h6>
                            <div class="product-card__review d-sm-flex align-items-center">
                                <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                </div>
                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                            </div>

                            <div class="product-card__price d-flex mb-2">
                                <span class="money price fs-5">$399.00</span>
                            </div>

                            <div class="product-card__countdown">
                                <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                    <span>Ends in</span>
                                    <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                        <div class="day countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>d&nbsp;</span>
                                        <div class="hour countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="min countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                        <span>:</span>
                                        <div class="sec countdown-unit">
                                            <span class="countdown-num d-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress_uomo progress_uomo_small mb-2">
                                    <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                    <div>Available: <span class="text-primary">6</span></div>
                                    <div>Already Sold: <span class="text-primary">28</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container js-swiper-slider -->

            <div class="products-carousel__prev navigation-sm bg-grey-eeeeee position-absolute top-50 d-flex align-items-center justify-content-center">
                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
            </div><!-- /.products-carousel__prev -->
            <div class="products-carousel__next navigation-sm bg-grey-eeeeee position-absolute top-50 d-flex align-items-center justify-content-center">
                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
            </div><!-- /.products-carousel__next -->
        </div><!-- /.position-relative -->
    </section>

    <div class="mb-3 mb-xl-5 pb-3 pt-1 pb-xl-5"></div>

    <section class="grid-banner container mb-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="grid-banner__item position-relative mb-3 border-radius-4">
                    <img loading="lazy" class="w-100 h-auto" src="https://uomo-html.flexkitux.com/images/home/demo11/banner-1.jpg" width="450" height="300" alt="">
                    <div class="content_abs content_top content_left content_top-md content_left-md pt-2 px-2">
                        <h3 class="fw-bold mb-1">Likelife Audio & Secure Fit</h3>
                        <p class="mb-2 text-secondary">Engineered for your best workout yet</p>
                        <a href="shop1.html" class="btn-link text-uppercase fw-medium">Shop Now</a>
                    </div><!-- /.content_abs content_top content_left content_top-md content_left-md pt-2 px-2 -->
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="grid-banner__item position-relative mb-3 border-radius-4">
                    <img loading="lazy" class="w-100 h-auto" src="https://uomo-html.flexkitux.com/images/home/demo11/banner-2.jpg" width="450" height="300" alt="">
                    <div class="content_abs content_top content_left content_top-md content_left-md pt-2 px-2">
                        <h3 class="fw-bold mb-1">Big Zomm, No Problem</h3>
                        <p class="mb-2 text-secondary">Up close, in  tight, and worry free</p>
                        <a href="shop1.html" class="btn-link text-uppercase fw-medium">Shop Now</a>
                    </div><!-- /.content_abs content_top content_left content_top-md content_left-md pt-2 px-2 -->
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="grid-banner__item position-relative mb-3 border-radius-4">
                    <img loading="lazy" class="w-100 h-auto" src="https://uomo-html.flexkitux.com/images/home/demo11/banner-3.jpg" width="450" height="300" alt="">
                    <div class="content_abs content_top content_left content_top-md content_left-md pt-2 px-2">
                        <h3 class="fw-bold mb-1">Handpicked Electronics</h3>
                        <p class="mb-2 text-secondary">We've done the research so you don't have to</p>
                        <a href="shop1.html" class="btn-link text-uppercase fw-medium">Shop Now</a>
                    </div><!-- /.content_abs content_top content_left content_top-md content_left-md pt-2 px-2 -->
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </section>

    <div class="mb-3 mb-xl-5 pb-3 pt-1 pb-xl-5"></div>

    <section class="category-carousel container">
        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
            <h2 class="section-title fw-bold">Featured Categories</h2>
            <a class="btn-link btn-link_md default-underline text-uppercase fw-medium" href="shop12.html">Shop All Categories</a>
        </div>

        <div id="category_carousel" class="position-relative">
            <div class="swiper-container js-swiper-slider"
                 data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 8,
            "slidesPerGroup": 1,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#category_carousel .slideshow-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 15
              },
              "768": {
                "slidesPerView": 4,
                "slidesPerGroup": 4,
                "spaceBetween": 20
              },
              "992": {
                "slidesPerView": 6,
                "slidesPerGroup": 2,
                "spaceBetween": 30
              },
              "1200": {
                "slidesPerView": 8,
                "slidesPerGroup": 2,
                "spaceBetween": 40
              }
            }
          }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_1.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Cellphones<br>& Tablets</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_2.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">TV /Video</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_3.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Computers<br>& Accessories</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_4.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Video Games</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_5.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Headphones</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_6.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Camera</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_7.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Office<br>Electronics</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" class="w-100 h-auto mb-3" src="https://uomo-html.flexkitux.com/images/home/demo11/category_8.png" width="141" height="141" alt="">
                        <div class="text-center">
                            <a href="#" class="menu-link fw-medium">Smart Home</a>
                        </div>
                    </div>
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container js-swiper-slider -->

            <div class="slideshow-pagination mt-4 d-flex align-items-center justify-content-center"></div>
            <!-- /.products-pagination -->
        </div><!-- /.position-relative -->
    </section>

    <div class="mb-3 mb-xl-5 pb-3 pt-1 pb-xl-5"></div>

    <section class="best-sellers border-top-1">
        <div class="container">
            <div class="mb-3 mb-xl-5 pb-3 pb-xl-5"></div>

            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
                <h2 class="section-title fw-bold">Best Sellers</h2>

                <ul class="nav nav-tabs justify-content-center" id="collections-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore active" id="collections-tab-1-trigger" data-bs-toggle="tab" href="#collections-tab-1" role="tab" aria-controls="collections-tab-1" aria-selected="true">Phones</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="collections-tab-2-trigger" data-bs-toggle="tab" href="#collections-tab-2" role="tab" aria-controls="collections-tab-2" aria-selected="true">TV/Audio</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="collections-tab-3-trigger" data-bs-toggle="tab" href="#collections-tab-3" role="tab" aria-controls="collections-tab-3" aria-selected="true">Cameras</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="collections-tab-4-trigger" data-bs-toggle="tab" href="#collections-tab-4" role="tab" aria-controls="collections-tab-4" aria-selected="true">Video</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content pt-2" id="collections-tab-content">
                <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
                    <div id="product_1" class="position-relative">
                        <div class="swiper-container js-swiper-slider"
                             data-settings='{
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "effect": "none",
                  "loop": false,
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "slidesPerGroup": 1,
                      "spaceBetween": 14
                    },
                    "768": {
                      "slidesPerView": 2,
                      "slidesPerGroup": 1,
                      "spaceBetween": 24
                    },
                    "992": {
                      "slidesPerView": 3,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    },
                    "1200": {
                      "slidesPerView": 4,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    }
                  }
                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.swiper-wrapper -->
                        </div><!-- /.swiper-container js-swiper-slider -->
                    </div><!-- /.position-relative -->
                </div><!-- /.tab-pane fade show-->

                <div class="tab-pane fade show" id="collections-tab-2" role="tabpanel" aria-labelledby="collections-tab-2-trigger">
                    <div id="product_2" class="position-relative">
                        <div class="swiper-container js-swiper-slider"
                             data-settings='{
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "effect": "none",
                  "loop": false,
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "slidesPerGroup": 1,
                      "spaceBetween": 14
                    },
                    "768": {
                      "slidesPerView": 2,
                      "slidesPerGroup": 1,
                      "spaceBetween": 24
                    },
                    "992": {
                      "slidesPerView": 3,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    },
                    "1200": {
                      "slidesPerView": 4,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    }
                  }
                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.swiper-wrapper -->
                        </div><!-- /.swiper-container js-swiper-slider -->
                    </div><!-- /.position-relative -->
                </div>

                <div class="tab-pane fade show" id="collections-tab-3" role="tabpanel" aria-labelledby="collections-tab-3-trigger">
                    <div id="product_3" class="position-relative">
                        <div class="swiper-container js-swiper-slider"
                             data-settings='{
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "effect": "none",
                  "loop": false,
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "slidesPerGroup": 1,
                      "spaceBetween": 14
                    },
                    "768": {
                      "slidesPerView": 2,
                      "slidesPerGroup": 1,
                      "spaceBetween": 24
                    },
                    "992": {
                      "slidesPerView": 3,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    },
                    "1200": {
                      "slidesPerView": 4,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    }
                  }
                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.swiper-wrapper -->
                        </div><!-- /.swiper-container js-swiper-slider -->
                    </div><!-- /.position-relative -->
                </div>

                <div class="tab-pane fade show" id="collections-tab-4" role="tabpanel" aria-labelledby="collections-tab-4-trigger">
                    <div id="product_4" class="position-relative">
                        <div class="swiper-container js-swiper-slider"
                             data-settings='{
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "effect": "none",
                  "loop": false,
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "slidesPerGroup": 1,
                      "spaceBetween": 14
                    },
                    "768": {
                      "slidesPerView": 2,
                      "slidesPerGroup": 1,
                      "spaceBetween": 24
                    },
                    "992": {
                      "slidesPerView": 3,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    },
                    "1200": {
                      "slidesPerView": 4,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    }
                  }
                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-9.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Bluetooth Speakers</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Echo Dot (3rd Gen) - Smart speaker with Alexa - Charcoal</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$39.90</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-6.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Television &amp; Video</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Toshiba TF-43A810U21 43-inch 4K UHD TV - Fire TV Edition</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-7.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Camera &amp; Photo</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">Wyze Cam 1080p HD Indoor Wireless Smart Home Camera with Night Vision</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$72.97</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product-card product-card_style8 hover-container">
                                    <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                        <a href="product1_simple.html">
                                            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-8.jpg" width="328" height="298" alt="" class="pc__img">
                                        </a>
                                    </div><!-- /.pc__img-wrapper -->

                                    <div class="pc__info position-relative">
                                        <p class="pc__category">Audio</p>
                                        <h6 class="pc__title"><a href="product1_simple.html">NUBWO Gaming headsets PS4 N7 Stereo Xbox one Headset Gaming</a></h6>
                                        <div class="product-card__review d-sm-flex align-items-center">
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            </div>
                                            <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                        </div>

                                        <div class="product-card__price d-flex mb-2">
                                            <span class="money price fs-5">$36.40</span>
                                        </div>

                                        <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                            <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                            <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                <span class="d-xxl-block">Quick View</span>
                                                <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                            </button>
                                            <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.swiper-wrapper -->
                        </div><!-- /.swiper-container js-swiper-slider -->
                    </div><!-- /.position-relative -->
                </div>
            </div>
        </div>
    </section>

    <div class="mb-3 mb-xl-5 pb-3 pt-1 pb-xl-5"></div>

    <section class="special-offers border-top-1">
        <div class="container">
            <div class="mb-3 mb-xl-5 pb-3 pb-xl-5"></div>

            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
                <h2 class="section-title fw-bold">Special Offers</h2>

                <ul class="nav nav-tabs justify-content-center mb-2" id="collections-1-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore active" id="collections-tab-5-trigger" data-bs-toggle="tab" href="#collections-tab-5" role="tab" aria-controls="collections-tab-5" aria-selected="true">Top New</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="collections-tab-6-trigger" data-bs-toggle="tab" href="#collections-tab-6" role="tab" aria-controls="collections-tab-6" aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="collections-tab-7-trigger" data-bs-toggle="tab" href="#collections-tab-7" role="tab" aria-controls="collections-tab-7" aria-selected="true">Special</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content pt-2" id="collections-2-tab-content">
                <div class="tab-pane fade show active" id="collections-tab-5" role="tabpanel" aria-labelledby="collections-tab-5-trigger">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-xl-40per">
                            <div class="product-card product-card_style8 hover-container">
                                <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                    <a href="product1_simple.html">
                                        <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-10.jpg" width="544" height="495" alt="" class="pc__img">
                                    </a>
                                </div><!-- /.pc__img-wrapper -->

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Smart Home</p>
                                    <h6 class="pc__title"><a href="product1_simple.html">All-new Echo (4th Gen) | With premium sound, smart home hub, and Alexa | Charcoal</a></h6>
                                    <div class="product-card__review d-sm-flex align-items-center">
                                        <div class="reviews-group d-flex">
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        </div>
                                        <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                    </div>

                                    <div class="product-card__price d-flex mb-2">
                                        <span class="money price fs-5">$99.99</span>
                                    </div>

                                    <div class="product-card__countdown mb-3">
                                        <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                            <span>Ends in</span>
                                            <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                                <div class="day countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>d&nbsp;</span>
                                                <div class="hour countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>:</span>
                                                <div class="min countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>:</span>
                                                <div class="sec countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress progress_uomo progress_uomo_small mb-2">
                                            <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                            <div>Available: <span class="text-primary">6</span></div>
                                            <div>Already Sold: <span class="text-primary">28</span></div>
                                        </div>
                                    </div>

                                    <div class="anim_appear-fade position-relative d-none d-sm-flex align-items-center bg-body">
                                        <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                        <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                            <span class="d-xxl-block">Quick View</span>
                                            <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                        </button>
                                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-60per">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-11.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Sure Petcare -SureFlap - SureFeed - Microchip Pet</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$929.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-12.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">ecobee EB-STATe3L-01 3 Lite Thermostat, Wi-Fi, Works</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$729.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-13.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Anova Culinary AN500-US00 Sous Vide Precision</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$399.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-14.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Sonos One SL - Microphone-Free Smart</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$929.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-11.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Mpow 059 Bluetooth Headphones Over Ear</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$729.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-16.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Apple AirPods with Charging Case (Wired)</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$399.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="collections-tab-6" role="tabpanel" aria-labelledby="collections-tab-6-trigger">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-xl-40per">
                            <div class="product-card product-card_style8 hover-container">
                                <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                    <a href="product1_simple.html">
                                        <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-10.jpg" width="544" height="495" alt="" class="pc__img">
                                    </a>
                                </div><!-- /.pc__img-wrapper -->

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Smart Home</p>
                                    <h6 class="pc__title"><a href="product1_simple.html">All-new Echo (4th Gen) | With premium sound, smart home hub, and Alexa | Charcoal</a></h6>
                                    <div class="product-card__review d-sm-flex align-items-center">
                                        <div class="reviews-group d-flex">
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        </div>
                                        <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                    </div>

                                    <div class="product-card__price d-flex mb-2">
                                        <span class="money price fs-5">$99.99</span>
                                    </div>

                                    <div class="product-card__countdown mb-3">
                                        <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                            <span>Ends in</span>
                                            <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                                <div class="day countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>d&nbsp;</span>
                                                <div class="hour countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>:</span>
                                                <div class="min countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>:</span>
                                                <div class="sec countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress progress_uomo progress_uomo_small mb-2">
                                            <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                            <div>Available: <span class="text-primary">6</span></div>
                                            <div>Already Sold: <span class="text-primary">28</span></div>
                                        </div>
                                    </div>

                                    <div class="anim_appear-fade position-relative d-none d-sm-flex align-items-center bg-body">
                                        <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                        <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                            <span class="d-xxl-block">Quick View</span>
                                            <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                        </button>
                                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-60per">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-12.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">ecobee EB-STATe3L-01 3 Lite Thermostat, Wi-Fi, Works</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$729.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-13.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Anova Culinary AN500-US00 Sous Vide Precision</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$399.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-14.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Sonos One SL - Microphone-Free Smart</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$929.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-11.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Mpow 059 Bluetooth Headphones Over Ear</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$729.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-16.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Apple AirPods with Charging Case (Wired)</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$399.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-11.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Sure Petcare -SureFlap - SureFeed - Microchip Pet</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$929.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="collections-tab-7" role="tabpanel" aria-labelledby="collections-tab-7-trigger">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-xl-40per">
                            <div class="product-card product-card_style8 hover-container">
                                <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                    <a href="product1_simple.html">
                                        <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-10.jpg" width="544" height="495" alt="" class="pc__img">
                                    </a>
                                </div><!-- /.pc__img-wrapper -->

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Smart Home</p>
                                    <h6 class="pc__title"><a href="product1_simple.html">All-new Echo (4th Gen) | With premium sound, smart home hub, and Alexa | Charcoal</a></h6>
                                    <div class="product-card__review d-sm-flex align-items-center">
                                        <div class="reviews-group d-flex">
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        </div>
                                        <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                    </div>

                                    <div class="product-card__price d-flex mb-2">
                                        <span class="money price fs-5">$99.99</span>
                                    </div>

                                    <div class="product-card__countdown mb-3">
                                        <div class="text-secondary d-flex align-items-center gap-1 mb-1">
                                            <span>Ends in</span>
                                            <div class="position-relative d-flex align-items-center text-center color-secondary js-countdown" data-date="18-5-2024" data-time="06:50">
                                                <div class="day countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>d&nbsp;</span>
                                                <div class="hour countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>:</span>
                                                <div class="min countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                                <span>:</span>
                                                <div class="sec countdown-unit">
                                                    <span class="countdown-num d-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress progress_uomo progress_uomo_small mb-2">
                                            <div class="progress-bar theme-bg-color-secondary" role="progressbar" style="width: 40%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-secondary d-flex align-items-center justify-content-between gap-2">
                                            <div>Available: <span class="text-primary">6</span></div>
                                            <div>Already Sold: <span class="text-primary">28</span></div>
                                        </div>
                                    </div>

                                    <div class="anim_appear-fade position-relative d-none d-sm-flex align-items-center bg-body">
                                        <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                        <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                            <span class="d-xxl-block">Quick View</span>
                                            <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                        </button>
                                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-60per">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-13.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Anova Culinary AN500-US00 Sous Vide Precision</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$399.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-14.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Sonos One SL - Microphone-Free Smart</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$929.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-11.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Mpow 059 Bluetooth Headphones Over Ear</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$729.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-16.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Apple AirPods with Charging Case (Wired)</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$399.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-11.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">Sure Petcare -SureFlap - SureFeed - Microchip Pet</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$929.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product-card product-card_style8 hover-container">
                                        <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-12.jpg" width="256" height="233" alt="" class="pc__img">
                                            </a>
                                        </div><!-- /.pc__img-wrapper -->

                                        <div class="pc__info position-relative">
                                            <p class="pc__category">Television &amp; Video</p>
                                            <h6 class="pc__title"><a href="product1_simple.html">ecobee EB-STATe3L-01 3 Lite Thermostat, Wi-Fi, Works</a></h6>
                                            <div class="product-card__review d-sm-flex align-items-center">
                                                <div class="reviews-group d-flex">
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                                </div>
                                                <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                            </div>

                                            <div class="product-card__price d-flex mb-2">
                                                <span class="money price fs-5">$729.00</span>
                                            </div>

                                            <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                                <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                                <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                                    <span class="d-xxl-block">Quick View</span>
                                                    <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                                </button>
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
    </section>

    <div class="mb-3 pb-3 mb-xl-4 pt-1"></div>

    <section class="product-carousel border-top-1">
        <div class="container">
            <div class="mb-3 mb-xl-5 pb-3 pt-1 pb-xl-5"></div>

            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
                <h2 class="section-title fw-bold">Recently Viewed</h2>
                <a class="btn-link btn-link_md default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
            </div>

            <div id="product_carousel_2" class="position-relative">
                <div class="swiper-container js-swiper-slider"
                     data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 8,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": false,
              "pagination": {
                "el": "#product_carousel_2 .slideshow-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "slidesPerGroup": 1,
                  "spaceBetween": 15
                },
                "768": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 1,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 3,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 1,
                  "spaceBetween": 40
                },
                "1500": {
                  "slidesPerView": 5,
                  "slidesPerGroup": 1,
                  "spaceBetween": 40
                }
              }
            }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-17.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Samsung Galaxy Watch 3 Titanium (45mm, GPS)</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex mb-2">
                                    <span class="money price fs-5">$35.90</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-18.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Xbox One S 1TB Console [Previous Generation]</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$79.99</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-19.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Logitech C920x Pro HD Webcam</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$929.00</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-20.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Google S3000BWES Nest Protect Alarm-Smoke</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$729.00</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-21.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">BAZZ BR30RGBTNWWF Smart Wi-Fi LED RGB</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$399.00</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-17.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Samsung Galaxy Watch 3 Titanium (45mm, GPS)</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex mb-2">
                                    <span class="money price fs-5">$35.90</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-17.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Xbox One S 1TB Console [Previous Generation]</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$79.99</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-19.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Logitech C920x Pro HD Webcam</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$929.00</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-20.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">Google S3000BWES Nest Protect Alarm-Smoke</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$729.00</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-card product-card_style8 hover-container border-1">
                            <div class="pc__img-wrapper pc__img-wrapper_wide2">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="https://uomo-html.flexkitux.com/images/home/demo11/product-21.jpg" width="248" height="225" alt="" class="pc__img">
                                </a>
                            </div><!-- /.pc__img-wrapper -->

                            <div class="pc__info position-relative">
                                <p class="pc__category">Television &amp; Video</p>
                                <h6 class="pc__title"><a href="product1_simple.html">BAZZ BR30RGBTNWWF Smart Wi-Fi LED RGB</a></h6>
                                <div class="product-card__review d-sm-flex align-items-center">
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><path d="M4.0172 0.313075L2.91869 2.64013L0.460942 3.0145C0.0201949 3.08129 -0.15644 3.64899 0.163185 3.97415L1.94131 5.78447L1.52075 8.34177C1.44505 8.80402 1.91103 9.15026 2.30131 8.93408L4.5 7.72661L6.69869 8.93408C7.08897 9.14851 7.55495 8.80402 7.47925 8.34177L7.05869 5.78447L8.83682 3.97415C9.15644 3.64899 8.97981 3.08129 8.53906 3.0145L6.08131 2.64013L4.9828 0.313075C4.78598 -0.101718 4.2157 -0.10699 4.0172 0.313075Z"></path></svg>
                                    </div>
                                    <span class="reviews-note text-lowercase text-secondary ms-sm-1">321,975</span>
                                </div>

                                <div class="product-card__price d-flex">
                                    <span class="money price fs-5">$399.00</span>
                                </div>

                                <div class="anim_appear-bottom position-absolute bottom-0 start-0 end-0 d-none d-sm-flex align-items-center bg-body">
                                    <button class="btn-link btn-link_lg me-auto me-xxl-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-auto text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-xxl-block">Quick View</span>
                                        <span class="d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container js-swiper-slider -->

                <div class="slideshow-pagination mt-4 mt-xl-5 d-flex align-items-center justify-content-center"></div>
                <!-- /.products-pagination -->
            </div><!-- /.position-relative -->
        </div>
    </section>

    <div class="mb-3 mb-xl-5 pb-3 pb-xl-5"></div>

    <section class="service-promotion horizontal border-top-1">
        <div class="container">
            <div class="mb-3 pb-3 mb-xl-4 pt-1"></div>

            <div class="row">
                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-center justify-content-md-center gap-3">
                    <div class="service-promotion__icon">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_shipping" /></svg>
                    </div>
                    <div class="service-promotion__content-wrap">
                        <h3 class="service-promotion__title h6 text-uppercase mb-1">Fast And Free Delivery</h3>
                        <p class="service-promotion__content text-secondary mb-0">Free delivery for all orders over $140</p>
                    </div>
                </div><!-- /.col-md-4 text-center-->

                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-center justify-content-md-center gap-3">
                    <div class="service-promotion__icon">
                        <svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_headphone" /></svg>
                    </div>
                    <div class="service-promotion__content-wrap">
                        <h3 class="service-promotion__title h6 text-uppercase mb-1">24/7 Customer Support</h3>
                        <p class="service-promotion__content text-secondary mb-0">Friendly 24/7 customer support</p>
                    </div>
                </div><!-- /.col-md-4 text-center-->

                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-center justify-content-md-center gap-3">
                    <div class="service-promotion__icon">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_shield" /></svg>
                    </div>
                    <div class="service-promotion__content-wrap">
                        <h3 class="service-promotion__title h6 text-uppercase mb-1">Money Back Guarantee</h3>
                        <p class="service-promotion__content text-secondary mb-0">We return money within 30 days</p>
                    </div>
                </div><!-- /.col-md-4 text-center-->
            </div><!-- /.row -->

            <div class="mb-3 pb-3 mb-xl-4 pt-1"></div>
        </div>
    </section><!-- /.service-promotion container -->
</main>
@endsection

