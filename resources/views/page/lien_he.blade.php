  @extends('master')
@section('content')
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(source/img/background.png);">
		<h2 class="l-text2 t-center">
       Liện hệ 
		</h2>
	</section>
<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6687705522086!2d106.68331225054415!3d10.988354758212061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d0e7b6dccf4b%3A0x9bf6792a12b7bc48!2zQsO5aSBWxINuIELDrG5oLCBQaMO6IEzhu6NpLCBUcC4gVGjhu6cgROG6p3UgTeG7mXQsIELDrG5oIETGsMahbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594136576942!5m2!1svi!2s" width="570" height="470" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
                        Gửi cho chúng tôi tin nhắn của bạn
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Tên đầy đủ">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Số điện thoại">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email liên hệ">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Tin nhắn"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Gửi
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    @endsection()