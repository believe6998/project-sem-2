@extends('client.layout.master')
@section('content')
    <div class="list-pt pt-content"
         style="background:linear-gradient(180deg,#0072ff 0%,#00c6ff 100%) !important">
        <h1 class="list-pt-title font-weight-bold text-center " style="line-height: 140px;font-size: 50px">Danh sách
            huấn luyện
            viên</h1>
        <div class="curved-end"></div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="list-cate">
                    <div><a href="/personal-training" class="pt-cate">Tất cả</a></div>
                    <div><img class="mr-3" width="40px"
                              src="https://img.icons8.com/ios-filled/50/000000/personal-trainer.png"><a href="/category/1"
                                                                                                        class="pt-cate">Huấn Luyện
                            Viên Cá Nhân</a></div>
                    <div><img class="mr-3" width="40px" src="https://img.icons8.com/ios-filled/50/000000/yoga.png"> <a
                            href="/category/2" class="pt-cate">Yoga</a></div>
                    <div><img class="mr-3" width="40px"
                              src="https://img.icons8.com/ios-filled/50/000000/swimming.png"><a href="/category/3" class="pt-cate">Bơi Lội</a>
                    </div>
                    <div><img class="mr-3" width="40px"
                              src="https://img.icons8.com/ios-glyphs/60/000000/boxing-2.png"><a href="/category/4" class="pt-cate">Kick
                            Boxing</a></div>
                    <div><img class="mr-3" width="40px" src="https://img.icons8.com/ios-filled/50/000000/dancing.png"><a
                            href="/category/5" class="pt-cate">Khiêu Vũ</a></div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4 d-flex justify-content-center" style="">
                        <div class="dropdown show">
                            <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d;border:2px solid ;width: 233px">
                                Tất Cả
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/personal-training/?orderBy=rate">Rating</a>
                                <a class="dropdown-item" href="/personal-training/?orderBy=date">New</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    @foreach($list as $item)
                        <div class="grid col-sm-4">
                            <figure class="effect-goliath" data-aos="zoom-in">
                                <img width="100%" height="auto"
                                     src="{{$item->image}}"
                                     alt="img23"/>
                                <figcaption>
                                    <h2 class="text-center">{{$item->name}}<br>
                                        <div class="star-ratings-sprite"><span style="width:{{$item->rating}}"
                                                                               class="star-ratings-sprite-rating"></span>
                                        </div>
                                    </h2>
                                    <p class="pb-3">
                                        {{$item->description}}</p>
                                    <a href="/personal-training/{{$item->id}}">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>

{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-7"></div>--}}
{{--            <div class="col-5 d-flex justify-content-center" style="">--}}
{{--                <div class="dropdown show">--}}
{{--                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d;border:2px solid ;width: 200px">--}}
{{--                        Tất Cả--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="/personal-training/?orderBy=rate">Rating</a>--}}
{{--                        <a class="dropdown-item" href="/personal-training/?orderBy=date">New</a>--}}
{{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="container" style="margin-top: 5%">--}}
{{--        <div class="row">--}}
{{--            <div class="col-3">--}}
{{--                <div class="list-cate">--}}
{{--                    <div><a href="/personal-training" class="pt-cate">Tất cả</a></div>--}}
{{--                    <div><img class="mr-3" width="40px"--}}
{{--                              src="https://img.icons8.com/ios-filled/50/000000/personal-trainer.png"><a--}}
{{--                                href="/category/1"--}}
{{--                                class="pt-cate">Personal--}}
{{--                            Training</a></div>--}}
{{--                    <div><img class="mr-3" width="40px" src="https://img.icons8.com/ios-filled/50/000000/yoga.png"> <a--}}
{{--                                href="/category/2" class="pt-cate">Yoga</a></div>--}}
{{--                    <div><img class="mr-3" width="40px"--}}
{{--                              src="https://img.icons8.com/ios-filled/50/000000/swimming.png"><a href="/category/3"--}}
{{--                                                                                                class="pt-cate">Swimming</a>--}}
{{--                    </div>--}}
{{--                    <div><img class="mr-3" width="40px"--}}
{{--                              src="https://img.icons8.com/ios-glyphs/60/000000/boxing-2.png"><a href="/category/4"--}}
{{--                                                                                                class="pt-cate">Kick--}}
{{--                            Boxing</a></div>--}}
{{--                    <div><img class="mr-3" width="40px" src="https://img.icons8.com/ios-filled/50/000000/dancing.png"><a--}}
{{--                                href="/category/5" class="pt-cate">Dancing</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-9">--}}
{{--                <div class="row">--}}
{{--                    @foreach($list as $item)--}}
{{--                        <div class="grid col-sm-4">--}}
{{--                            <figure class="effect-goliath" data-aos="zoom-in">--}}
{{--                                <img width="100%" height="auto"--}}
{{--                                     src="{{$item->image}}"--}}
{{--                                     alt="img23"/>--}}
{{--                                <figcaption>--}}
{{--                                    <h2 class="text-center">{{$item->name}}<br>--}}
{{--                                        <div class="star-ratings-sprite"><span style="width:{{$item->rating}}"--}}
{{--                                                                               class="star-ratings-sprite-rating"></span>--}}
{{--                                        </div>--}}
{{--                                    </h2>--}}
{{--                                    <p class="pb-3">--}}
{{--                                        {{$item->description}}</p>--}}
{{--                                    <a href="#">View more</a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
