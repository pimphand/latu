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
                                <li class="breadcrumb-item active" aria-current="page">Produk</li>
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
    <section class="product-area gray-bg pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h3>Ban</h3>
                    </div>
                </div>
            </div>
            <div class="t-product-wrap">
                <div class="row">
                    @foreach ($produk as $item)
                        @if ($item->category_id == 2)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product t-single-product mb-30">
                                    <div class="product-img">
                                        <a href="{{ route('produk.detail', $item->id) }}"><img
                                                src="{{ asset('storage/produk/' . $item->image) }}" alt="img"></a>
                                    </div><br><br><br>
                                    <div class="t-product-overlay">
                                        <h5><a href="{{ route('produk.detail', $item->id) }}">{{ $item->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- Olie --}}
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h3>Olie</h3>
                    </div>
                </div>
            </div>
            <div class="t-product-wrap">
                <div class="row">
                    @foreach ($produk as $item)
                        @if ($item->category_id == 1)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product t-single-product mb-30">
                                    <div class="product-img">
                                        <a href="{{ route('produk.detail', $item->id) }}"><img
                                                src="{{ asset('storage/produk/' . $item->image) }}" alt="img"></a>
                                    </div><br><br><br>
                                    <div class="t-product-overlay">
                                        <h5><a href="{{ route('produk.detail', $item->id) }}">{{ $item->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
