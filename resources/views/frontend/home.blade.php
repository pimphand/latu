@extends('frontend.component.app')
@section('content')
    <div class="revolution-slider-container">
        <div class="revolution-slider" data-version="5.4.8" style="display: none;">
            <ul style="display: none;">
                <!-- SLIDE 1 -->
                @foreach ($slider as $item)

                    <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/slider/' . $item->url) }}" alt="slidebg1" data-bgfit="cover">
                        <!-- LAYERS -->
                        <!-- LAYER 01 -->
                        {{-- <div class="tp-caption"
                            data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                            data-x="center" data-y="97">

                            <div class="hexagon">
                                <div class="sl-small-car-oil"></div>
                            </div>
                        </div>
                        <!-- LAYER 02 -->
                        <div class="tp-caption"
                            data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                            data-x="center" data-y="262">


                            <h2><a target="_top"
                                    href="https://themeforest.net/item/carservice-mechanic-auto-shop-template/12332985?ref=QuanticaLabs"
                                    title="MAKE YOUR CAR LAST LONGER">MAKE YOUR CAR LAST LONGER</a></h2>
                        </div>
                        <!-- LAYER 03 -->
                        <div class="tp-caption"
                            data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                            data-x="center" data-y="343">

                            <p class="description">Free oil change, April 15. Only if you have a "5" on your license
                                plate.</p>
                        </div>
                        <!-- LAYER 04 -->
                        <div class="tp-caption"
                            data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                            data-x="center" data-y="441">

                            <div class="align-center">
                                <a target="_top" class="more simple"
                                    href="https://themeforest.net/cart/add_items?item_ids=12332985&amp;ref=QuanticaLabs"
                                    title="PURCHASE TEMPLATE"><span>PURCHASE TEMPLATE</span></a>
                            </div>
                        </div> --}}
                        <!-- / -->
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--/-->

    <div class="theme-page">
        <div class="clearfix">
            <div class="row page-margin-top-section">
                <div class="row">
                    <h2 class="box-header">Kenapa harus ke bengkel Latu Surya Abadi???</h2>
                    <p class="description align-center">
                        Latu Surya Abadi merupakan bengkel otomotif yang bergerak dalam bidang ban dan oli , baik
                        itu perawatan, perbaikan, maupun penjualan. Bengkel Latu Surya Abadi berlokasi di Jl. PB. Sudirman
                        RT02/RW08 Ngawi sejak tahun 2013.
                        <br>
                    </p>
                    <div class="row page-margin-top">
                        <div class="column column-1-4">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon">
                                        <div class="fa fa-cart-plus">
                                        </div>
                                    </div>
                                    <h4 class="box-header page-margin-top">Banyak Diskon</h4>
                                    {{-- <p>
                                        Untuk penjualan
                                        ban kami menyediakan berbagai macam merk, type, ukuran
                                    </p> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="column column-1-4">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon">
                                        <div class="fa fa-users">
                                        </div>
                                    </div>
                                    <h4 class="box-header page-margin-top">Pelayanan baik</h4>
                                    {{-- <p>
                                        Untuk penjualan
                                        ban kami menyediakan berbagai macam merk, type, ukuran
                                    </p> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="column column-1-4">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon">
                                        <div class="fa fa-cog">
                                        </div>
                                    </div>
                                    <h4 class="box-header page-margin-top">Mekanik berpengalaman</h4>
                                    {{-- <p>
                                        Untuk penjualan
                                        ban kami menyediakan berbagai macam merk, type, ukuran
                                    </p> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="column column-1-4">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon">
                                        <div class="fa fa-line-chart">
                                        </div>
                                    </div>
                                    <h4 class="box-header page-margin-top">Hasil memuaskan</h4>
                                    {{-- <p>
                                        Untuk penjualan
                                        ban kami menyediakan berbagai macam merk, type, ukuran
                                    </p> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row full-width gray flex-box page-margin-top-section">
                <div class="column column-1-2 background-1">
                    <a class="flex-hide" href="service_engine_diagnostics.html" title="Tiling and Painting">
                        <img src="{{ asset('frontend') }}/images/samples/960x680/image_01.jpg" alt="">
                    </a>
                </div>
                <div class="column column-1-2 padding-bottom-66">
                    <div class="row padding-left-right-100">
                        <h2 class="box-header page-margin-top-section">PERAWATAN</h2>
                        <p class="description align-center">Di mana perawatan ban meliputi balancing, spooring,
                            penambalan ban. Perbaikan meliputi perbaikan onderstel yang sudah menjadi bagian dari pekerjaan
                            kami sejak pertama kali berdiri dan dikerjakan oleh mekanik yang berpengalaman. Untuk penjualan
                            ban kami menyediakan berbagai macam merk, type, ukuran.</p>
                        <div class="row margin-top-30">
                            <div class="column column-1-3">
                                <h5>Servis</h5>
                                <ul class="list">
                                    <li class="template-bullet">Ganti Ban</li>
                                    <li class="template-bullet">Ganti Oli</li>
                                    <li class="template-bullet">Spooring</li>
                                    <li class="template-bullet">Balancing</li>
                                    <li class="template-bullet">Bp Ondersteel</li>
                                    <li class="template-bullet">Dll</li>
                                </ul>
                            </div>
                            <div class="column column-1-3">
                                <h5>Penjualan Ban</h5>
                                <ul class="list">
                                    <li class="template-bullet">Bridgestone</li>
                                    <li class="template-bullet">Dunlop</li>
                                    <li class="template-bullet">Hankook</li>
                                    <li class="template-bullet">Achilles</li>
                                    <li class="template-bullet">Gajah Tunggal</li>
                                    <li class="template-bullet">Laufenn</li>
                                </ul>
                            </div>
                            <div class="column column-1-3">
                                <h5>Penjualan Oli</h5>
                                <ul class="list">
                                    <li class="template-bullet">Deltalube</li>
                                    <li class="template-bullet">Eneos</li>
                                    <li class="template-bullet">Mobil 1</li>
                                    <li class="template-bullet">Pertamina</li>
                                    <li class="template-bullet">Shell</li>
                                    <li class="template-bullet">Dll</li>
                                </ul>
                            </div>
                        </div>
                        <div class="align-center margin-top-67 padding-bottom-20">
                            <a class="more simple" href="services.html" title="VIEW FULL LIST"><span>VIEW FULL
                                    LIST</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row full-width page-padding-top-section">
                <div class="row">
                    <h2 class="box-header">AUTO REPAIR SERVICES</h2>
                    <p class="description align-center">We offer a full range of garage services to vehicle owners
                        located in Tucson area.<br>Our professinals know how to handle a wide range of car services.
                    </p>
                    <ul class="services-list clearfix page-margin-top">
                        <li>
                            <a href="service_engine_diagnostics.html" title="Engine Diagnostics">
                                <img src="{{ asset('frontend') }}/images/samples/390x260/image_01.jpg" alt="">
                            </a>
                            <h4 class="box-header"><a href="service_engine_diagnostics.html"
                                    title="Engine Diagnostics">ENGINE DIAGNOSTICS<span
                                        class="template-arrow-menu"></span></a></h4>
                        </li>
                        <li>
                            <a href="service_lube_oil_filters.html" title="Lube, Oil and Filters">
                                <img src="{{ asset('frontend') }}/images/samples/390x260/image_02.jpg" alt="">
                            </a>
                            <h4 class="box-header"><a href="service_lube_oil_filters.html"
                                    title="Lube, Oil and Filters">LUBE, OIL AND FILTERS<span
                                        class="template-arrow-menu"></span></a></h4>
                        </li>
                        <li>
                            <a href="service_belts_hoses.html" title="Belts and Hoses">
                                <img src="{{ asset('frontend') }}/images/samples/390x260/image_03.jpg" alt="">
                            </a>
                            <h4 class="box-header"><a href="service_belts_hoses.html" title="Belts and Hoses">BELTS
                                    AND HOSES<span class="template-arrow-menu"></span></a></h4>
                        </li>
                    </ul>
                    <div class="align-center margin-top-40 padding-bottom-87">
                        <a class="more" href="services.html" title="VIEW ALL SERVICES"><span>VIEW ALL
                                SERVICES</span></a>
                    </div>
                </div>
            </div>
            <div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1">
                <div class="row testimonials-container">
                    <a href="#" class="slider-control left template-arrow-left-1"></a>
                    <ul class="testimonials-list">
                        <li>
                            <div class="hexagon small">
                                <div class="sl-small-pen"></div>
                            </div>
                            <p>"I have taken several of the family cars here for the past several years and without
                                exception the experiences have been outstanding.
                                I would highly recommend this place to any one who wants great service, honest
                                value, and really great people."</p>
                            <h6>ROBERT SMITH</h6>
                            <!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
                        </li>
                        <li>
                            <div class="hexagon small">
                                <div class="sl-small-pen"></div>
                            </div>
                            <p>"I have taken several of the family cars here for the past several years and without
                                exception the experiences have been outstanding.
                                I would highly recommend this place to any one who wants great service, honest
                                value, and really great people."</p>
                            <h6>ROBERT SMITH</h6>
                            <!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
                        </li>
                        <li>
                            <div class="hexagon small">
                                <div class="sl-small-pen"></div>
                            </div>
                            <p>"I have taken several of the family cars here for the past several years and without
                                exception the experiences have been outstanding.
                                I would highly recommend this place to any one who wants great service, honest
                                value, and really great people."</p>
                            <h6>ROBERT SMITH</h6>
                            <!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
                        </li>
                    </ul>
                    <a href="#" class="slider-control right template-arrow-left-1"></a>
                </div>
            </div>

            <div class="row full-width page-margin-top-section">
                <h2 class="box-header">AUTO REPAIR SERVICES</h2>
                <p class="description align-center">We offer a full range of garage services to vehicle owners
                    located in Tucson area.<br>Our professinals know how to handle a wide range of car services.
                </p>
                <ul class="galleries-list clearfix page-margin-top">
                    <li>
                        <a href="javascript;" title="Tire Change">
                            <img src="{{ asset('frontend') }}/images/samples/480x320/image_07.jpg" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">Tire Change</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript;" title="Oil Change">
                            <img src="{{ asset('frontend') }}/images/samples/480x320/image_02.jpg" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">Oil Change</p>
                                    {{-- <a class="more simple" href="gallery_oil_change.html" title="READ MORE">READ
                                        MORE</a> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript;" title="Our Facility">
                            <img src="{{ asset('frontend') }}/images/samples/480x320/image_08.jpg" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">Our Facility</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript;" title="Our Facility">
                            <img src="{{ asset('frontend') }}/images/samples/480x320/image_08.jpg" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">Our Facility</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript;" title="Our Facility">
                            <img src="{{ asset('frontend') }}/images/samples/480x320/image_08.jpg" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">Our Facility</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript;" title="Brakes Repair">
                            <img src="{{ asset('frontend') }}/images/samples/480x320/image_05.jpg" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">Brakes Repair</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="row page-margin-top-section">
                <div class="column column-1-2">
                    <h3 class="box-header">OUR MISSION</h3>
                    <p class="description">We offer a full range of garage services to vehicle owners located in
                        Tucson area. All mechanic services are performed by highly qualified mechanics. We can
                        handle any car problem.</p>
                    <p>We offer a full range of garage services to vehicle owners in Tucson. Our professionals know
                        how to handle a wide range of car services. Whether you drive a passenger car or medium
                        sized truck or SUV, our mechanics strive to <a href="#">ensure that your vehicle</a> will be
                        performing at its best <a href="#">before leaving</a> our car shop.</p>
                    <div class="page-margin-top">
                        <a class="more" href="about.html" title="READ MORE"><span>READ MORE</span></a>
                    </div>
                </div>
                <div class="column column-1-2">
                    <h3 class="box-header">POPULAR QUESTIONS</h3>
                    <ul class="accordion margin-top-40 clearfix">
                        <li>
                            <div id="accordion-using-synthetic">
                                <h4>Should I consider using synthetic motor oil?</h4>
                            </div>
                            <p>Synthetic engine oils are produced through a synthesis process that takes very small
                                molecules and assembles them into larger designer molecules with premium lubricating
                                properties.</p>
                        </li>
                        <li>
                            <div id="accordion-parts-replacements">
                                <h4>What parts should be replaced at what intervals?</h4>
                            </div>
                            <p>Synthetic engine oils are produced through a synthesis process that takes very small
                                molecules and assembles them into larger designer molecules with premium lubricating
                                properties.</p>
                        </li>
                        <li>
                            <div id="accordion-track-routine">
                                <h4>How do I keep track of routine maintenance?</h4>
                            </div>
                            <p>Synthetic engine oils are produced through a synthesis process that takes very small
                                molecules and assembles them into larger designer molecules with premium lubricating
                                properties.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row full-width top-border page-margin-top-section padding-bottom-50">
                <div class="row">
                    {{-- <div class="our-clients-list-container page-margin-top">
                        <ul class="our-clients-list">
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_01.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_02.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_03.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_04.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_05.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_06.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_06.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_05.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_04.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_03.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_02.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_01.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_04.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_03.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_01.png" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend') }}/images/logos/logo_05.png" alt="">
                            </li>
                        </ul>
                        <div class="cs-carousel-pagination"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
