@extends('admin.layout.master')
@section('content')
    <div class="container header" style="background-color: white">
        <img src="http://changkangkung.com.vn/assets/upload/changkangkung.com.vn/res/CTKM/ho-ngoc-ha-banner-web.png"
             class="img-fluid" alt="Responsive image" style="padding-top: 20px">
        <div class="item-main-blog row">
            <div class="col-8">
                <div style="padding-top: 40px">
                    <h1 style="color: #0072ff">{{$blog->title}}</h1>
                    <p>{{$blog->detail}}</p>
                    <div class="col-sm-12">
                        {!!$blog->content!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection