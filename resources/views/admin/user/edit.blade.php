@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-1 font-weight-bold">Chỉnh sửa người dùng</h2>
            </div>
            <form action="{{route('user.update',$user->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-5 ">
                            <div class="form-group">
                                <label class="font-weight-bold"><i class="fas fa-user"></i>&nbsp;Họ</label>
                                <input type="text" class="form-control" value="{{$user->firstName}}" name="firstName" >
                                @if ($errors->has('firstName'))
                                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-5 ">
                            <div class="form-group">
                                <label class="font-weight-bold"><i class="fas fa-user"></i>&nbsp;Tên</label>
                                <input type="text" class="form-control" value="{{$user->lastName}}" name="lastName" required
                                       autocomplete="lastName">
                                @if ($errors->has('lastName'))
                                    <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row er mt-2">
                        <div class="col-5 ">
                            <div class="form-group">
                                <label class="font-weight-bold"><i class="fas fa-phone-alt"></i>&nbsp;Số điện thoại</label>
                                <input type="text" class="form-control" value="{{$user->phone}}" placeholder="Số điện thoại."
                                       name="phone">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-5 ">
                            <div class="form-group">
                                <label class="font-weight-bold"><i class="fas fa-venus-mars"></i>&nbsp;Giới tính</label>
                                <br>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" required autocomplete="gender" type="radio" name="gender"
                                           id="inlineRadio1" value="{{$user->gender}}">
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required autocomplete="gender" type="radio" name="gender"
                                           id="inlineRadio2" value="{{$user->gender}}">
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                </div>
                            </div>
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>

                    </div>
                    <div class="row d-flex mt-2">
                        <div class="col-5 ">
                            <div class="form-group">
                                <label class="font-weight-bold"><i class="fas fa-envelope"></i>&nbsp;Email</label>
                                <input type="email" class="form-control" value="{{$user->email}}"
                                       name="email" placeholder="Địa chỉ email.">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-3"></div>

                    </div>
                    <div class="row d-flex">
                        <div class="col-5 ">
                            <div class="form-group">
                                <label class="font-weight-bold"><i class="fas fa-lock"></i>&nbsp;Mật khẩu</label>
                                <input type="password" class="form-control" name="password"
                                       value="{{$user->password}}">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
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
        </div>
    </div>

@endsection
