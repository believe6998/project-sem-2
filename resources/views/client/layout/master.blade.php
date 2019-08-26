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
    <script src="{{asset('js/app.js')}}" ></script>
    <script src="{{asset('js/client/layout.js')}}" ></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row layout-style">
    <div class="col-4 ">
        <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..." class="img-thumbnail logo-image">
    </div>
        <div class="col-6">
            <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar">
{{--                <a class="navbar-brand" href="#">Home</a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="navbar-brand nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="navbar-brand nav-link active" href="#">Online Personal Training <span class="sr-only">(current)</span></a>
                        <a class="navbar-brand nav-link active" href="#">Blog <span class="sr-only">(current)</span></a>
                        <a class="navbar-brand nav-link active" href="#">Contact <span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-2">
            <div class="mt-3 ml-5 dropdown  ">
                <i class="fas fa-user  dropdown-toggle " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ></i>
                <div class="dropdown-menu master-dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Login</a>
                    <a class="dropdown-item" href="#">Register</a>

                </div>
            </div>

        </div>
        <div>
                @section('content')
                @show()
        </div>
        <div class="row footer-control">
            <div class="col-3 footer-detail">
                <h2 class="mt-4">LINKS</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Online Training</a></li>
                    <li><a href="#">Contact-us</a></li>
                </ul>
            </div>
            <div class="col-3 footer-detail">
                <h2 class="mt-4 ">BLOG</h2>
                <ul>
                    <li>is simply dummy</li>
                    <li>is simply dummy</li>
                    <li>is simply dummy</li>
                    <li>is simply dummy</li>
                </ul>
            </div>
            <div class="col-3 footer-detail">
                <h2 class="mt-4">CONTACT</h2>
                <ul>
                    <li><a href="#"><i class="fas fa-paper-plane">&nbsp;  myptonline@gmail.com</i></a></li>
                    <li><a href="#"><i class="fa fa-phone mt-2">&nbsp; 0912345678</i></a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt mt-2">&nbsp; &nbsp;Số 8 Tôn Thất Thuyết</i></a></li>
                </ul>
            </div>
            <div class="col-3  footer-detail">
                <h2 class="mt-4">SERVICES</h2>
                <ul>
                    <li><a href="#">Algemene voorwaarden</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="row copyright-footer">
                <div class="col-4"></div>
                <div class="col-4 copyright-footer-text mt-lg-5 "> <p>Copyright MY-PT.Online 2018  | Ontworpen door inDSGN
                        Algemene voorwaarden | Cookies</p></div>
                <div class="col-4 "></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
