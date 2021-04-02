@extends('layout.master')
@section('title') Thông tin nhà @endsection
@section('body')
    <body>
    <div id="main">
        @include('layout.core.navbar')
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-12 col-xl-10">
                    <div class="page-header bordered mb0">
                        <div class="row">
                            <div class="col-md-8"><a href="{{route('home')}}" class="btn-return" title="Back"><i
                                        class="fa fa-angle-left"></i></a>
                                <h1>{{$house->name}} <span class="label label-bordered text-white"
                                                           style="background-color: #563d7c">
                                        @switch($house->status_id)
                                            @case(1)
                                            <i class="fa fa-check"></i>
                                            @break
                                            @case(2)
                                            <i class="fa fa-flag-checkered"></i>
                                            @break
                                            @case(3)
                                            <i class="fa fa-wrench"></i>
                                            @break
                                        @endswitch
                                        {{ (\Illuminate\Support\Facades\DB::table('house_statuses')->find($house->status_id))->status }}</span>
                                    <small>
                                        <i class="fas fa-map-marked-alt"></i>
                                        {{$house->address}}
                                    </small>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <div class="price">{{ number_format($house->pricePerDay, 0, ',', '.') }}đ / ngày
                                    <small><i class="fa fa-home"></i> {{ (\Illuminate\Support\Facades\DB::table('room_types')->find($house->room_type_id))->typeName }}</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-12 col-xl-10">
                    <div class="item-gallery">
                        <div class="swiper-container gallery-top" data-pswp-uid="1">
                            <div class="swiper-wrapper lazyload">
                                @foreach(\Illuminate\Support\Facades\DB::table('house_images')->where('house_id', $house->id)->get() as $image)
                                    <div class="swiper-slide">
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{ asset('/storage/images/' . $image->src) }}" itemprop="contentUrl" data-size="2000x1414">
                                                <img data-src="{{ asset('/storage/images/' . $image->src) }}" src="{{asset('img/spacer.png')}}" class="img-fluid swiper-lazy" alt="Drawing Room">
                                            </a>
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                @foreach(\Illuminate\Support\Facades\DB::table('house_images')->where('house_id', $house->id)->get() as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('/storage/images/' . $image->src) }}" class="img-fluid" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="item-single">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-md-12 col-lg-12 col-xl-10">
                        <div class="row row justify-content-md-center has-sidebar">
                            <div class="col-md-7 col-lg-8">
                                <div>
                                    <div class="item-description">
                                        <h3 class="headline">Mô tả về ngôi nhà</h3>
                                        {!! $house->desc !!}
                                    </div>

                                    <div class="item-navigation">
                                        <div class="card-header text-center">
                                            <i class="fa fa-map"></i>
                                            <span class="hidden-xs h4"> Vị trí trên bản đồ</span>
                                        </div>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="map">
                                                <iframe id="frameMap" width="600" height="450" style="border:0;" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <div id="sidebar" class="sidebar-right">
                                    <div class="sidebar_inner">
                                        <div id="feature-list" role="tablist">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                               href="#specification"
                                                                               aria-expanded="true"
                                                                               aria-controls="specification"> Thông tin
                                                            <i class="fa fa-caret-down float-right"></i> </a></h4>
                                                </div>
                                                <div id="specification" class="panel-collapse collapse show"
                                                     role="tabpanel">
                                                    <div class="card-body">
                                                        <table class="table v1">
                                                            <tr>
                                                                <td><i class="fa fa-bed"></i> Phòng ngủ</td>
                                                                <td>{{$house->numberBedRoom}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-bath"></i> Phòng tắm</td>
                                                                <td>{{$house->numberBathRoom}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-money"></i> Giá một ngày</td>
                                                                <td>{{ number_format($house->pricePerDay, 0, ',', '.') }}
                                                                    <sup>đ</sup></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow">
                                            <h5 class="subheadline mt-0  mb-0">Chủ nhà</h5>
                                            <div class="media">
                                                <div class="media-left"><a href="#"> <img
                                                            class="media-object rounded-circle"
                                                            src="{{asset('img/demo/profile.jpg')}}" width="64"
                                                            height="64" alt=""> </a></div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a
                                                            href="#">{{ (\Illuminate\Support\Facades\DB::table('users')->find($house->owner_id))->username }}</a>
                                                    </h4>
                                                    <p><a href="tel:{{ (\Illuminate\Support\Facades\DB::table('users')->find($house->owner_id))->phone }}"><i class="fa fa-phone"
                                                                                    aria-hidden="true"></i> {{ (\Illuminate\Support\Facades\DB::table('users')->find($house->owner_id))->phone }}
                                                        </a></p>
                                                    <p><a href="#" class="btn btn-sm btn-light">Xem thông tin</a></p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal"
                                               data-target="#leadform" id="btnModelRequest">Yêu cầu thuê nhà</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lead Form Modal -->
        <div class="modal fade  item-badge-rightm" id="leadform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"><img src="{{asset('img/demo/property/thumb/1.jpg')}}" width="60"
                                                         class="img-rounded mt5" alt=""></div>
                            <div class="media-body">
                                <h4 class="media-heading">Yêu cầu thuê nhà</h4>
                                {{ $house->name }} </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('rentalRequest.create', $house->id) }}" method="post" id="requestRentalHouse">
                            @csrf
                            @error('request')
                            <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="rentalStartDate">Ngày bắt đầu thuê</label>
                                <input type="date" class="form-control" id="rentalStartDate" name="rentalStartDate" value="{{ old('rentalStartDate') }}" required>
                                @error('rentalStartDate')
                                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rentalEndDate">Ngày trả phòng</label>
                                <input type="date" class="form-control" id="rentalEndDate" name="rentalEndDate" value="{{ old('rentalEndDate') }}" required>
                                @error('rentalEndDate')
                                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="totalMoney">Tổng tiền</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="totalMoney" disabled>
                                    <div class="input-group-append">
                                        <div class="input-group-text">đ</div>
                                    </div>
                                </div>
                                {{--<input type="tel" class="form-control" placeholder="" disabled>--}}
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Hủy bỏ</button>
                        <button type="submit" form="requestRentalHouse" class="btn btn-primary">Gửi yêu cầu</button>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        // Photoswipe

        var initPhotoSwipeFromDOM = function (gallerySelector) {
            var parseThumbnailElements = function (el) {
                console.log(el);
                var thumbElements = $(el).closest(main_gallery).find('figure'),
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }

                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };


                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function (e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function (el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });

                if (!clickedListItem) {
                    return;
                }
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = $(clickedListItem).closest(main_gallery).find('figure'),
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }

                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }
                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };

            var openPhotoSwipe = function (index, galleryElement, disableAnimation) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {
                    history: false,
                    bgOpacity: 0.8,
                    loop: false,
                    barsSize: {
                        top: 0,
                        bottom: 'auto'
                    },

                    // define gallery index (for URL)
                    galleryUID: $(galleryElement).closest(main_gallery).attr('data-pswp-uid'),

                    getThumbBoundsFn: function (index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = document.querySelectorAll(main_gallery + ' img')[index],
                            //var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();

                        return {
                            x: rect.left,
                            y: rect.top + pageYScroll,
                            w: rect.width
                        };
                    }

                };

                options.index = parseInt(index, 10);

                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
                gallery.shout('helloWorld', 'John' /* you may pass more arguments */);


                var totalItems = gallery.options.getNumItemsFn();

                function syncPhotoSwipeWithOwl() {
                    var currentIndex = gallery.getCurrentIndex();
                    galleryTop.slideTo(currentIndex);
                    if (currentIndex == (totalItems - 1)) {
                        $('.pswp__button--arrow--right').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--right').removeAttr('disabled');
                    }
                    if (currentIndex == 0) {
                        $('.pswp__button--arrow--left').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--left').removeAttr('disabled');
                    }
                };
                gallery.listen('afterChange', function () {
                    syncPhotoSwipeWithOwl();
                });
                syncPhotoSwipeWithOwl();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }
        };
        var main_gallery = '.gallery-top';
        var galleryTop = new Swiper(main_gallery, {
            spaceBetween: 10,
            lazy: {
                loadPrevNext: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
            , on: {
                init: function () {
                    initPhotoSwipeFromDOM(main_gallery);
                },
            }
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 5,
            touchRatio: 0.2,
            slideToClickedSlide: true,
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    </script>
    <script>
        const housePrice = "{{ $house->pricePerDay }}";
        const rentalStartDate = $("#rentalStartDate");
        const rentalEndDate = $("#rentalEndDate");
        const totalMoney = $("#totalMoney");

        $(document).ready(function () {
            rentalStartDate.on('input', function () {
                updateMoney();
            });

            rentalEndDate.on('input', function () {
                updateMoney();
            });

            @if ($errors->any())
            $("#btnModelRequest").click();
            updateMoney();
            @endif

            let locationMap = "https://www.google.com/maps/embed/v1/place?key=AIzaSyAGSXn0gJgwhUr3jiqVhlHfe3MrMSx20HE&q=" + encodeURIComponent('{{ $house->address }}') + "&zoom=15&maptype=satellite&language=vi";
            $("#frameMap").attr("src", locationMap);
        });

        function createRequestRentalHouse() {

        }

        function updateMoney() {
            if (rentalStartDate.val() !== '' && rentalEndDate.val() !== ''){
                totalMoney.val(' ');
                const date1 = new Date(rentalStartDate.val());
                const date2 = new Date(rentalEndDate.val());
                const diffTime = date2 - date1;
                if (diffTime > 0){
                    const diffDays = Math.ceil((date2 - date1) / (1000 * 60 * 60 * 24));
                    totalMoney.val(diffDays * housePrice);
                } else if (diffTime === 0) {
                    totalMoney.val(0);
                } else {
                    totalMoney.val('Có gì đó sai sai về số ngày thuê nhà !?');
                }
                /*const diffTime = Math.abs(date2 - date1);
                const diffDays = Math.ceil((date2 - date1) / (1000 * 60 * 60 * 24));
                $("#totalMoney").val(diffDays * housePrice);*/
            }
        }

    </script>
    </body>
@endsection
