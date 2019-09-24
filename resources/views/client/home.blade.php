@extends('client.layout.master')
@section('content')
    <header>
        <figure class="intro" id="intro">
            <img src="{{asset('image/Online-personal-training-1.jpg')}}" alt=""/>
            <figcaption class=" caption item item--primary"
                        data-aos="fade-left">
                <h1>MY-PT Online</h1>
                <h4>Đào tạo cá nhân trực tuyến - cách hiệu quả và tiết kiệm nhất để đạt được mục tiêu tập thể dục của
                    bạn.
                    Huấn luyện viên cá nhân của bạn bất cứ nơi nào và bất cứ khi nào bạn muốn!</h4>
            </figcaption>
            <span class="overlay">
<svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
     y="0px"
     viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" PreserveAspectRatio="none">
<path fill="#FFFFFF"
      d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z"
/>
</svg>
  </span>
        </figure>

    </header>
    <div class="home-gt">
        <div class=" home-title">Lợi ích của đào tạo cá nhân <br> trực tuyến</div>
        <div class="container">
            @foreach($list as $index => $item)
                @if($index % 2 !=0)
                    <div class="row gt-pt">
                        <div class="col-sm-6" data-aos="zoom-in">
                            <div class="row text-gt">{{$item->title}}</div>
                            <div class="row text-title-pt">{{$item->description}}</div>
                            {!!$item->content!!}
                        </div>
                        <div class="col-sm-6 " data-aos="zoom-in"><img class="img-gt" width="100%" height="auto"
                                                                       src="{{$item->image}}"
                                                                       alt=""></div>
                    </div>
                @else
                    <div class="row gt-pt">
                        <div class="col-sm-6" data-aos="fade-in"><img class="img-gt" width="100%" height="auto"
                                                                      src="{{$item->image}}"
                                                                      alt=""></div>
                        <div class="col-sm-6 pl-5" data-aos="fade-up">
                            <div class="row text-gt"> {{$item->title}}</div>
                            <div class="row text-title-pt">{{$item->description}}</div>
                            {!!$item->content!!}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
    <div style="background:linear-gradient(180deg,#0072ff 0%,#00c6ff 100%) !important;position: relative;background-position: center;">
        <div class=" curved"></div>
        <div class="home-title mb-2" style="color: white" data-aos="zoom-in"> Huấn luyện viên</div>
        <div class="home-hovereffect">
            <img class="img-responsive" width="100%" height="auto"
                 src="https://my-pt.online/wp-content/uploads/2018/02/Michal-Kwasiuk13.png" alt="">
            <div class="home-overlay">
                <h1 style="color: white">Michał Kwasiuk</h1>
                <h2>Huấn luyện viên & Dinh dưỡng cá nhân</h2>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-8 text-gt-pt" data-aos="fade-right">
                    <h4>Tên tôi là Michał Kwasiuk Tôi 26 tuổi. Trong cuộc sống hàng ngày huấn luyện viên
                        cá nhân / huấn
                        luyện viên trực tuyến, huấn luyện viên thể dục và nhiều năm đam mê thể dục.
                    </h4>
                    <h4>Tôi hiện đang điều hành MY-PT.Online với tư cách là một nhà giao dịch duy nhất.
                    </h4>
                    <h4>Thật không may, ngày nay mọi người có thể tự gọi mình là 'huấn luyện viên cá
                        nhân'. Và đây là
                        một
                        vấn đề ... những người đã làm việc trong nhiều năm, đã theo chế độ ăn kiêng
                        thành công hoặc đang
                        theo một phương tiện truyền thông xã hội lớn hơn, do đó, xem xét bản thân được
                        trao quyền để
                        giúp
                        mọi người đào tạo, dinh dưỡng và huấn luyện.</h4>
                    <h4>Điều gì cho tôi quyền gọi mình là huấn luyện viên cá nhân?
                        Không giống như nhiều "huấn luyện viên trực tuyến" hiện tại, tôi đã theo dõi một
                        số khóa học và
                        khóa
                        đào tạo trong ngành thể dục trong những năm gần đây. </h4>
                    <h4>Các NASM CPT là viết tắt của Viện Hàn Lâm Y học thể thao (Certified Trainer cá
                        nhân)
                        Đây là một lãnh đạo giữa năm và từ nguồn gốc đào tạo 'Mỹ' bao gồm các bài học lý
                        thuyết và thực
                        tiễn và kết thúc bằng một bài thi lý thuyết và thực hành mà trong nhiều năm cũng
                        được đưa ra tại
                        một số địa điểm ở Hà Lan. NASM thường được coi là "tốt nhất trên toàn thế
                        giới"gi</h4>
                    <h4>Và tôi có bằng tốt nghiệp NASM CPT.</h4>
                    <h4>Tôi cũng đang sở hữu bằng tốt nghiệp Thể dục & Thể hình, huấn luyện viên Fit!
                        Vak Fitness Bằng
                        tốt nghiệp và chứng chỉ AALO Dinh dưỡng.
                        Tôi cũng đã đăng ký với EREPS
                        Đăng ký Chuyên gia Thể dục Châu Âu . Và các chuyên gia thể hình đăng ký Hà Lan
                        NLACTIEF.</h4>
                </div>
                <div class="col-sm-4 pl-5" data-aos="fade-left">
                    <div class=" col-sm-10 img-chungchi">
                        <img width="100%" height="auto"
                             src="https://my-pt.online/wp-content/uploads/2018/02/NASM.png"
                             alt="">
                    </div>
                    <div class=" col-sm-10 img-chungchi">
                        <img width="100%" height="auto"
                             src="https://my-pt.online/wp-content/uploads/2018/02/EREPS.png"
                             alt="">
                    </div>
                    <div class=" col-sm-10 img-chungchi">
                        <img width="100%" height="auto"
                             src="https://my-pt.online/wp-content/uploads/2018/01/NLActief_weblogo.png"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class=" curved-end"></div>
    </div>
    <div class="container">
        <div class="home-title mb-2"> Dịch vụ</div>
        <div class="row">
            <div class="col-sm-5" style="padding-top: 10%;padding-right: 5%" data-aos="zoom-in">
                <div data-aos="zoom-in">
                    <h4 class="mb-3" style="line-height: 2.5rem">Tôi làm việc với các gói khác nhau.
                        Trường hợp các dịch vụ khác nhau được cung cấp.</h4>
                    <h4 style="line-height:2.5rem">Dưới đây là một mô tả ngắn gọn về các dịch vụ tôi
                        cung cấp với các
                        gói
                        đào tạo cá nhân trực tuyến
                        của chúng tôi. Để biết thêm thông tin bấm vào nút bên dưới.</h4>
                </div>
                <div data-aos="zoom-in" class="container-gt-pt">
                    <a href="#" style="text-decoration: none" class="btn-gt-pt">
                        <svg width="277" height="62">
                            <defs>
                                <linearGradient id="grad1">
                                    <stop offset="0%" stop-color="rgb(46, 220, 255)"/>
                                    <stop offset="100%" stop-color="#E178ED"/>
                                </linearGradient>
                            </defs>
                            <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266"
                                  height="50"></rect>
                        </svg>
                        <!--<span>Voir mes réalisations</span>-->
                        <span>Welcome in my world</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-7 col-gtdingduong" data-aos="zoom-in">
                <div class="row">
                    <div class="col-6">
                        <div class="row row-gtdingduong" data-aos="zoom-in">
                            <div class="col-4"><img width="100%" height="auto"
                                                    src="https://my-pt.online/wp-content/uploads/2018/03/trainingsschema.png"
                                                    alt=""></div>
                            <div class="col-7 gt-dingduong"><h3>Lịch đào tạo</h3>
                                <h5>Lịch trình đào tạo được thiết kế riêng cho bạn. Điều này làm cho mọi
                                    đào tạo có hiệu
                                    quả nhất có thể.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row row-gtdingduong" data-aos="zoom-in">
                            <div class="col-4"><img width="100%" height="auto"
                                                    src="https://my-pt.online/wp-content/uploads/2018/03/voedingsschema.png"
                                                    alt=""></div>
                            <div class="col-7 gt-dingduong"><h3>Chế độ dinh dưỡng</h3>
                                <h5>Được làm bằng các loại thực phẩm yêu thích của bạn, giảm cân hoặc
                                    đến nơi chưa từng
                                    có.</h5>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row row-gtdingduong" data-aos="zoom-in">
                            <div class="col-4"><img width="100%" height="auto"
                                                    src="https://my-pt.online/wp-content/uploads/2018/03/flexdieet.png"
                                                    alt=""></div>
                            <div class="col-7 gt-dingduong"><h3>Chế độ ăn uống linh hoạt</h3>
                                <h5>Là một lịch trình cho ăn không dành cho bạn? Quyết định cho bản thân
                                    những gì bạn
                                    ăn, tôi đặt mục tiêu calo và vĩ mô hàng ngày của bạn.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row row-gtdingduong" data-aos="zoom-in">
                            <div class="col-4"><img width="100%" height="auto"
                                                    src="https://my-pt.online/wp-content/uploads/2018/03/ebook-voeding.png"
                                                    alt=""></div>
                            <div class="col-7 gt-dingduong"><h3>Sách điện tử về dinh dưỡng</h3>
                                <h5>Tìm hiểu các nguyên tắc cơ bản của dinh dưỡng và lựa chọn lành mạnh
                                    là gì và làm thế
                                    nào để áp dụng điều này trong cuộc sống hàng ngày.</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="row row-gtdingduong" data-aos="zoom-in">
                            <div class="col-4 gt-dingduong"><img width="100%" height="auto"
                                                                 src="https://my-pt.online/wp-content/uploads/2018/03/cardio.png"
                                                                 alt=""></div>
                            <div class="col-7 gt-dingduong"><h3>Tập luyện tim mạch hiệu quả</h3>
                                <h5>Giờ tập cardio và số km vô tận trên máy chạy bộ là lịch sử. Với các
                                    bài tập cardio
                                    ngắn và hiệu quả gấp đôi.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row row-gtdingduong" data-aos="zoom-in">
                            <div class="col-4 gt-dingduong"><img width="100%" height="auto"
                                                                 src="https://my-pt.online/wp-content/uploads/2018/03/supplementatie.png"
                                                                 alt=""></div>
                            <div class="col-7 gt-dingduong"><h3>Tư vấn về bổ sung</h3>
                                <h5>Không bao giờ tiêu tiền vào "những người đốt mỡ" vô giá trị và những
                                    thứ khác không
                                    hiệu quả. Tôi nói với bạn những gì hoạt động và những gì không.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="home-title mt-5 mb-2" data-aos="fade-down">Blog bài viết</div>

        <div class="row" style="padding-left: 11%">
            @foreach($blogs as $blog)
                <div class="col-sm-5 gt-blog">
                    <img width="100%" height="auto"
                         src="{{$blog->thumbnail}}" alt="">
                    <div class="mt-5"><a class="showmore" style="text-decoration: none;color: #4d4d4d"
                                         href="{{route('client.blog.show',$blog->id)}}">
                            <h2>{{$blog->title}}</h2></a></div>
                    <div class="mt-4 "><a style="text-decoration: none" href="">
                            <h4>{{$blog->category}}</h4></a></div>
                    <div class="mt-4"><h5 style="line-height: 1.7em">{{$blog->detail}}</h5></div>
                    <div class="mt-4"><a class="showmore" style="text-decoration: none;color: gray"
                                         href="{{route('client.blog.show',$blog->id)}}"><h4>Đọc
                                tiếp</h4></a></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection