 @extends('master') @section('content')
 <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(source/img/background.png);">
		<h2 class="l-text2 t-center">
        @foreach($loai as $loai)
        {{ $loai->tenloai }}
         @endforeach    
		</h2>
	</section>

<section class="bgwhite p-t-115 p-b-58 ">

    <div class="container ">
        <div class="sec-title p-b-22 ">
            <h3 class="m-text5 t-center ">
                Danh sách sản phẩm
            </h3>
        </div>
        <!-- Tab01 -->
        <!-- Tab panes -->
        <div class="tab-content p-t-35 ">
            <!-- - -->
            <div class="tab-pane fade show active " id="best-seller " role="tabpanel ">
                <div class="row ">
                    @foreach($sp_theoloai as $sp) @if($sp->gia_km!=0)
                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale"></div>
                    @endif
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50 ">
                        <!-- Block2 -->
                        <div class="block2 ">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="upload/sanpham/{{ $sp->image }}" alt="IMG-PRODUCT ">

                                <div class="block2-overlay trans-0-4 ">
                                    <a href="# " class="block2-btn-addwishlist hov-pointer trans-0-4 ">
                                        <i class="icon-wishlist icon_heart_alt " aria-hidden="true "></i>
                                        <i class="icon-wishlist icon_heart dis-none " aria-hidden="true "></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size2 trans-0-4 ">
                                        <!-- Button -->
                                        <a href="{{ asset('cart/add/'.$sp->id) }}" title="" id="text-decoration">
                                            <button class="flex-c-m size2 bg4 bo-rad-23 hov1 s-text1 trans-0-4" id="themgiohang">
                                                Thêm vào giỏ hàng
                                            </button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20 ">
                                <a href="{{ route('chi-tiet-san-pham',$sp->id) }}" class="block2-name dis-block s-text3 p-b-5 ">
                                    {{ $sp->name }}
                                    </a> @if($sp->gia_km!=0)
                                <span class="block2-oldprice m-text7 p-r-5">
                                    {{number_format($sp->unit_price,0,',','.') }} VND
                                </span>
                                <span class="block2-newprice m-text8 p-r-5">
                                        {{ number_format($sp->gia_km,0,',','.') }} VND
                                </span> @else
                                <span class="block2-price m-text6 p-r-5 ">
                                    {{number_format($sp->unit_price,0,',','.') }} VND
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
                Có thể bạn quan tâm
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

@endsection()