@extends('master') @section('content')
<section class="slide1 rs1-slick1">
    <div class="wrap-slick1">

        <div class="slick1">
            @foreach($slide as $sl)
            <div class="item-slick1 item1-slick1" style="background-image: url(source/img/img_index/{{ $sl->image}});">

            </div>
            @endforeach
        </div>

    </div>
</section>
<section class="bgwhite p-t-115 p-b-58 ">
    <div class="container ">
        <div class="sec-title p-b-22 ">
            <h3 class="m-text5 t-center ">
                Sản phẩm mới
            </h3>
        </div>
        <!-- Tab01 -->
        <!-- Tab panes -->
        <div class="tab-content p-t-35 ">
            <!-- - -->
            <div class="tab-pane fade show active " id="best-seller " role="tabpanel ">
                <div class="row ">
                    @foreach($new_product as $new) @if($new->gia_km!=0)
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
                                <span class="block2-price m-text6 p-r-5 ">
                                    {{number_format($new->unit_price,0,',','.') }} VND
                                </span>
                                <span class="block2-price m-text6 p-r-5 ">
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
<section class="bgwhite p-t-115 p-b-58 ">
    <div class="container ">
        <div class="sec-title p-b-22 ">
            <h3 class="m-text5 t-center ">
                Sản phẩm nổi bật
            </h3>
        </div>
        <!-- Tab01 -->
        <!-- Tab panes -->
        <div class="tab-content p-t-35 ">
            <!-- - -->
            <div class="tab-pane fade show active " id="best-seller " role="tabpanel ">
                <div class="row ">
                    @foreach($product as $pr) @if($new->gia_km!=0)
                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale"></div>
                    @endif
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50 ">
                        <!-- Block2 -->
                        <div class="block2 ">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="upload/sanpham/{{ $pr->image }}" alt="IMG-PRODUCT ">

                                <div class="block2-overlay trans-0-4 ">
                                    <a href="# " class="block2-btn-addwishlist hov-pointer trans-0-4 ">
                                        <i class="icon-wishlist icon_heart_alt " aria-hidden="true "></i>
                                        <i class="icon-wishlist icon_heart dis-none " aria-hidden="true "></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size2 trans-0-4 ">
                                        <!-- Button -->
                                        <a href="{{ asset('cart/add/'.$pr->id) }}" title="" id="text-decoration">
                                            <button class="flex-c-m size2 bg4 bo-rad-23 hov1 s-text1 trans-0-4" id="themgiohang">
                                                Thêm vào giỏ hàng
                                            </button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20 ">
                                <a href="{{ route('chi-tiet-san-pham',$pr->id) }}" class="block2-name dis-block s-text3 p-b-5 ">
                                    {{ $pr->name }}
                                    </a> @if($pr->gia_km!=0)
                                <span class="block2-oldprice m-text7 p-r-5">
                                    {{number_format($pr->unit_price,0,',','.') }} VND
                                </span>
                                <span class="block2-newprice m-text8 p-r-5">
                                        {{ number_format($pr->gia_km,0,',','.') }} VND
                                </span> @else
                                <span class="block2-price m-text6 p-r-5 ">
                                    {{number_format($pr->unit_price,0,',','.') }} VND
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