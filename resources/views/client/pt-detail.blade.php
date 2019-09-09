@extends('client.layout.master')
@section('content')

    <div class="container">
        <div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="carousel-inner">
                        <div>
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                        </div>
                    </div><!--inner-->
                </div><!-- col-sm-6  -->
                <div style="margin-left: 5%">
                    <div class="star-ratings-sprite-pt-detail"><span style="width:80%"
                                                                     class="star-ratings-sprite-rating-pt-detail"></span>
                    </div>
                    <div class="text-secondary">(1 đánh giá)</div>
                    <div class="pt-2"><h3>Phan Hoài Nam</h3></div>
                    <div class=""><h3>Heart Bag</h3></div>
                    <div class="row">
                        <div class="col-sm-7 mt-3">
                            <span style="  color: #f33c3c;  font-size: 24px; line-height: 24px;">250.000đ</span>
                        </div>
                        <div class="col-sm-5" style="width: 190px; height: 50px">
                            <button
                                style="width: 100%;height: 100%;background: #4a9bbf;color: white;border-radius: 3px;font-size: 16px">
                                Trải nghiệm ngay
                            </button>
                        </div>

                    </div>
                    <div class="mt-5">
                        <div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Lastname</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="mt-5">
                            <table class="table" border="1" style="text-align: center">
                                <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td>july@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td>july@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td>july@example.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
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
                    <a href="#" class="item-link">Submit</a>
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
