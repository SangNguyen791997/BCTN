 @extends('master') @section('content')
 <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(source/img/background.png);">
		<h2 class="l-text2 t-center">
        Đăng nhập  
		</h2>
	</section>
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if(Session::has('flag'))
                <div class="alert alert-{{ Session::get('flag') }}">
                    {{ Session::get('tb') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 p-b-30">
            </div>

            <div class="col-md-6 p-b-30">
                <form action="{{ route('dang-nhap') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="row">
                        <label style="color:red">* </label> Email
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" required value="trongsangnguyen1997@gmail.com">
                    </div>

                    <div class="row">
                        <label style="color:red">* </label> Mật khẩu
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password" value="platforma1">
                    </div>
                    <div class="form-group login-options">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="checkbox-inline">
                                        <input type="checkbox" class="styled" checked="checked"> Remember
                                    </label>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="login_password_recover.html">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
								Đăng nhập
							</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection()