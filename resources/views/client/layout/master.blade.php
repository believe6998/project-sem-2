<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/client/layout.js')}}"></script>
    <title>Document</title>
</head>
<body>
<div class="row layout-header">
    <div class="col-4 ">
        <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."
             class="img-thumbnail logo-image">
    </div>
    <div class="col-6">
        <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Online Personal Training <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#">MYPT Fitness App <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#">Blog <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#">Contact <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-2">

    </div>
</div>
<div>
    @section('content')
    @show()
</div>
<div class="row ">
    <div class="col-12  footer-control">
        {{--                <h5>Copyright © PTOnline</h5>--}}
    </div>
</div>
<div>
    @section('content')
    @show()
</div>
</body>
</html>
