@extends('layout.master')
@section('title') Trang chủ @endsection
@section('body')
    <body>
    <div id="main">
        @include('layout.core.navbar')
        <div class="home-search">
            <div class="main search-form">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="heading">
                                <h2>Tìm ngôi nhà mới của bạn</h2>
                                <h3>Chúng tôi sẽ giúp bạn tìm một nơi phù hợp với bạn nhất</h3>
                            </div>
                            <form action="#">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg"
                                                       placeholder="Country, State, County, City, Zip, Title, Address, ID.">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <select class="form-control form-control-lg ui-select">
                                                            <option value="">Property Type</option>
                                                            <option value="house">House</option>
                                                            <option value="flat">Flat</option>
                                                            <option value="apartment">Apartment</option>
                                                            <option value="land">Land</option>
                                                            <option value="room">Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                                            Tìm kiếm
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="pt0 pb0">
            <div class="feature-box centered gray">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-12 col-xl-10">
                                <div class="main-title"><span>Featured Properties</span></div>
                                <div class="main-title-description">Thinking abroad? You can now dream and discover
                                    international properties
                                </div>
                                <div class="clearfix"></div>
                                <div class="mt50 mb50">
                                    <div class="featured-gallery v2 item-listing grid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="item item-lg">
                                                    <div class="item-image"
                                                         style="background-image:url('{{asset('/img/demo/property/13.jpg')}}');"><a
                                                            href="property_single.html">
                                                            <div class="item-meta">
                                                                <div class="item-info">
                                                                    <h3 class="item-title">3 bed semi-detached
                                                                        house</h3>
                                                                    <div class="item-location"><i
                                                                            class="fa fa-map-marker"></i> Kirkstone
                                                                        Road, Middlesbrough TS3
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">$420,000 <small>$777 / sq
                                                                        m</small></div>
                                                            </div>
                                                            <div class="item-badges">
                                                                <div class="item-badge-right">For Sale</div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="item item-md">
                                                            <div class="item-image"
                                                                 style="background-image:url('{{asset('/img/demo/property/2.jpg')}}');">
                                                                <a href="property_single.html">
                                                                    <div class="item-meta">
                                                                        <div class="item-info">
                                                                            <h3 class="item-title">3 bed semi-detached
                                                                                house</h3>
                                                                            <div class="item-location"><i
                                                                                    class="fa fa-map-marker"></i>
                                                                                Kirkstone Road, Middlesbrough TS3
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-price">$420,000 <small>$777 /
                                                                                sq m</small></div>
                                                                    </div>
                                                                    <div class="item-badges">
                                                                        <div class="item-badge-right">For Sale</div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="item item-sm">
                                                            <div class="item-image"
                                                                 style="background-image:url('{{asset('/img/demo/property/3.jpg')}}');">
                                                                <a href="property_single.html">
                                                                    <div class="item-meta">
                                                                        <div class="item-info">
                                                                            <h3 class="item-title">3 bed semi-detached
                                                                                house</h3>
                                                                            <div class="item-location"><i
                                                                                    class="fa fa-map-marker"></i>
                                                                                Kirkstone Road, Middlesbrough TS3
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-price">$420,000 <small>$777 /
                                                                                sq m</small></div>
                                                                    </div>
                                                                    <div class="item-badges">
                                                                        <div class="item-badge-right">For Sale</div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="item item-sm">
                                                            <div class="item-image"
                                                                 style="background-image:url('{{asset('/img/demo/property/4.jpg')}}');">
                                                                <a href="property_single.html">
                                                                    <div class="item-meta">
                                                                        <div class="item-info">
                                                                            <h3 class="item-title">3 bed semi-detached
                                                                                house</h3>
                                                                            <div class="item-location"><i
                                                                                    class="fa fa-map-marker"></i>
                                                                                Kirkstone Road, Middlesbrough TS3
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-price">$420,000 <small>$777 /
                                                                                sq m</small></div>
                                                                    </div>
                                                                    <div class="item-badges">
                                                                        <div class="item-badge-right">For Sale</div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><a href="#" class="btn btn-xlg btn-link">Explore More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-box centered">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-12 col-xl-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="content-box">
                                            <div class="image"><img src="img/demo/icons/1.png" width="100" alt=""></div>
                                            <h4>Lifestyle</h4>
                                            <div class="caption">Create your best-ever home with the latest trends in
                                                renovating, decorating and more.
                                            </div>
                                            <div class="button"><a href="#">FIND YOUR INSPIRATION</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="content-box">
                                            <div class="image"><img src="img/demo/icons/2.png" width="100" alt=""></div>
                                            <h4>International</h4>
                                            <div class="caption">Thinking abroad? You can now dream and discover
                                                international properties.
                                            </div>
                                            <div class="button"><a href="#">CHOOSE A COUNTRY</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="content-box">
                                            <div class="image"><img src="img/demo/icons/3.png" width="100" alt=""></div>
                                            <h4>Sell</h4>
                                            <div class="caption">Understand your local market, learn how to get the best
                                                price for your property and find agents in your area.
                                            </div>
                                            <div class="button"><a href="#">EXPLORE NOW</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-box centered gray">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-12 col-xl-10">
                                <div class="item-listing grid">
                                    <div class="main-title"><span>Latest Properties</span></div>
                                    <div class="main-title-description">Check out some of our recent properties.</div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item-image"><a href="property_single.html"><img
                                                            src="img/demo/property/1.jpg" class="img-fluid" alt="">
                                                        <div class="item-meta">
                                                            <div class="item-price">$420,000 <small>$777 / sq m</small>
                                                            </div>
                                                        </div>
                                                        <div class="item-badges">
                                                            <div class="item-badge-left">Sponsored</div>
                                                            <div class="item-badge-right">For Sale</div>
                                                        </div>
                                                    </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="item-info">
                                                    <h3 class="item-title">3 bed semi-detached house</h3>
                                                    <div class="item-location"><i class="fa fa-map-marker"></i>
                                                        Kirkstone Road, Middlesbrough TS3
                                                    </div>
                                                    <div class="item-details-i"><span class="bedrooms"
                                                                                      data-toggle="tooltip"
                                                                                      title="3 Bedrooms">3 <i
                                                                class="fa fa-bed"></i></span> <span class="bathrooms"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="2 Bathrooms">2 <i
                                                                class="fa fa-bath"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item-image"><a href="property_single.html"><img
                                                            src="img/demo/property/2.jpg" class="img-fluid" alt="">
                                                        <div class="item-meta">
                                                            <div class="item-price">$420,000 <small>$777 / sq m</small>
                                                            </div>
                                                        </div>
                                                        <div class="item-badges">
                                                            <div class="item-badge-left">Sponsored</div>
                                                            <div class="item-badge-right">For Sale</div>
                                                        </div>
                                                    </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="item-info">
                                                    <h3 class="item-title">3 bed semi-detached house</h3>
                                                    <div class="item-location"><i class="fa fa-map-marker"></i>
                                                        Kirkstone Road, Middlesbrough TS3
                                                    </div>
                                                    <div class="item-details-i"><span class="bedrooms"
                                                                                      data-toggle="tooltip"
                                                                                      title="3 Bedrooms">3 <i
                                                                class="fa fa-bed"></i></span> <span class="bathrooms"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="2 Bathrooms">2 <i
                                                                class="fa fa-bath"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item-image"><a href="property_single.html"><img
                                                            src="img/demo/property/3.jpg" class="img-fluid" alt="">
                                                        <div class="item-meta">
                                                            <div class="item-price">$420,000 <small>$777 / sq m</small>
                                                            </div>
                                                        </div>
                                                        <div class="item-badges">
                                                            <div class="item-badge-left">Sponsored</div>
                                                            <div class="item-badge-right">For Sale</div>
                                                        </div>
                                                    </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="item-info">
                                                    <h3 class="item-title">3 bed semi-detached house</h3>
                                                    <div class="item-location"><i class="fa fa-map-marker"></i>
                                                        Kirkstone Road, Middlesbrough TS3
                                                    </div>
                                                    <div class="item-details-i"><span class="bedrooms"
                                                                                      data-toggle="tooltip"
                                                                                      title="3 Bedrooms">3 <i
                                                                class="fa fa-bed"></i></span> <span class="bathrooms"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="2 Bathrooms">2 <i
                                                                class="fa fa-bath"></i></span></div>
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
            <div class="feature-box centered">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-12 col-xl-10">
                                <div class="main-title"><span>What our clients say</span></div>
                                <div class="swiper-container testimonials">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="item content-box centered">
                                                <div class="image"><img class="rounded-circle"
                                                                        src="img/demo/profile.jpg" width="180" alt="">
                                                </div>
                                                <h4>Thank you for your quick and clear responses. They are much
                                                    appreciated. This was a site that needed to go up fast and it has –
                                                    customizations and all!</h4>
                                                <div class="caption">The Brown Family</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item content-box centered">
                                                <div class="image"><img class="rounded-circle"
                                                                        src="img/demo/profile2.jpg" width="180" alt="">
                                                    <h4>Thank you for your quick and clear responses. They are much
                                                        appreciated. This was a site that needed to go up fast and it
                                                        has – customizations and all!</h4>
                                                    <div class="caption">The Brown Family</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item content-box centered">
                                                <div class="image"><img class="rounded-circle"
                                                                        src="img/demo/profile3.jpg" width="180" alt="">
                                                    <h4>Thank you for your quick and clear responses. They are much
                                                        appreciated. This was a site that needed to go up fast and it
                                                        has – customizations and all!</h4>
                                                    <div class="caption">The Brown Family</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <script>
                                    var swiper = new Swiper('.swiper-container', {
                                        loop: true,
                                        centeredSlides: true,
                                        autoplay: {
                                            delay: 5000,
                                            disableOnInteraction: false,
                                        },
                                        pagination: {
                                            el: '.swiper-pagination',
                                            clickable: true,
                                        },
                                        navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                        },
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-box gray centered">
                <div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-12 col-xl-10">
                                <div class="main-title"><span>News &amp; Updates </span></div>
                                <div class="main-title-description">Stay up to date with the latest happenings.</div>
                                <div class="item-listing grid mb50">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item-image"><a href="blog_single.html"><img
                                                            src="img/demo/property/7.jpg" class="img-fluid" alt="">
                                                        <div class="item-meta">
                                                            <div class="item-price"><small>26th Oct 17</small></div>
                                                        </div>
                                                        <div class="item-badges">
                                                            <div class="item-badge-right">Legal</div>
                                                        </div>
                                                    </a></div>
                                                <div class="item-info">
                                                    <h3 class="item-title">Allianz invests 100m in Hines European Value
                                                        Fund</h3>
                                                    <div class="item-comments-count"><i class="fa fa-comment-o"></i> 3
                                                    </div>
                                                    <div class="item-author">By John Doe</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item-image"><a href="blog_single.html"><img
                                                            src="img/demo/property/8.jpg" class="img-fluid" alt="">
                                                        <div class="item-meta">
                                                            <div class="item-price"><small>26th Oct 17</small></div>
                                                        </div>
                                                        <div class="item-badges">
                                                            <div class="item-badge-right">Development</div>
                                                        </div>
                                                    </a></div>
                                                <div class="item-info">
                                                    <h3 class="item-title">Skanska signs 43.2m construction deal in
                                                        Sollentuna</h3>
                                                    <div class="item-comments-count"><i class="fa fa-comment-o"></i> 3
                                                    </div>
                                                    <div class="item-author">By John Doe</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item">
                                                <div class="item-image"><a href="blog_single.html"><img
                                                            src="img/demo/property/9.jpg" class="img-fluid" alt="">
                                                        <div class="item-meta">
                                                            <div class="item-price"><small>26th Oct 17</small></div>
                                                        </div>
                                                        <div class="item-badges">
                                                            <div class="item-badge-right category">Finance</div>
                                                        </div>
                                                    </a></div>
                                                <div class="item-info">
                                                    <h3 class="item-title">Baltic Horizon Fund plans next public
                                                        offering of new units</h3>
                                                    <div class="item-comments-count"><i class="fa fa-comment-o"></i> 3
                                                    </div>
                                                    <div class="item-author">By John Doe</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><a href="#" class="btn btn-xlg btn-link">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    </body>
@endsection
