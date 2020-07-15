<div class="container-menu-header-v3">
    <div class="wrap_header3 p-t-74">
        <!-- Logo -->
        <a href="{{route('trang-chu')}}" class="logo3">
            <img src="source/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Header Icon -->
        <div class="header-icons3 p-t-38 p-b-60 p-l-8">
            <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                    <li>
                        <img src="source/images/icons/icon-header-01.png" class="header-icon1" alt="ICON"></a>

                        <ul class="sub_menu">
                        @if(Auth::check())
                            <li>
                                <a href="suatk/{{ Auth::user()->id }}">{{ Auth::user()->users_name }}</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">Đăng xuất</a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('dang-nhap') }}">Đăng nhập</a>
                            </li>
                            <li>
                                <a href="{{ route('dang-ky') }}">Đăng ký</a>
                            </li>
                            @endif
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>
            <span class="linedivide1"></span>

            <div class="header-wrapicon2">
                <a href="{{ asset('cart/show') }}" class="header-wrapicon1 dis-block">
                <img src="source/images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
            </a>
                <span class="header-icons-noti">{{ Cart::count() }}</span>

                
                
            </div>
        </div>

        <!-- Menu -->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                    <li>
                        <a href="{{route('trang-chu')}}">Trang chủ</a>

                    </li>

                    <li>

                        <a>Sản phẩm</a>

                        <ul class="sub_menu">
                            @foreach($loai_sp as $loai)
                            <li>
                                <a href="{{ route('loai-san-pham',$loai->id) }}">{{ $loai->tenloai }}</a>
                            </li>
                            @endforeach
                        </ul>

                    </li>
                    <li>
                        <a href="{{ route('tin-tuc') }}">Tin tức</a>
                    </li>

                    <li>
                        <a href="{{ route('getlienhe') }}">Liên hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<form role="search" action="{{ route('search') }}" method="get" accept-charset="utf-8">
<div class="pos-relative bo11 of-hidden">
							<input class="s-text7 size16 p-l-23 p-r-50" type="text" id="ip_seach" name="key" placeholder="  Tìm kiếm... ">

							<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4" type="submit">
								<i class="fs-13 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
             </form>
    <div class="bottombar flex-col-c p-b-65">
        <div class="bottombar-social t-center p-b-8">
            <a href="#" class="topbar-social-item fa fa-facebook"></a>
            <a href="#" class="topbar-social-item fa fa-instagram"></a>
            <!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
        </div>

        <div class="bottombar-child2 p-r-20">
            <div class="topbar-language rs1-select2">
                <select class="selection-1" name="time">
							<option>VIE</option>
							<option>ENG</option>
						</select>
            </div>
        </div>
    </div>
</div>
