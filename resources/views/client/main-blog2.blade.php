
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row layout-header">
        <div class="col-4 ">
            <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..." class="img-thumbnail logo-image">
        </div>
        <div class="col-6">
            <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Online Personal Training <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="#">MYPT Fitness App <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="#">Blog <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="#">Contact <span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<img src="https://gymchat.vn/wp-content/uploads/2018/06/MaleandFemaleFitnessPoseBanner.jpg" class="img-fluid" alt="Responsive image">
</body>
</html>
