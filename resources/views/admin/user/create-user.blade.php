@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-1 font-weight-bold">Thêm mới người dùng</h2>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class=" font-weight-bold text-primary mt-2 "><a href="/admin/user"><i
                            class="fas fa-bars"></i> Danh sách người dùng</a></h5>
                <div class="form-create-user-ad">
                <form action="/admin/user" method="POST" class="mt-5 mb-5 ">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput "><i class="fas fa-user"></i>&nbsp;Họ</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập họ người dùng" name="firstName" >
                                @if ($errors->has('firstName'))
                                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-3 ml-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><i class="fas fa-user"></i>&nbsp;Tên</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên người dùng" name="lastName" >
                                @if ($errors->has('lastName'))
                                    <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><i class="fas fa-phone"></i>&nbsp;Số điện thoại</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nhập số điện thoại" name="phone" >
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-3 mt-2 ml-3 ">

                            <label for=""><i class="fas fa-venus-mars"></i>&nbsp;Giới tính</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" >
                                <label class="form-check-label" for="inlineRadio1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="0" >
                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                            </div>
                            <br>
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><i class="fas fa-envelope"></i>&nbsp;Địa chỉ Email</label>
                                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Nhập địa chỉ Email" name="email" >
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><i class="fas fa-envelope"></i>&nbsp;Mật khẩu</label>
                                <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Nhập mật khẩu" name="password" >
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary">Xác nhận</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

