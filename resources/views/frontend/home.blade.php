@extends('frontend.component.app')

@section('slider')
    <section class="slider-area slider-bg" data-background="{{ asset('frontend') }}/img/slider/slider_bg02.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="slider-content text-center mb-45">
                        <h2>Latu Surya Abadi</h2>
                        <p>Latu Surya Abadi merupakan bengkel otomotif yang bergerak dalam bidang ban dan oli , baik
                            itu perawatan, perbaikan, maupun penjualan. Bengkel Latu Surya Abadi berlokasi di Jl. PB.
                            Sudirman RT02/RW08 Ngawi sejak tahun 2013.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="slider-search-form">
                        <form action="#">
                            <input type="text" placeholder="Search Your Products...">
                            <select name="name" class="selected">
                                <option value="">All Category</option>
                                <option value="">HTML Template</option>
                                <option value="">WP Theme</option>
                                <option value="">Graphic Design</option>
                            </select>
                            <button>Search Now</button>
                        </form>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="slider-dashboard">
                        <div class="dashboard-active">
                            @foreach ($slider as $slide)
                                <div class="single-dashboard">
                                    <a href="{{ route('produk') }}">
                                        <img src="{{ asset('storage/slider/' . $slide->url) }}"
                                            alt="{{ config('app.name', 'Latu Surya Abadi') }}" width="400px">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="features-items-area features-items-p">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h2>Featured Tranding of the week</h2>
                        <p>Market or marketplace is location where people regularly purchase and provisins.</p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="product-thumb-wrap">
                <div class="row text-center justify-content-center">
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb01.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb02.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb03.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb04.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb05.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb06.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb07.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb08.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb09.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb10.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb11.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb12.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb13.jpg" alt="img"></a>
                    </div>
                    <div class="single-product-thumb">
                        <a href="#"><img src="{{ asset('frontend') }}/img/thumb/product_thumb14.jpg" alt="img"></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- features-items-end -->
    <!-- product-area -->
    <section class="product-area product-bg pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="section-title text-center mb-30">
                        <h2>Produk</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="product-menu mb-60">
                        <button class="active" data-filter="*">Semua Kategori</button>
                        @foreach ($kat as $k)
                            <button class="" data-filter=".{{ $k->name }}">{{ $k->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row product-active">
                @foreach ($pro as $p)
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-three {{ $p->category->name }}">
                        <div class="single-product mb-30">
                            <a href="{{ route('produk.detail', $p->id) }}"><img
                                    src="{{ asset('storage/produk/' . $p->image) }}"
                                    alt="{{ config('app.name', 'Latu Surya Abadi') }}" width="300px"></a>
                            <div class="product-overlay">
                                <h5><a href="#">{{ $p->name }}</a></h5>
                                <span>{{ $p->category->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-btn text-center mt-30">
                        <a href="{{ route('produk') }}" class="btn">Semua Produk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-bg-shape">
            <img src="{{ asset('frontend') }}/img/shape/product_shape.png" alt="img">
        </div>
    </section>
    <!-- testimonial-area-end -->
    <!-- services-area -->
    <section class="services-area services-bg pt-115 pb-70"
        data-background="{{ asset('frontend') }}/img/bg/services_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title white-title text-center mb-55">
                        <h2>Service / Layanan</h2>
                        <p>Selain menjual Olie dan Ban Latu Surya Abadi juga melayani service seperti berikut ini :</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($service as $services)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="single-services mb-50">
                            <div class="services-icon mb-30">
                                <img src="{{ asset('storage/service/' . $services->icon) }}" alt="img" width="60px">
                            </div>
                            <div class="services-content">
                                <h4>{{ $services->name }}</h4>
                                {!! $services->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- plugin-area-end -->
    <!-- blog-area -->
    <section class="blog-area blog-bg pt-115 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-55">
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($news as $new)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{ asset('frontend') }}/img/blog/blog_thumb01.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="bc-top-wrap fix mb-25">
                                    <div class="b-post-date">
                                        <h6>19</h6>
                                        <span>Aug, 2019</span>
                                    </div>
                                    <div class="b-top-content fix">
                                        <h5><a href="#">Global Marketplace Market</a></h5>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="far fa-user"></i>Admin</a></li>
                                                <li><i class="far fa-comments"></i>19</li>
                                                <li><i class="far fa-heart"></i>457</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>Simply dummy textht the prihntig and tyesetting industry. Lorem Ipsum has been.</p>
                                <a href="#">Read More <span>+</span></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="blog-content">
                                <div class="b-top-content fix text-center">
                                    <h5>Tidak ada berita</h5>
                                </div>
                            </div>
                        </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
