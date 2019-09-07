@extends('admin.layout.master')
@section('content')
    <div class="container">
        <section class="introduce-1">
            <div class="row">
                {{--<div class="col-lg-6 col-sm-12 introduce-1-img" data-aos="fade-left">
                    <a href="#">
                        <img class="img-responsive"
                             src="https://my-pt.online/wp-content/uploads/2018/01/eff-hiit.png"
                             alt="">
                    </a>
                    <div class="text-img">
                        <a href="#" style="color: black"><h4>Beste Deadilift Variaie</h4></a>
                    </div>
                    <div class="text2-img">
                        <a style="text-decoration: none" href=""><h4 href="#">Chi tiết</h4></a></div>
                    <p>
                        In een studie (Escamilla et.al., 2002) moesten 13 goed getrainde American Football spelers sumo
                        en conventional deadlifts uitvoeren, met en zonder een powerlift riem.

                        Bij deze studie werd door onderzoekers de spieractivatie van de volgende spieren gemeten:
                    </p>
                    <a href="#">
                        <hr class="coll-divider short-bg-line center">
                        <button href="{}" style="width: 50px;border-radius: 3px" class="btn-primary mr-3"> Sửa </button>
                        <button href="{}" style="width: 50px;border-radius: 3px" class="btn-danger"> Xoá </button>
                        <i class="far fa-calendar-alt" style="float: right"> Mei 22, 2018 </i>
                        <hr class="coll-divider short-bg-line center">
                    </a>
                </div>
                <div class="col-lg-6 col-sm-12 introduce-1-img" data-aos="fade-left">
                    <a href="#">
                        <img class="img-responsive"
                             src="https://my-pt.online/wp-content/uploads/2018/01/eff-hiit.png"
                             alt="">
                    </a>
                    <div class="text-img">
                        <a href="#" style="color: black"><h4>Beste Deadilift Variaie</h4></a>
                    </div>
                    <div class="text2-img">
                        <a style="text-decoration: none" href=""><h4 href="#">Chi tiết</h4></a></div>
                    <p>
                        In een studie (Escamilla et.al., 2002) moesten 13 goed getrainde American Football spelers sumo
                        en conventional deadlifts uitvoeren, met en zonder een powerlift riem.

                        Bij deze studie werd door onderzoekers de spieractivatie van de volgende spieren gemeten:
                    </p>
                    <a href="#">
                        <hr class="coll-divider short-bg-line center">
                        <button href="{}" style="width: 50px;border-radius: 3px" class="btn-primary mr-3"> Sửa </button>
                        <button href="{}" style="width: 50px;border-radius: 3px" class="btn-danger"> Xoá </button>
                        <i class="far fa-calendar-alt" style="float: right"> Mei 22, 2018 </i>
                        <hr class="coll-divider short-bg-line center">
                    </a>
                </div>
                <div class="col-lg-6 col-sm-12 introduce-1-img" data-aos="fade-left">
                    <a href="#">
                        <img class="img-responsive"
                             src="https://my-pt.online/wp-content/uploads/2018/01/eff-hiit.png"
                             alt="">
                    </a>
                    <div class="text-img">
                        <a href="#" style="color: black"><h4>Beste Deadilift Variaie</h4></a>
                    </div>
                    <div class="text2-img">
                        <a style="text-decoration: none" href=""><h4 href="#">Chi tiết</h4></a></div>
                    <p>
                        In een studie (Escamilla et.al., 2002) moesten 13 goed getrainde American Football spelers sumo
                        en conventional deadlifts uitvoeren, met en zonder een powerlift riem.

                        Bij deze studie werd door onderzoekers de spieractivatie van de volgende spieren gemeten:
                    </p>
                    <a href="#">
                        <hr class="coll-divider short-bg-line center">
                        <button href="{}" style="width: 50px;border-radius: 3px" class="btn-primary mr-3"> Sửa </button>
                        <button href="{}" style="width: 50px;border-radius: 3px" class="btn-danger"> Xoá </button>
                        <i class="far fa-calendar-alt" style="float: right"> Mei 22, 2018 </i>
                        <hr class="coll-divider short-bg-line center">
                    </a>
                </div>
                <div class="col-lg-6 col-sm-12 introduce-1-img" data-aos="fade-left">
                    <a href="#">
                        <img class="img-responsive"
                             src="https://my-pt.online/wp-content/uploads/2018/01/eff-hiit.png"
                             alt="">
                    </a>
                    <div class="text-img">
                        <a href="#" style="color: black"><h4>Beste Deadilift Variaie</h4></a>
                    </div>
                    <div class="text2-img">
                        <a style="text-decoration: none" href=""><h4 href="#">Chi tiết</h4></a></div>
                    <p>
                        In een studie (Escamilla et.al., 2002) moesten 13 goed getrainde American Football spelers sumo
                        en conventional deadlifts uitvoeren, met en zonder een powerlift riem.

                        Bij deze studie werd door onderzoekers de spieractivatie van de volgende spieren gemeten:
                    </p>
                    <a href="#">
                        <hr class="coll-divider short-bg-line center">
                       <button href="{}" style="width: 50px;border-radius: 3px" class="btn-primary mr-3"> Sửa </button>
                       <button href="{}" style="width: 50px;border-radius: 3px" class="btn-danger"> Xoá </button>
                        <i class="far fa-calendar-alt" style="float: right"> Mei 22, 2018 </i>
                        <hr class="coll-divider short-bg-line center">
                    </a>
                </div>--}}
                @foreach($blog as $blogs)
                    <div class="col-lg-6 col-sm-12 introduce-1-img" data-aos="fade-left">
                        <a href="#">
                            <img class="img-responsive"
                                 src="{{$blogs->thumbnail}}"
                                 alt="">
                        </a>
                        <div class="text-img">
                            <a href="#" style="color: black"><h4>{{$blogs->title}}</h4></a>
                        </div>
                        <div class="text2-img">
                            <a style="text-decoration: none" href="{{route('blog.show',$blogs->id)}}"><h4 href="#">Chi tiết</h4></a></div>
                        <p>
                            {{$blogs->detail}}
                        </p>
                        <div>
                        </div>
                        <hr class="coll-divider short-bg-line center">
                        <a href="{{ route('blog.edit',$blogs->id)}}">
                            <button style="width: 50px;border-radius: 3px" class="btn-primary mr-3"> Sửa</button>
                        </a>
                        <a href="javascript:void(0)">
                            <button id="id-delete-{{$blogs->id}}" style="width: 50px;border-radius: 3px"
                                    class="btn-danger btn-delete"> Xoá
                            </button>
                        </a>
                        <i class="far fa-calendar-alt" style="float: right"> {{$blogs->created_at}}</i>
                        <strong style="float: contour;margin-left: 20%"> {{$blogs->category}} </strong>

                        <hr class="coll-divider short-bg-line center">
                    </div>
                @endforeach
                <div style="width: 20px;height: 50px;margin-left: 70%" class="row">{{$blog->links()}}</div>
            </div>
        </section>
    </div>

@endsection
