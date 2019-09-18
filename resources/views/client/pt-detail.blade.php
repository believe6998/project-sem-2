@extends('client.layout.master')
@section('content')

    <div class="container" style="padding-left: 10% ;margin-top: 80px">
        <div class="row no-gutters">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img width="100%" height="auto"
                             src="{{$personalTraining->image}}" alt="">
                    </div>
                </div><!--inner-->
            </div><!-- col-sm-6  -->
            <div class="col-sm-6 ml-5">
                <div class="star-ratings-sprite-pt-detail"><span style="width:{{$personalTraining->rating}}"
                                                                 class="star-ratings-sprite-rating-pt-detail"></span>
                </div>
                <div class="text-secondary">(1 đánh giá)</div>
                <div class="pt-2"><h1>{{$personalTraining->name}}</h1></div>
                <div class="text-secondary"><h5
                        class="category-name">@foreach($list as $item){{$item->name}}, @endforeach</h5>
                </div>
                <div class="row">
                    <div class="col-sm-7 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="dropdown w-25">
                                        <button id="dLabel" class="dropdown-select font-weight-bolder" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Thời Gian
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu w-25" aria-labelledby="dLabel">
                                            <li>1 Ngày</li>
                                            <li>1 Tuần</li>
                                            <li>1 Tháng</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 ml-3 row">
                    <div class="row list-time" style="width: 100%">
                        @foreach($times as $time)
                        <div class="col-6 time btn btn-secondary">{{$time->time}}</div>
                        @endforeach
                    </div>
                </div>
                <div style="margin-left: 0.5%;margin-top: 9%">
                    <button class="btn btn-outline-primary w-100" style="font-size: 20px">
                        ĐẶT LỊCH
                    </button>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->

    <div class="accordion container" id="accordionExample" style="margin-top: 10%">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" style="text-decoration: none;font-size: 22px;line-height: 26px;"
                            type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                        Giới thiệu
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                   <p><b>Tiểu sử:</b> {{$personalTraining->description}}</p>
                   <p><b>Trình độ chyên môn:</b> {{$personalTraining->qualification}}</p>
                   <p><b>Kinh nghiệm:</b> {{$personalTraining->experience}}</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed"
                            style="text-decoration: none;font-size: 22px;line-height: 26px;" type="button"
                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                        Đánh giá (1)
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <img width="100%" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                        </div>
                        <div class="col-sm-11">
                            <div class="row">
                                <h5 style="text-align: left"><span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span>(2)</span>
                                </h5>

                            </div>
                            <div class="row ml-1">
                                <div class="row">
                                    <div class="nameuser "><strong style="color: black"> nguyendat </strong></div>
                                </div>
                                <div class="row w-100">
                                    mình thể với các bạn là sự ra đời của chiếc túi này quả là tuyệt với. Nó ko chỉ to
                                    đựng nhiều đồ khi đi chợ, siêu thị,… mà nó còn được thiết kế cực kì sáng tạo, nó có
                                    thể gói gọn lại thành hình trái tim như hình, bạn có thể để nó trong túi vải của bạn
                                    và mang nó đi và sử dụng nó bất cứ khi nào bạn cần. Mình ưng thực sự luôn♥️♥️♥️n
                                </div>
                            </div>
                            <div style="float: right;display: inline">12/12/1012</div>

                        </div>
                    </div>
                    <hr class="coll-divider short-bg-line center">

                    <div class="mt-4">
                        <div style="font-size: 28px ;color: black">Add a review</div>
                        <div class="card-body"> Your email address will not be published. Required fields are marked *
                        </div>
                    </div>
                {{--                    <div class="card" style="width: 50%">--}}

                {{--                        <h5 class="card-header info-color white-text text-center py-4">--}}
                {{--                            <strong>Contact us</strong>--}}
                {{--                        </h5>--}}

                {{--                        <!--Card content-->--}}
                {{--                        <div class="card-body px-lg-5 pt-0">--}}

                {{--                            <!-- Form -->--}}
                {{--                            <form class="text-center" style="color: #757575;" action="#!">--}}

                {{--                                <!-- Name -->--}}
                {{--                                <div class="md-form mt-3">--}}
                {{--                                    <input type="text" id="materialContactFormName" class="form-control">--}}
                {{--                                    <label for="materialContactFormName">Name</label>--}}
                {{--                                </div>--}}

                {{--                                <!-- E-mail -->--}}
                {{--                                <div class="md-form">--}}
                {{--                                    <input type="email" id="materialContactFormEmail" class="form-control">--}}
                {{--                                    <label for="materialContactFormEmail">E-mail</label>--}}
                {{--                                </div>--}}

                {{--                                <!-- Subject -->--}}
                {{--                                <span>Subject</span>--}}
                {{--                                <select class="mdb-select">--}}
                {{--                                    <option value="" disabled>Choose option</option>--}}
                {{--                                    <option value="1" selected>Feedback</option>--}}
                {{--                                    <option value="2">Report a bug</option>--}}
                {{--                                    <option value="3">Feature request</option>--}}
                {{--                                    <option value="4">Feature request</option>--}}
                {{--                                </select>--}}

                {{--                                <!--Message-->--}}
                {{--                                <div class="md-form">--}}
                {{--                                    <textarea id="materialContactFormMessage" class="form-control md-textarea"--}}
                {{--                                              rows="3"></textarea>--}}
                {{--                                    <label for="materialContactFormMessage">Message</label>--}}
                {{--                                </div>--}}

                {{--                                <!-- Copy -->--}}
                {{--                                <div class="form-check">--}}
                {{--                                    <input type="checkbox" class="form-check-input" id="materialContactFormCopy">--}}
                {{--                                    <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this--}}
                {{--                                        message</label>--}}
                {{--                                </div>--}}

                {{--                                <!-- Send button -->--}}
                {{--                                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"--}}
                {{--                                        type="submit">Send--}}
                {{--                                </button>--}}

                {{--                            </form>--}}
                {{--                            <!-- Form -->--}}

                {{--                        </div>--}}

                {{--                    </div>--}}
                <!-- Material form contact -->                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="cont">
            <div id="slider-container">


                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img
                            src="https://thumbs.dreamstime.com/x/afro-american-woman-juggling-objects-beautiful-multiple-over-air-60663715.jpg"
                            alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">First Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a style="text-decoration: none" href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://images.pexels.com/photos/272228/pexels-photo-272228.jpeg" alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Second Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img
                            src="https://thumbs.dreamstime.com/x/business-communications-technology-people-hand-digital-tablet-smartphone-papers-various-office-objects-table-flat-70058937.jpg"
                            alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Third Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://thumbs.dreamstime.com/x/morning-meditation-28835030.jpg" alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Fourth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://cdn.pixabay.com/photo/2017/01/11/18/09/toddler-1972493_960_720.jpg" alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">fifth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img
                            src="https://thumbs.dreamstime.com/x/happiness-free-happy-woman-enjoying-sunset-beautiful-white-dress-embracing-golden-sunshine-glow-arms-54515131.jpg"
                            alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">sixth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="http://www.freeimageslive.com/galleries/workplace/education/preview/maths_school.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Seventh Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img
                            src="http://www.freeimageslive.com/galleries/workplace/education/preview/computer_learning.jpg"
                            alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Eighth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img
                            src="http://www.freeimageslive.com/galleries/workplace/education/preview/university_certificate.jpg"
                            alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Ninth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>
                <span id="right-btn" class="fa fa-arrow-circle-right" aria-hidden="true"></span>
                <span id="left-btn" class="fa fa-arrow-circle-left" aria-hidden="true"></span>

            </div>
        </div>

    </div>

@endsection
