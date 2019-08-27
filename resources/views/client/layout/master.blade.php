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
<div class="container-fluid">
    <div class="row mt-2 header-style">
        <div class="col-2 col-md-3 col-sm-4 logo-header mt-2 ">
            <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."
                 class="img-thumbnail logo-image">
        </div>
        <div class="col-8 col-md-7 col-sm-7 navbar-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav dropdown link-header ml-2">
                        <a class="navbar-brand nav-link " href="#">Home </a>
                        <a class="navbar-brand nav-link " href="#">Online Personal Training </a>
                        <a class="navbar-brand nav-link " href="#">Blog</a>
                        <a class="navbar-brand nav-link " href="#">Contact</a>

                    </div>
                </div>
            </nav>
        </div>
        <div class="col-2 col-md-2 col-sm-1 mt-3 d-flex justify-content-center icon-user-header">
            <a href="#"><i class="fas fa-user fa dropdown-toggle"></i></a>
        </div>


    </div>

<div>
    @section('content')
    @show()
</div>

    <footer class="page-footer font-small unique-color-dark footer-layout">

        <div>
            <div class="container-fluid">

                <!-- Grid row-->
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Company name</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#">Home</a>
                    </p>
                    <p>
                        <a href="#">Pakketten</a>
                    </p>
                    <p>
                        <a href="#">Blog</a>
                    </p>
                    <p>
                        <a href="#">Contact</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Services</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#">Algemene voorwaarden</a>
                    </p>
                    <p>
                        <a href="#">Cookies</a>
                    </p>
                    <p>
                        <a href="#">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#">Help</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

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
                            <div class="col-md-12  py-5 social-icon-layout" >
                                <div class=" flex-center">

                                    <!-- Facebook -->
                                    <a class="fb-ic" href="#">
                                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!-- Twitter -->
                                    <a class="tw-ic"href="#" >
                                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!-- Google +-->
                                    <a class="gplus-ic"href="#">
                                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!--Linkedin -->
                                    <a class="li-ic"href="#">
                                        <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!--Instagram-->
                                    <a class="ins-ic" href="#">
                                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!--Pinterest-->
                                    <a class="pin-ic" href="#">
                                        <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->

                    </div>

            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->

        <!-- Footer -->

    </footer>
    <!-- Footer -->

</div>
</body>
</html>
