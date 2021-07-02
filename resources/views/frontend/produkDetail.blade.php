@extends('frontend.component.app')

@section('slider')
    <section class="breadcrumb-area d-flex align-items-center"
        data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2>Produk</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('produk') }}">Semua Produk</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
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
    <section class="product-details gray-bg pt-120 pb-120">
        <div class="container">
            <div class="t-product-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-wrap">
                            <div class="product-details-thumb">
                                <img src="{{ asset('storage/produk/' . $product->image) }}" alt="img" width="400px">
                            </div>
                            <div class="product-details-tab">
                                <div class="tab-content product-tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="item-details" role="tabpanel"
                                        aria-labelledby="item-details-tab">
                                        <div class="product-details-content">
                                            {!! $product->description !!}
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
@endsection
