<!-- footer -->
<footer>
    <div class="footer-top-wrap black-bg pt-90 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget mb-50 pr-80">
                        <div class="logo mb-25">
                            <a href="#"><img src="{{ asset('frontend') }}/img/logo/logo.png" alt="Logo"
                                    width="250px"></a>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li> <a href="https://www.instagram.com/latusuryaabadi">
                                        <span><i class="fa fa-instagram"></i></span></a>
                                </li>
                                <li> <a href="https://www.facebook.com/Latu-Surya-Abadi-111245510418701/">
                                        <span><i class="fa fa-facebook"></i></span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>PRODUCT List</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('produk') }}">Produk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>&nbsp;</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>Produk</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{ route('produk') }}">Oli</a></li>
                                <li><a href="{{ route('produk') }}">Ban</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>RESOURCES</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Infographics</a></li>
                                <li><a href="#">Reports</a></li>
                                <li><a href="#">Podcast</a></li>
                                <li><a href="#">Benchmark</a></li>
                                <li><a href="#">Update</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>CUSTOMERS</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">LiveChat Benefits</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Use Cases</a></li>
                                <li><a href="#">App</a></li>
                                <li><a href="#">Marketplace</a></li>
                                <li><a href="#">Updates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>SUPPORT center</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Webinars</a></li>
                                <li><a href="#">Experts Marketplace</a></li>
                                <li><a href="#">API & Developers</a></li>
                                <li><a href="#">System Status</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright © 2021 <a href="https://dmptdev.com" target="_blank">Dmptdev</a> All Rights
                            Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="payment-method-img text-right">
                        {{-- <img src="{{ asset('frontend') }}/img/images/card_img.png" alt="img"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->
