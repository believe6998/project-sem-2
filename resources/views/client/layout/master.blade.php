<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Styles -->
    <title>Document</title>
</head>
<body>
<div class="hh">
    <div class="row  header-style  " id="navbar">
        <div class="col-3 logo-header mt-2 mb-2 ">
            <a href="/"><img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."
                             class=" logo-image"></a>
        </div>
        <div class="col-7  navbar-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar navbar-header-control ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav dropdown link-header  text-title-header ml-5">
                        <a class="navbar-brand nav-link " href="/">Trang chủ </a>
                        <a class="navbar-brand nav-link " href="/personal-training">Tập luyện trực tuyến</a>
                        <a class="navbar-brand nav-link " href="/blog">Blog</a>
                        <a class="navbar-brand nav-link " href="/contact-us">Liên hệ</a>
                        <a class="navbar-brand nav-link " href="/">Điều khoản</a>
                    </div>
                </div>
            </nav>
        </div>
        {{--    <div class="col-1 ml-5 d-flex justify-content-end icon-user-header">--}}
        {{--        <a href="#"></a>--}}
        {{--    </div>--}}

        <div class=" col-2 dropdown icon-user-header ">
            @guest
                <i class="fas fa-user fa dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false"></i>
                <div class="dropdown-menu icon-item" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item " href="{{ route('login') }}">Đăng nhập</a>
                    @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                    @endif
                    @else
                        <div class="nav-item dropdown  logged-cl">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item">Thông tin</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Đăng xuất') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                </div>
            @endguest
        </div>
    </div>
