
@extends('client.layout.master')
@section('content')
    <div>
        <div class="container header" style="background-color: white">
            <img src="http://changkangkung.com.vn/assets/upload/changkangkung.com.vn/res/CTKM/ho-ngoc-ha-banner-web.png" class="img-fluid" alt="Responsive image" style="padding-top: 20px">
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
                <div class="col-4" style="padding-top: 40px">
                    <h2 class="text-center" style="color: #0072ff">CÁC ƯU ĐÃI ĐẶC BIÊT</h2>
                    <hr class="coll-divider short-red-line center">
                    <div class="useful-articles">
                        <div class="text-center">
                            <a href="#">
                                <img src="https://banner.vn.fitlg.asia/clickb/static/upload/slide%2012%203.2-1561539158.png" class="img-useful-articles" alt="...">
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#">
                                <img src="https://banner.vn.fitlg.asia/clickb/static/upload/slide%2010%202.2-1561539299.png" class="img-useful-articles" alt="...">
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#">
                                <img src="https://banner.vn.fitlg.asia/clickb/static/upload/slide%2010%201.2=2-1563437850.jpg" class="img-useful-articles" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-2">
            <h4 class="text-center">Có rất nhiều cách để giảm cân</h4>
            <h2 class="text-center">CHỌN MỘT BỘ MÔN YÊU THÍCH VÀ NHẬN NGAY ƯU ĐÃI KHI ĐĂNG KÝ TẬP THỬ</h2>
            <hr class="coll-divider short-red-line center">
        </div>
        <div class="container service">
            <div class="item-more row">
                <div class="col-3">
                    <div class="hovereffect2">
                        <a href="#">
                            <img src="https://lifestyle.cfyc.com.vn/Images_Server/images/frontend/class-slider/1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="hovereffect2">
                        <a href="#">
                            <img src="https://lifestyle.cfyc.com.vn/Images_Server/images/frontend/class-slider/2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="hovereffect2">
                        <a href="#">
                            <img src="https://lifestyle.cfyc.com.vn/Images_Server/images/frontend/class-slider/3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="hovereffect2">
                        <a href="#">
                            <img src="https://lifestyle.cfyc.com.vn/Images_Server/images/frontend/class-slider/4.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection