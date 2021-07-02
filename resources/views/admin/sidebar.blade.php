           <!-- Sidebar -->
           <nav class="sidebar" data-trigger="scrollbar">
               <!-- Sidebar Header -->
               <div class="sidebar-header d-none d-lg-block">
                   <!-- Sidebar Toggle Pin Button -->
                   <div class="sidebar-toogle-pin">
                       <i class="icofont-tack-pin"></i>
                   </div>
                   <!-- End Sidebar Toggle Pin Button -->
               </div>
               <!-- End Sidebar Header -->

               <!-- Sidebar Body -->
               <div class="sidebar-body">
                   <!-- Nav -->
                   <ul class="nav">
                       <li class="nav-category">Main</li>
                       <li class="">
                           <a href="{{ route('dashboard') }}">
                               <i class="icofont-pie-chart"></i>
                               <span class="link-title">Dashboard</span>
                           </a>
                       </li>
                       <li class="">
                           <a href="#">
                               <i class="fa fa-product-hunt"></i>
                               <span class="link-title">Produk</span>
                           </a>
                           <ul class="nav sub-menu">
                               <li><a href="{{ route('product.index') }}">List Produk</a></li>
                               <li><a href="{{ route('category-product.index') }}">Kategori</a></li>
                           </ul>
                       </li>
                       <li class="">
                           <a href="{{ route('news.index') }}">
                               <i class="icofont-connection"></i>
                               <span class="link-title">Berita</span>
                           </a>
                       </li>
                       <li class="">
                           <a href="{{ route('inbox.index') }}">
                               <i class="icofont-envelope"></i>
                               <span class="link-title">Pesan</span>
                           </a>
                       </li>
                       <li class="">
                           <a href="#">
                               <i class="fa fa-gear"></i>
                               <span class="link-title">Setting</span>
                           </a>
                           <ul class="nav sub-menu">
                               <li><a href="{{ route('popup.index') }}">Pop Up</a></li>
                               <li><a href="{{ route('slider.index') }}">Slider</a></li>
                               <li><a href="{{ route('about.index') }}">Tentang kami</a></li>
                               <li><a href="{{ route('service.index') }}">Service</a></li>
                           </ul>
                       </li>
                   </ul>
                   <!-- End Nav -->
               </div>
               <!-- End Sidebar Body -->
           </nav>
           <!-- End Sidebar -->
