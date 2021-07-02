@extends('frontend.component.app')

@section('slider')
    <section class="breadcrumb-area d-flex align-items-center"
        data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2>Kontak Perusahaan</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kontak</li>
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
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-wrap">
                        <div class="section-title s-section-title white-title contact-title mb-25">
                            {{-- <span>informasi</span> --}}
                            <h2>Informasi Kantor</h2>
                        </div>
                        <div class="contact-info-list">
                            <ul>
                                <li>
                                    <h5>Lokasi Kantor</h5>
                                    <span>
                                        JL. PB Sudirman RT02 RW08 Ngawi, Jawa Timur (Depan Bank BTPN Ngawi)
                                    </span>
                                </li>
                                <li>
                                    <h5>Nomor Kontak</h5>
                                    <span> <i class="fa fa-phone"></i> 0351 – 748665</span>
                                    <span> <i class="fa fa-whatsapp"></i> 085 291 856 990</span>
                                </li>
                                <li>
                                    <h5>Mail</h5>
                                    <span>latusuryaabadi@gmail.com</span>
                                </li>
                                <li>
                                    <h5>Sosial Media</h5>
                                    <a href="https://www.instagram.com/latusuryaabadi">
                                        <span><i class="fa fa-instagram"></i> latusuryaabadi</span></a>
                                    <a href="https://www.facebook.com/Latu-Surya-Abadi-111245510418701/">
                                        <span><i class="fa fa-facebook"></i> Bengkel Latu Surya Ngawi</span>
                                    </a>
                                </li>
                                <li>
                                    <h5>Toko Online</h5>
                                    <a href="https://shopee.co.id/latusuryaabadi">
                                        <span>Shopee: latusuryaabadi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="section-title s-section-title mb-40">
                        <span></span>
                        @if ($message = Session::get('status'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <h2>Kirim Pesan</h2>
                    </div>
                    <div class="contact-form">
                        <form action="{{ route('send.messages') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Masukan Nama" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Masukan Nomor Telepon" required>
                                </div>
                            </div>
                            <textarea name="message" id="message" placeholder="Your Massage"></textarea>
                            <button type="submit" class="btn">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
    <!-- contact-map -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5112091806864!2d111.43596531421682!3d-7.408531675011133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79e7d0956dc5d3%3A0x91098016ec63980!2sLATU%20SURYA%20ABADI!5e0!3m2!1sen!2sid!4v1625024757211!5m2!1sen!2sid"
                        width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
