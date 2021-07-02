@extends('frontend.component.app')

@section('slider')
    <section class="breadcrumb-area d-flex align-items-center"
        data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2>Profil Perusahaan</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

@endsection

@section('content')
    <section class="customize-area position-relative pt-115 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        {!! $about->about !!}
                    </div>
                </div>
            </div>
            {{-- <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="customize-img">
                        <img src="{{ asset('frontend') }}/img/images/customize_img.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="customize-wrap">
                        <div class="single-customize-step">
                            <div class="customize-icon">
                                <img src="{{ asset('frontend') }}/img/icon/customize_icon01.png" alt="img">
                            </div>
                            <div class="customize-content">
                                <h4>Reduce search</h4>
                                <p>Market marketplace tha locatio people regular purchase and provisins.</p>
                            </div>
                        </div>
                        <div class="single-customize-step">
                            <div class="customize-icon">
                                <img src="{{ asset('frontend') }}/img/icon/customize_icon02.png" alt="img">
                            </div>
                            <div class="customize-content">
                                <h4>Media Integration</h4>
                                <p>Market marketplace tha locatio people regular purchase and provisins.</p>
                            </div>
                        </div>
                        <div class="single-customize-step">
                            <div class="customize-icon">
                                <img src="{{ asset('frontend') }}/img/icon/customize_icon03.png" alt="img">
                            </div>
                            <div class="customize-content">
                                <h4>Theme plugin</h4>
                                <p>Market marketplace tha locatio people regular purchase and provisins.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="customize-shape"><img src="{{ asset('frontend') }}/img/shape/customize_shape.png" alt=""></div>
    </section>
@endsection
