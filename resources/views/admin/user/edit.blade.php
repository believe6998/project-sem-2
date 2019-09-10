@extends('admin.layout.master')
@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="PUT">
        @method('PUT')
        @csrf
        <div class="modal-body">
            <div class="title">
                <h3 class="text-center font-weight-bold ">Sửa</h3>
            </div>
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-6 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-user"></i>&nbsp;Họ</label>
                        <input type="text" class="form-control" value="{{$user->firstName}}" name="firstName" required
                               autocomplete="firstName">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-user"></i>&nbsp;Tên</label>
                        <input type="text" class="form-control" value="{{$user->firstName}}" name="lastName" required
                               autocomplete="lastName">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-6 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-phone-alt"></i>&nbsp;Số điện thoại</label>
                        <input type="text" class="form-control" value="{{$user->lastName}}" placeholder="Số điện thoại."
                               name="phone">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-venus-mars"></i>&nbsp;Giới tính</label>
                        <br>

                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" required autocomplete="gender" type="radio" name="gender"
                                   id="inlineRadio1" value="0">
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required autocomplete="gender" type="radio" name="gender"
                                   id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-9 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-envelope"></i>&nbsp;Email</label>
                        <input type="email" class="form-control" required autocomplete="email" value="{{$user->email}}"
                               name="email" placeholder="Địa chỉ email.">
                    </div>
                </div>
                <div class="col-3"></div>

            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-6 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-lock"></i>&nbsp;Mật khẩu</label>
                        <input type="password" class="form-control" name="password" required autocomplete="new-password"
                               value="{{$user->password}}">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="form-group">
                        <label class="font-weight-bold"><i class="fas fa-lock"></i>&nbsp;Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="password_confirmation"
                               placeholder="Nhập lại mật khẩu." required autocomplete="new-password">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12  ">
                    <label class="accept-form-register" for=""><input type="checkbox"> Tôi đã đọc và đồng ý với
                        các <a
                                href="#">điều khoản sử dụng</a>. </label>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4" style="padding-right: 70px">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Xác Nhận
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
