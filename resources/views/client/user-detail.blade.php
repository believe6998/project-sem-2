@extends('client.layout.master')
@section('content')
    <div class="container mt-5 ">
        <div class="card mt-5">
            <div class="card-header text-center ">
                <h2 class="mt-2" style="color: #1d68a7; font-weight: bold">Thông tin cá nhân</h2>
            </div>
            <div class="card-body mt-5 mb-3">
                <div class="card-body-detail-user ">

                    <div class="row ">
                        <div class="col-6">
                            <label for=""
                                   style="font-weight: bold; font-size: 18px; color: #1d68a7;">Họ: </label>&nbsp;{{Auth::user()->firstName}}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="" style="font-weight: bold; font-size: 18px; color: #1d68a7;">Tên: </label>&nbsp;{{Auth::user()->lastName}}
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="" style="font-weight: bold; font-size: 18px; color: #1d68a7;">Email: </label>&nbsp;{{Auth::user()->email}}
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="" style="font-weight: bold; font-size: 18px;color: #1d68a7;">Số điện
                                thoại: </label>&nbsp;{{Auth::user()->phone}} &nbsp;
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="" style="font-weight: bold; font-size: 18px; color: #1d68a7;">Giới
                                tính: </label>&nbsp;{{Auth::user()->gender}}&nbsp;
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="" style="font-weight: bold; font-size: 18px; color: #1d68a7;">Thời gian tạo: </label>&nbsp;{{Auth::user()->created_at}}
                        </div>
                    </div>





                </div>

            </div>

        </div>
    </div>



@endsection
