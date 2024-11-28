 <footer class="footer">
     <img class="logo-bg logo-footer" src="{{ asset('client/solution/themes/img/symbol.svg') }}" alt="logo" />
     <div class="container">
         <div class="footer-top">
             <div class="row">
                 <div class="col-sm-4 col-md-4">
                     <div class="heading">Về chúng tôi</div>
                     <ul class="footer-menu">
                         <li class="menu-item">
                             <a>{{ $config->store_name }}</a>
                         </li>
                         <li class="menu-item">
                             <a href="tel:02466711411">Hotline : {{ $config->phone }}</a>
                         </li>
                         <li class="menu-item">
                             <a href="mailto:{{ $config->email }}">Email: {{ $config->email }}</a>
                         </li>
                         <li class="menu-item">
                             Địa chỉ: {{  $config->address }}
                         </li>
                     </ul>
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <div class="heading">Sản phẩm</div>
                     <ul class="footer-menu">
                         @forelse ($giaiphapall as $item )
                         <li class="menu-item">
                            <a href="{{ route('page.giaiphap', ['slug'=> $item->slug, 'id'=> $item->id]) }}">{{ $item->title }}</a>
                        </li>
                         @empty

                         @endforelse
                         {{-- <li class="menu-item">
                             <a href="giai-phap-bao-mat-page4.html">Bảo mật</a>
                         </li>
                         <li class="menu-item">
                             <a href="can-bang-tai-he-thong-page5.html">Cân bằng tải hệ thống</a>
                         </li>
                         <li class="menu-item">
                             <a href="chong-ddos.html">Chống DDOS</a>
                         </li>
                         <li class="menu-item">
                             <a href="tu-van-thiet-ke-he-thong-mang-page6.html">Thiết kế hệ thống mạng</a>
                         </li> --}}
                     </ul>
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <div class="heading">Dịch vụ</div>
                     <ul class="footer-menu">
                         <li class="menu-item">
                             <a href="{{ route('page.cloud-backup') }}">CLOUD VPS</a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('page.domain-registration') }}">Tên miền</a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('page.server-backup') }}">THUÊ MÁY CHỦ</a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('page.server-location') }}">CHỖ ĐẶT SERVER</a>
                         </li>
                         <li class="menu-item">
                            <a href="{{ route('page.linux-hosting') }}">Hosting</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('page.ssl-comodo') }}">SSL</a>
                        </li>
                     </ul>
                 </div>
                 <!-- <div class="col-sm-6 col-md-3">
                    <a><img class="svg logo-footer" src="{{ asset('client/solution/themesimg/1sonline-logo-light.png') }}" alt="logo"></a>
                    <div class="copyrigh">©2021 Antler - All rights reserved</div>
                    <div class="soc-icons">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div> -->
             </div>
         </div>
     </div>
 </footer>
 <!-- ***** BUTTON GO TOP ***** -->
 <a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
