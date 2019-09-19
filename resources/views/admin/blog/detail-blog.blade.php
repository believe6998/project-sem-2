@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-centerr">
                <h3 class="text-center mt-2 font-weight-bold">CHI TIẾT BLOG </h3>
                <small id="emailHelp" class=" form-text text-muted text-center">#id: {{$blog->id}} </small>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class="  text-primary mt-2 "><a href="/admin/blog"><i
                            class="fas fa-bars"></i> Danh sách blog</a></h5>
                <div class="mt-5 mb-5">
{{--                    <img src="http://changkangkung.com.vn/assets/upload/changkangkung.com.vn/res/CTKM/ho-ngoc-ha-banner-web.png"--}}
{{--                         class="img-fluid" alt="Responsive image" style="padding-top: 20px">--}}
                    <div class="item-main-blog row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div style="padding-top: 40px">
                                <h1 style="color: #0072ff">{{$blog->title}}</h1>
                                <p>{{$blog->detail}}</p>
                                <div class="col-sm-12">
                                    {!!$blog->content!!}
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        CKEDITOR.replace('contentcheck');
        $('#ckeditor1').val($('#hidden').val())
    </script>

@endsection