</div>
{{--<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"--}}
{{--     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."--}}
{{--                     class="img-thumbnail logo-login-form-client">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form action="" method="post" class="form-login-client">--}}
{{--                    <h3 class="text-center font-weight-bold ">Đăng Ký</h3>--}}
{{--                    <div class="row mt-5 d-flex justify-content-center">--}}
{{--                        <div class="col-6 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-user"></i>&nbsp;Họ</label>--}}
{{--                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ của bạn"name="firstName">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-user"></i>&nbsp;Tên</label>--}}
{{--                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên của bạn"name="lastName">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row d-flex justify-content-center mt-2">--}}
{{--                        <div class="col-6 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-phone-alt"></i>&nbsp;Số điện thoại</label>--}}
{{--                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Số điện thoại." name="phoneNumber">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-venus-mars"></i>&nbsp;Giới tính</label>--}}
{{--                                <br>--}}

{{--                                    <div class="form-check form-check-inline mt-2">--}}
{{--                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">--}}
{{--                                        <label class="form-check-label" for="inlineRadio1">Nam</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check form-check-inline">--}}
{{--                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="famale">--}}
{{--                                        <label class="form-check-label" for="inlineRadio2">Nữ</label>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="row d-flex justify-content-center mt-2">--}}
{{--                        <div class="col-9 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-envelope" ></i>&nbsp;Email</label>--}}
{{--                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" placeholder="Địa chỉ email.">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                      <div class="col-3"></div>--}}

{{--                    </div>--}}
{{--                    <div class="row d-flex justify-content-center mt-2">--}}
{{--                        <div class="col-6 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-lock"></i>&nbsp;Mật khẩu</label>--}}
{{--                                <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mật khẩu.">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 ">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1" class="font-weight-bold"><i class="fas fa-lock"></i>&nbsp;Nhập lại mật khẩu</label>--}}
{{--                                <input type="text" class="form-control" name="repeatpassword" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập lại mật khẩu.">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12  ">--}}
{{--                            <label class="accept-form-register" for=""><input type="checkbox"> Tôi đã đọc và đồng ý với--}}
{{--                                các <a--}}
{{--                                        href="#">điều khoản sử dụng</a>. </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row d-flex justify-content-center mt-4">--}}
{{--                        <div class="col-4">--}}
{{--                            <button type="button"--}}
{{--                                    class="btn btn-outline-primary btn-lg btn-block text-btn-register-client">Đăng Ký--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="text-center mb-3">--}}
{{--                <div class="footer-login-form-client">--}}
{{--                    <label for="">Bạn đã có tài khoản? &nbsp;<a href="#" data-toggle="modal"--}}
{{--                                                                data-target="#exampleModalCenter">Đăng nhập ngay!</a>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"--}}
{{--     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."--}}
{{--                     class="img-thumbnail logo-login-form-client">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form action="" method="post" class="form-login-client">--}}
{{--                    <h4 class="text-center ">Đăng Nhập</h4>--}}
{{--                    <div class="row d-flex justify-content-center mt-4">--}}
{{--                        <div class="col-10">--}}
{{--                            <div class="input-group mb-3">--}}
{{--                                <div class="input-group-prepend">--}}
{{--                                        <span class="input-group-text" id="basic-addon1"><i--}}
{{--                                                    class="fas fa-at"></i></span>--}}
{{--                                </div>--}}
{{--                                <input type="email" class="form-control" placeholder="Địa chỉ email"--}}
{{--                                       aria-label="Username" aria-describedby="basic-addon1">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row d-flex justify-content-center">--}}
{{--                        <div class="col-10">--}}
{{--                            <div class="input-group mb-3">--}}
{{--                                <div class="input-group-prepend">--}}
{{--                                        <span class="input-group-text" id="basic-addon1"><i--}}
{{--                                                    class="fas fa-lock"></i></span>--}}
{{--                                </div>--}}
{{--                                <input type="password" class="form-control" placeholder="Mật khẩu" aria-label="Username"--}}
{{--                                       aria-describedby="basic-addon1">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6  ">--}}
{{--                            <label class="remember-me-login" for=""><input type="checkbox"> &nbsp;Ghi nhớ</label>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="col forgot-password"><a href="#">Quên mật khẩu?</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row d-flex justify-content-center mt-2">--}}
{{--                        <div class="col-4">--}}
{{--                            <button type="button"--}}
{{--                                    class="btn btn-outline-primary btn-lg btn-block text-btn-login-client">Đăng nhập--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=" mt-4 ">--}}
{{--                        <div class=" login-form-i">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mt-3 text-center text-body-login-form">--}}
{{--                        <label for="">Có thể đăng nhập bằng các trang mạng xã hội </label>--}}
{{--                    </div>--}}
{{--                    <div class="text-center social-btn-login">--}}
{{--                        <a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>--}}
{{--                        <a href="#" class="btn btn-info"><i class="fab fa-twitter"></i>&nbsp; Twitter</a>--}}
{{--                        <a href="#" class="btn btn-danger"><i class="fab fa-google"></i>&nbsp; Google</a>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="text-center mb-3">--}}
{{--                <div class="footer-login-form-client">--}}
{{--                    <label for="">Bạn chưa có tài khoản? &nbsp;<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Đăng ký ngay!</a> </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<i class="fas fa-chevron-up" onclick="topFunction()" id="myBtn" title="Lên đầu trang"></i>
<div>
    @section('content')
    @show()
</div>
<footer class="page-footer font-small unique-color-dark footer-layout" style="margin-top: 30px">


    <!-- Footer Links -->
    <div class="container text-center text-md-left ">

        <!-- Grid row -->
        <div class="row mt-1 text-footer-detail">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-footer-control">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">My pt online</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Chúng tôi luôn mang lại sự hài lòng và những bài hướng dẫn tốt nhất cho các bạn với dịch vụ tập luyện
                    trực tuyến mới mẻ và bổ ích của My PT Online.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-footer-control">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">liên kết</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="/">Trang chủ</a>
                </p>
                <p>
                    <a href="/personal-training">Tập luyện trực tuyến</a>
                </p>
                <p>
                    <a href="/blog">Blog</a>
                </p>
                <p>
                    <a href="/contact-us">Liên hệ</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-footer-control ">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Dịch vụ</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#">Điều khoản</a>
                </p>
                <p>
                    <a href="#">Cookies</a>
                </p>
                <p>
                    <a href="/contact-us">Gửi phản hồi</a>
                </p>
                <p>
                    <a href="/contact-us">Trợ giúp</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-footer-control ">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Liên hệ</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> Số 8 Tôn Thất Thuyết</p>
                <p>
                    <i class="fas fa-envelope mr-3 mt-3"></i> mypt@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3 mt-3"></i> + 0987654321</p>

            </div>
        </div>

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <!-- Footer -->

    <div class="social-icon d-flex justify-content-center">

        <!-- Grid row-->
        <div class="row ">

            <!-- Grid column -->
            <div class="col-md-12  py-5 social-icon-layout">
                {{--                <div class="text-center mb-4">Theo dõi chúng tôi trên internet</div>--}}

                <div class=" flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic" href="#">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 "> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic" href="#">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 "> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic" href="#">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 "> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic" href="#">
                        <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 "> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="#">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 "> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic" href="#">
                        <i class="fab fa-pinterest fa-lg white-text "> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>

    <div class="footer-copyright text-center py-3 ">Copyright MY-PT.Online 2018 | Ontworpen door inDSGN <br>
        <a href="#">Algemene voorwaarden</a> | <a href="#">Cookies</a>
    </div>

    </div>

    <!-- Copyright -->

</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/client/layout.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script>
    AOS.init({
        offset: 120,
        delay: 1,

        easing: 'ease',

        duration: 1000,

        disable: false,

        once: true,

        mirror: true, // whether elements should animate out while scrolling past them

        startEvent: 'DOMContentLoaded'
    });
</script>
<script>
    function inViewport($el) {
        var H = $(window).height(),
            r = $el[0].getBoundingClientRect(), t = r.top, b = r.bottom;
        return Math.max(0, t > 0 ? H - t : (b < H ? b : H));
    }

    $(window).on("scroll resize", function () {
        var window_offset = inViewport($('.intro'));
        $(".overlay").height(window_offset);
        $(".caption").css("bottom", (window_offset / 4));
    });

    class ShapeOverlays {
        constructor(elm) {
            this.elm = elm; // Parent SVG element.
            this.path = elm.querySelectorAll('path'); // Path elements in parent SVG. These are the layers of the overlay.
            this.numPoints = 18; // Number of control points for Bezier Curve.
            this.duration = 600; // Animation duration of one path element.
            this.delayPointsArray = []; // Array of control points for Bezier Curve.
            this.delayPointsMax = 300; // Max of delay value in all control points.
            this.delayPerPath = 60; // Delay value per path.
            this.timeStart = Date.now();
            this.isOpened = false;

        }
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() > 15) {
            $('#navbar').addClass('floatingNav');
        } else {
            $('#navbar').removeClass('floatingNav');

        }
    });
    $('#myCarousel').carousel({
        interval: 5000
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
    });
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();


        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers});
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            } else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
    var nextButton = $("#right-btn");
    var backButton = $("#left-btn");
    var con = $("#cont");
    var sliderCont = $("#slider-container");

    var sldElm = $(".item-image-wrapper img");
    var i = 0;
    while (i < sldElm.length) {
        sldElm[i].setAttribute("draggable", false);
        i++
    }

    var mL = 0, maxX = 200, diff = 0;

    function slide() {
        mL -= 100;
        if (mL < -maxX) {
            mL = 0;
        }
        sliderCont.animate({"margin-left": mL + "%"}, 800);
    }

    function slideBack() {
        mL += 100;
        if (mL > 0) {
            mL = -200;
        }
        sliderCont.animate({"margin-left": mL + "%"}, 800);
    }

    nextButton.click(slide);
    backButton.click(slideBack);

    $(document).on("mousedown touchstart", con, function (e) {

        var startX = e.pageX || e.originalEvent.touches[0].pageX;
        diff = 0;

        $(document).on("mousemove touchmove", function (e) {

            var xt = e.pageX || e.originalEvent.touches[0].pageX;
            diff = (xt - startX) * 100 / window.innerWidth;
            if (mL == 0 && diff > 10) {
                event.preventDefault();
            } else if (mL == -maxX && diff < -10) {
                event.preventDefault();
            } else {
                sliderCont.css("margin-left", mL + diff + "%");
            }
        });
    });

    $(document).on("mouseup touchend", function (e) {
        $(document).off("mousemove touchmove");
        if (mL == 0 && diff > 4) {
            sliderCont.animate({"margin-left": 0 + "%"}, 100);
        } else if (mL == -maxX && diff < 4) {
            sliderCont.animate({"margin-left": -maxX + "%"}, 100);
        } else {
            if (diff < -10) {
                slide();
            } else if (diff > 10) {
                slideBack();
            } else {
                sliderCont.animate({"margin-left": mL + "%"}, 300);
            }
        }
    });
    $('.dropdown-menu li').on('click', function () {
        var getValue = $(this).text();
        $('.dropdown-select').text(getValue)
    });

</script>
<script>
    $('.time').click(function () {
        if ($(this).hasClass('btn-secondary')) {
            $(this).removeClass('btn-secondary').addClass('btn-primary');
        } else if ($(this).hasClass('btn-primary')) {
            $(this).removeClass('btn-primary').addClass('btn-secondary');
        }
        $('.time').not(this).addClass('btn-secondary').removeClass('btn-primary');
    })
    ;
</script>
</body>
</html>
