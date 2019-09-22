@extends('client.layout.master')
@section('content')
    <div class="container mt-5 ">
        <div class="card mt-5">
            <div class="card-header text-center card-header-ifmt-user" >
                <h2 class="mt-2" >Thông tin cá nhân</h2>
            </div>
            <div class="card-body " style="background: aliceblue">
                <div class="row mt-5 body-user-detail">
                    <div class="col-6 img-user-detail mt-1">
                        <img src="https://www.french-weekendbreaks.co.uk/sites/uk.picardiev3/themes/picardiev3/img_v2/user-default.jpg" class="img-thumbnail" width="200px" height="200px"  alt="...">
                        <form class="mt-3">
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </form>
                    </div>
                    <div class="col-5 txt-body-user-detail mb-4">
                        <ul>
                            <li ><label for="">Tên: </label>&nbsp;{{ Auth::user()->lastName }} &nbsp;<a href="#"><i class="far fa-edit"></i></a></li>
                            <li class="mt-2"><label for="">Họ: </label>&nbsp;{{ Auth::user()->firstName }} &nbsp;<a href="#"><i class="far fa-edit"></i></a></li>
                            <li class="mt-2"><label for="">Email: </label>&nbsp;{{ Auth::user()->gmail }} &nbsp;<a href="#"><i class="far fa-edit"></i></a></li>
                            <li class="mt-2"><label for="">Số điện thoại: </label>&nbsp;{{ Auth::user()->phone }}  &nbsp;<a href="#"><i class="far fa-edit"></i></a></li>
                            <li class="mt-2"><label for="">Giới tính: </label>&nbsp;{{ Auth::user()->gender }}  &nbsp;<a href="#"><i class="far fa-edit"></i></a></li>
                            <li class="mt-2"><label for="">Ngày tạo: </label>&nbsp;{{ Auth::user()->created_at }} </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12 btn-user-detail d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Lưu thông tin</button>
                        <button type="button" class="btn btn-secondary ml-3">Xóa tài khoản</button>

                    </div>
                </div>
            </div>



        </div>
    </div>

@endsection
