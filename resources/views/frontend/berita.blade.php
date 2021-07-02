@extends('frontend.component.app')

@section('slider')
    <section class="breadcrumb-area d-flex align-items-center"
        data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2>Berita</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
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
    <section class="inner-blog-area gray-light-bg pt-120 pb-120">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-11">
                        @foreach ($news as $item)
                            <div class="inner-single-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="{{ route('berita.detail', $item->id) }}">
                                        <img src="{{ asset('storage/news/' . $item->image) }}"
                                            alt="{{ config('app.name', 'Latu Surya Abadi') }}" width="200px">
                                    </a>
                                </div>
                                <div class="inner-blog-content">
                                    <h5><a href="#">{{ $item->name }}</a></h5>
                                    <div class="blog-meta mb-20">
                                        <ul>
                                            <li><i class="far fa-calendar"></i>{{ $item->created_at->format('d M Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                    <p>{!! Str::limit($item->body, 100) !!}</p>
                                    <a href="{{ route('berita.detail', $item->id) }}">Lanjut Baca<i
                                            class="fas fa-chevron-right"></i></a>
                                    {{-- <div class="inner-blog-share f-right">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <aside class="blog-sidebar">
                            <div class="widget mb-40">
                                <div class="sidebar-rc-post">
                                    <h4 class="blog-sidebar-title">Ban</h4>
                                    <ul>
                                        @foreach ($ban as $b)
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="{{ route('produk.detail', $b->id) }}"><img width="90px"
                                                            src="{{ asset('storage/produk/' . $b->image) }}"
                                                            alt="{{ config('app.name', 'Latu Surya Abadi') }} {{ $b->name }}"></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5><a href="#">{{ $b->name }}</a></h5>
                                                    <ul class="rc-post-meta">
                                                        <li>{{ $b->category->name }}</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-40">
                                <div class="sidebar-cat">
                                    <h4 class="blog-sidebar-title">Oli</h4>
                                    <ul>
                                        @foreach ($oli as $o)
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="{{ route('produk.detail', $o->id) }}"><img width="90px"
                                                            src="{{ asset('storage/produk/' . $o->image) }}"
                                                            alt="{{ config('app.name', 'Latu Surya Abadi') }} {{ $o->name }}"></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5><a href="#">{{ $o->name }}</a></h5>
                                                    {{-- <ul class="rc-post-meta">
                                                        <li>{{ $o->category->name }}</li>
                                                    </ul> --}}
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
