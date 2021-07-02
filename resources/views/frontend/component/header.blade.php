 <!-- header-area -->
 <header>
     <div id="header-sticky" class="menu-area">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="logo">
                         <a href="/"><img src="{{ asset('frontend') }}/img/logo/logo.png" alt="Logo"
                                 width="250px"></a>
                     </div>
                 </div>
                 <div class="col-lg-9 col-md-6 col-sm-6 text-right">
                     <div class="main-menu d-none d-lg-inline-block">
                         <nav id="mobile-menu">
                             <ul>
                                 <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a>
                                 </li>
                                 <li class="{{ request()->is('tentang-kami') ? 'active' : '' }}">
                                     <a href="{{ route('about') }}">Tentang Kami</a>
                                 </li>
                                 <li class="{{ request()->is('produk') ? 'active' : '' }}">
                                     <a href="{{ route('produk') }}">Produk</a>
                                 </li>
                                 <li class="{{ request()->is('berita') ? 'active' : '' }}">
                                     <a href="{{ route('berita') }}">Berita</a>
                                 </li>
                                 <li class="{{ request()->is('kontak') ? 'active' : '' }}">
                                     <a href="{{ route('kontak') }}">Kontak</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="mobile-menu"></div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header-area-end -->
