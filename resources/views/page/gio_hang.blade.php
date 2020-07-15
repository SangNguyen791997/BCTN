@extends('master')
@section('content')
<script type="text/javascript" >
    function updateCart(qty,rowId){
        console.log(qty);
        console.log(rowId);
        $.get(
            '{{ asset('cart/update')}}',
            {qty:qty,rowId:rowId},
            function(){
                location.reload();
            }
            );
    }
</script>

<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <form>
                @if(Cart::count()>=1)
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">Tên sản phẩm</th>
                            <th class="column-3">Đơn giá</th>
                            <th class="column-3">Số lượng</th>
                            <th class="column-5">Thành tiền</th>
                            <th class="column-5"></th>
                        </tr>
                        @foreach($items as $item)
                        <tr class="table-row">
                            <td class="column-1">

                                <img src="upload/sanpham/{{ $item->options->img }}" alt="" style="height: 120px;width: 120px" alt="IMG-PRODUCT">

                            </td>
                            <td class="column-2">{{ $item->name }}
                                <p style="display:none">{{ $item->id }}</p>
                            </td>
                            <td class="column-3">{{ number_format($item->price,0,',','.') }}</td>
                            <td class="column-3">
                                <input type="number" min="1" max="{{ $item->options->sl }}" value="{{ $item->qty }}" id="soluong" onchange="updateCart(this.value,'{{ $item->rowId }}')">
                            </td>
                            <td class="column-5" style="color: red;">{{ number_format($item->price*$item->qty,0,',','.') }}</td>
                            <td class="column-5"><a href="{{asset('cart/delete/'.$item->rowId)}}"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
            </form>
            </div>


            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">


                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->

                    </div>
                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                    <a href="{{asset('cart/delete/all')}}">
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Xóa hết giỏ hàng
                    </button>
                    </a>
                </div>
            </div>

            <!-- Total -->


        </div>
        <div class="container">
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Thông tin giao hàng
                </h5>

                <!--  -->

                <form action="{{ route('sendmail') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="flex-w flex-sb bo10 p-t-15 p-b-20">

                        @if(Auth::check())
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="email" class="sizefull s-text7 p-l-22 p-r-22 has-error" name="email" placeholder="Email" value="{{ Auth::user()->email }}" /></div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="text" class="sizefull s-text7 p-l-22 p-r-22" name="hoten" placeholder="Họ tên" value="{{ Auth::user()->full_name }}"></div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="text" class="sizefull s-text7 p-l-22 p-r-22" name="sdt" placeholder="Số điện thoại" value="{{ Auth::user()->phone }}"></div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="text" class="sizefull s-text7 p-l-22 p-r-22" name="dc" placeholder="Địa chỉ" value="{{ Auth::user()->address }}"></div> @else
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="email" class="sizefull s-text7 p-l-22 p-r-22 has-error" name="email" placeholder="Email" /></div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="text" class="sizefull s-text7 p-l-22 p-r-22" name="hoten" placeholder="Họ tên:Không để trống"></div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="text" class="sizefull s-text7 p-l-22 p-r-22" name="sdt" placeholder="Số điện thoại"></div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input type="text" class="sizefull s-text7 p-l-22 p-r-22" name="dc" placeholder="Địa chỉ"></div> @endif

                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" rows="3" placeholder="Ghi chú" style="width: 455px;" name="note"></textarea>



                    </div>

                    <!--  -->
                    <div class="flex-w flex-sb-m p-t-26 p-b-30">
                        <span class="m-text22 w-size19 w-full-sm">
						Tổng tiền:
					</span>

                        <span class="m-text21 w-size20 w-full-sm">
                    {{ $total}} VNĐ
					</span>
                    </div>
                    <div class="size15 trans-0-4">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">
                            Thanh toán khi nhận hàng
                        </button>
                    </div>

                </form>
                <br>
                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Thanh toán bằng thẻ ATM
                    </button>
                </div>
            </div>

        </div>
    </div>
    @else
    <img src="source/img/giohangrong.png" class="img-fluid" alt="Responsive image">
    @endif
</section>

    @endsection