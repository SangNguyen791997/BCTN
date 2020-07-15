 @extends('master') @section('content')
<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">



            <div class="slick3">
                <div class="item-slick3">
                    <div class="wrap-pic-w">
                        <img src="upload/sanpham/{{ $sp->image }}" alt="IMG-PRODUCT">
                    </div>
                </div>
            </div>

        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                {{ $sp->name }}
            </h4>

            <span class="m-text17">
                @if($sp->gia_km!=0)
                <span class="block2-price m-text6 p-r-5 ">
                    {{number_format($sp->unit_price,0,',','.') }} VND
                </span>
            <span class="block2-price m-text6 p-r-5 ">
                        {{ number_format($sp->gia_km,0,',','.') }} VND
                </span> @else
            <span class="block2-price m-text6 p-r-5 ">
                    {{number_format($sp->unit_price,0,',','.') }} VND
                </span> @endif
            </span>



            <div class="p-t-33 p-b-60">

                <p style="color:#777;font-size:14px">Vận chuyển: &nbsp; Giao hàng từ thứ 2-> thứ 7</p>
                <p style="color:#777;font-size:14px;margin-bottom: 20px">Phí vận chuyển: &nbsp;30.000đ/toàn quốc</p>



            </div>



            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    THÔNG TIN CHI TIẾT
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        {!!$sp->mota_sp!!}
                    </p>
                </div>
            </div>

            <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    ĐÁNH GIÁ
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        Tìm được {{ count($phanhoi) }} bình luận @if(Auth::check())
                        <form action="" method="post" accept-charset="utf-8">
                            <div class="container">
                                <div class="row">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="id_sp" value="{{ $sp->id }}">
                                    <div class="col-md-1">
                                        @if( Auth::user()->image =="")
                                        <img src="source/images/icons/icon-header-01.png" id="anh_dai_dien" alt=""> @else
                                        <img src="source/img/img_dai_dien/{{ Auth::user()->image }}" id="anh_dai_dien" alt=""> @endif
                                    </div>
                                    <div class="col-md-10" style="padding-top:10px">
                                        <p style="font-weight: bold;line-height: 1.0;"> {{ Auth::user()->users_name }}</p>
                                        <br>
                                        <div class="bo4 of-hidden size15 m-b-20">
                                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="note" placeholder="Thêm bình luận ......">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <p style="margin-left: 15px;color:red">Bạn chưa đăng nhập.Hãy đăng nhập để bình luận. </p>
                        @endif
                        <div class="container">
                            @foreach($taikhoan as $tk) @foreach($phanhoi as $ph) @if($tk->id==$ph->id_tk)
                            <div class="row">
                                <div class="col-md-1">
                                    @if($tk->image=="")
                                    <img src="source/images/icons/icon-header-01.png" id="anh_dai_dien" alt=""> @else
                                    <img src="source/img/img_dai_dien/{{ $tk->image }}" id="anh_dai_dien" alt=""> @endif
                                </div>
                                <div class="col-md-10" style="padding-top:10px">
                                    <p style="font-weight: bold;line-height: 1.0"> {{ $tk->users_name }}</p>
                                    <p style="line-height: 1.0;font-size: 12px;color:#FF9900">
                                        <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($ph->created_at))->diffForHumans() ?>
                                    </p>
                                    <p style="line-height: 1.0"> {{ $ph->note }}</p>
                                </div>
                            </div>
                            @else @endif @endforeach @endforeach
                        </div>
                        {{ $phanhoi->links() }}
                    </p>
                </div>
            </div>
            <br>
            <div class="btn-addcart-product-detail size10 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <a href="{{ asset('cart/add/'.$sp->id) }}" title="" id="text-decoration">
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 s-text1 trans-0-4" id="themgiohang">
                        Thêm vào giỏ hàng
                    </button></a>
            </div>
        </div>
    </div>
</div>


<!-- Relate Product -->
<section class="bgwhite p-t-115 p-b-58 ">
    <div class="container ">
        <div class="sec-title p-b-22 ">
            <h3 class="m-text5 t-center ">
                Sản phẩm tương tự
            </h3>
        </div>
        <!-- Tab01 -->
        <!-- Tab panes -->
        <div class="tab-content p-t-35 ">
            <!-- - -->
            <div class="tab-pane fade show active " id="best-seller " role="tabpanel ">
                <div class="row ">
                    @foreach($product as $new) @if($new->gia_km!=0)
                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale"></div>
                    @endif
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50 ">
                        <!-- Block2 -->
                        <div class="block2 ">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="upload/sanpham/{{ $new->image }}" alt="IMG-PRODUCT ">

                                <div class="block2-overlay trans-0-4 ">
                                    <a href="# " class="block2-btn-addwishlist hov-pointer trans-0-4 ">
                                        <i class="icon-wishlist icon_heart_alt " aria-hidden="true "></i>
                                        <i class="icon-wishlist icon_heart dis-none " aria-hidden="true "></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size2 trans-0-4 ">
                                        <!-- Button -->
                                        <a href="{{ asset('cart/add/'.$new->id) }}" title="" id="text-decoration">
                                            <button class="flex-c-m size2 bg4 bo-rad-23 hov1 s-text1 trans-0-4" id="themgiohang">
                                                Thêm vào giỏ hàng
                                            </button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20 ">
                                <a href="{{ route('chi-tiet-san-pham',$new->id) }}" class="block2-name dis-block s-text3 p-b-5 ">
                                    {{ $new->name }}
                                    </a> @if($new->gia_km!=0)
                                <span class="block2-oldprice m-text7 p-r-5">
                                    {{number_format($new->unit_price,0,',','.') }} VND
                                </span>
                                <span class="block2-newprice m-text8 p-r-5">
                                        {{ number_format($new->gia_km,0,',','.') }} VND
                                </span> @else
                                <span class="block2-price m-text6 p-r-5 ">
                                    {{number_format($new->unit_price,0,',','.') }} VND
                                </span> @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</section>



@endsection()