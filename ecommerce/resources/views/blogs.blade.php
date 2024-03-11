@extends('base')

@section('content')
<main>
    <section class="blog-page-title mb-4 mb-xl-5">
        <div class="title-bg">
            <img loading="lazy" src="https://uomo-html.flexkitux.com/images/blog_title_bg.jpg" width="1780" height="420" alt="">
        </div>
        <div class="container">
            <h2 class="page-title">The Blog</h2>
            <div class="blog__filter">
                <a href="#" class="menu-link menu-link_us-s">ALL</a>
                <a href="#" class="menu-link menu-link_us-s">COMPANY</a>
                <a href="#" class="menu-link menu-link_us-s menu-link_active">FASHION</a>
                <a href="#" class="menu-link menu-link_us-s">STYLE</a>
                <a href="#" class="menu-link menu-link_us-s">TRENDS</a>
                <a href="#" class="menu-link menu-link_us-s">BEAUTY</a>
            </div>
        </div>
    </section>
    <section class="blog-page container">
        <h2 class="d-none">The Blog</h2>
        <div class="blog-grid row row-cols-1 row-cols-md-2">
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="https://uomo-html.flexkitux.com/images/blog/blog-1.jpg" width="690" height="500" alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Woman with good shoes is never be ugly place</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered, grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="https://uomo-html.flexkitux.com/images/blog/blog-2.jpg" width="690" height="500" alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">5 Tips to Increase Your Online Sales</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered, grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="https://uomo-html.flexkitux.com/images/blog/blog-3.jpg" width="690" height="500" alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Tree earth fowl given moveth deep lesser After</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered, grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="https://uomo-html.flexkitux.com/images/blog/blog-4.jpg" width="690" height="500" alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Given Set was without from god divide rule Hath</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered, grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="mb-1 text-center fw-medium">SHOWING 36 of 497 items</p>
        <div class="progress progress_uomo mb-3 ms-auto me-auto" style="width: 300px;">
            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="text-center">
            <a class="btn-link btn-link_lg text-uppercase fw-medium" href="#">Show More</a>
        </div>
    </section>
</main>

<div class="mb-5 pb-xl-5"></div>
@endsection
