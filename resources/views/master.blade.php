<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <base href="{{ asset('') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="source/image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="source/css/util.css">
    <link rel="stylesheet" type="text/css" href="source/css/main.css">
    <!--===============================================================================================-->
    </head>

    <body class="animsition">
        
        <div class="container1-page">
            <!--  begin header -->

            @include('header')

            <!--    end header -->
            @yield('content')
            <!-- FOOTER -->
            @include('footer')
        </div>


        <!-- Back to top -->
        <div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
        </div>

        <!-- Container Selection1 -->
        <div id="dropDownSelect1"></div>



        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/select2/select2.min.js"></script>
        <script type="text/javascript">
            $(".selection-1").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="source/js/slick-custom.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/lightbox2/js/lightbox.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="source/vendor/sweetalert/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.block2-btn-addcart').each(function() {
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function() {
                    swal(nameProduct, "Thêm vào giỏ hàng thành công !", "success");
                });
            });

            $('.block2-btn-addwishlist').each(function() {
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function() {
                    swal(nameProduct, "Đã thêm vào danh sách yêu thích !", "success");
                });
            });
        </script>

        <!--===============================================================================================-->
        <script src="source/js/main.js"></script>
    </body>

</html>