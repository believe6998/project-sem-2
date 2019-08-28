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
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/client/layout.js')}}"></script>
    <title>Document</title>
</head>
<body>
<div class="row  header-style mr-5">
    <div class="col-2 logo-header mt-2 mb-2 ">
        <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."
             class="img-thumbnail logo-image">
    </div>
    <div class="col-8  navbar-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav dropdown link-header  text-title-header ml-5">
                    <a class="navbar-brand nav-link " href="#">Trang chủ </a>
                    <a class="navbar-brand nav-link " href="#">Tập luyện trực tuyến</a>
                    <a class="navbar-brand nav-link " href="#">Blog</a>
                    <a class="navbar-brand nav-link " href="#">Liên hệ</a>

                </div>
            </div>
        </nav>
    </div>
    {{--    <div class="col-1 ml-5 d-flex justify-content-end icon-user-header">--}}
    {{--        <a href="#"></a>--}}
    {{--    </div>--}}

    <div class=" col-1 dropdown icon-user-header ">
        <i class="fas fa-user fa dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false"></i>
        <div class="dropdown-menu icon-item" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item " data-toggle="modal" data-target="#exampleModalCenter" href="#">Login</a>
            <a class="dropdown-item" href="#">Register</a>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."
                     class="img-thumbnail logo-login-form-client">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="form-login-client">
                    <h4 class="text-center ">Đăng Nhập</h4>
                    <div class="row d-flex justify-content-center mt-4">
                        <div class="col-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tài khoản"
                                       aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-lock"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Mật khẩu" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6  ">
                            <label class="remember-me-login" for=""><input type="checkbox"> &nbsp;Ghi nhớ</label>
                        </div>
                        <div class="col-6">
                            <div class="col forgot-password"><a href="#">Quên mật khẩu?</a></div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-2">
                        <div class="col-4">
                            <button type="button" class="btn btn-outline-primary btn-sm btn-block">Đăng nhập
                            </button>
                        </div>
                    </div>
                    <div class=" mt-4 ">
                        <div class=" login-form-i">
                        </div>
                    </div>
                    <div class="mt-3 text-center text-body-login-form">
                        <label for="">Có thể đăng nhập bằng các trang mạng xã hội </label>
                    </div>
                    <div class="text-center social-btn-login">
                        <a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-info"><i class="fab fa-twitter"></i>&nbsp; Twitter</a>
                        <a href="#" class="btn btn-danger"><i class="fab fa-google"></i>&nbsp; Google</a>
                    </div>
                </form>
            </div>
            <div class="text-center mb-3">
                <div class="footer-login-form-client">
                    <label for="">Bạn chưa có tài khoản? &nbsp;<a href="#">Đăng ký ngay!</a> </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    @section('content')
    @show()
</div>
<footer class="page-footer font-small unique-color-dark footer-layout">


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
                    <a href="#">Trang chủ</a>
                </p>
                <p>
                    <a href="#">Gói tập</a>
                </p>
                <p>
                    <a href="#">Blog</a>
                </p>
                <p>
                    <a href="#">Liên hệ</a>
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
                    <a href="#">Gửi phản hồi</a>
                </p>
                <p>
                    <a href="#">Trợ giúp</a>
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


</body>
</html>
