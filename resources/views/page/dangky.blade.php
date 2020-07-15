 @extends('master') @section('content')
 <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(source/img/background.png);">
		<h2 class="l-text2 t-center">
        Đăng ký 
		</h2>
	</section>
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err) {{ $err }} @endforeach
                </div>
                @endif @if(Session::has('thanh cong'))
                <div class="alert alert-success">
                    {{ Session::get('thanh cong') }}
                </div>
                @endif()
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 p-b-30">

            </div>

            <div class="col-md-6 p-b-30">
                <form action="{{route('dang-ky') }}" method="post" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="row">
                        <label style="color:red">* </label> Tên đầy đủ
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="fullName" placeholder="* Điền đầy đủ" required>
                    </div>
                    <div class="row">
                        <label style="color:red">* </label> Tên tài khoản
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="user_name" placeholder="* Điền đầy đủ.Tên dài không quá 20 ký tự" required>
                    </div>
                    <div class="row">
                        <label style="color:red">* </label> Địa chỉ
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="address" placeholder="* Điền đầy đủ Thôn-Xã-Huyện-Tỉnh" required>
                    </div>
                    <div class="row">
                        <label style="color:red">* </label> Email
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="email" name="email" placeholder="* Điền đầy đủ. Định dạng mail: a@gmail.com"> </div>
                    <div class=" row ">
                        <label style="color:red ">* </label> Số điện thoại
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20 ">
                        <input class="sizefull s-text7 p-l-22 p-r-22 " type="number " name="phone " placeholder="* Điền đầy đủ " required>
                    </div>
                    <div class="row ">
                        <label style="color:red ">* </label> Mật khẩu
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20 ">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="* Mật khẩu dài ít nhất 5 ký tự " required>
                    </div>
                    <div class="row ">
                        <label style="color:red ">* </label> Nhập lại mật khẩu
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20 ">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="re_password" required>
                    </div>
                    <div class="w-size25 ">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4 " type="submit ">
								Đăng ký
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection()