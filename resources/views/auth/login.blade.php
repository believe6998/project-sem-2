@extends('client.layout.master')
@section('content')

    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-md-8 ">
                <div class="card  ">
                    <div class="card-header d-flex justify-content-center card-lg-form-cl">{{ __('Đăng nhập') }}</div>

                    <div class="card-body card-body-lg-form-cl mt-0">
                        <form class="mt-5"  method="POST" action="{{ route('login') }}" >
                            @csrf

{{--                            <div class="form-group row">--}}

{{--                                <label for="email"--}}
{{--                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" placeholder="Địa chỉ Email"--}}
{{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-row d-flex justify-content-center">
                                <div class="form-group  col-md-5 txt-form-lg-cl">
                                    <label for="email"><i class="fas fa-envelope"></i> {{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Địa chỉ Email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                </div>
                            </div>

                            <div class="form-row d-flex justify-content-center mt-2">
                                <div class="form-group  col-md-5 txt-form-lg-cl ">
                                    <label for="password" ><i class="fas fa-lock"></i> {{ __('Mật khẩu') }}</label>
                                    <input id="password" type="password" placeholder="Mật khẩu" class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                </div>
{{--                                <label for="password"--}}
{{--                                       class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" placeholder="Mật khẩu"--}}
{{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
{{--                                           required autocomplete="current-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12 rmbm-login-cl">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ghi nhớ') }}
                                        </label>
                                    </div>

                                </div>
                                <div class=" col-md-6  fg-pass-login-cl">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link " href="{{ route('password.request') }}">
                                            {{ __('Quên mật khẩu?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>



                            {{--                        <div class="form-group row">--}}
                            {{--                            <div class="col-md-8  offset-md-4">--}}
                            {{--                                <div class="form-check">--}}
                            {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                            {{--                                    <label class="form-check-label" for="remember">--}}
                            {{--                                        {{ __('Ghi nhớ') }}--}}
                            {{--                                    </label>--}}
                            {{--                                </div>--}}
                            {{--                                @if (Route::has('password.request'))--}}
                            {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--                                        {{ __('Quên mật khẩu?') }}--}}
                            {{--                                    </a>--}}
                            {{--                                @endif--}}
                            {{--                            </div>--}}

                            {{--                        </div>--}}

                            <div class="form-group row  ">
                                <div class="col-md-12  d-flex justify-content-center mt-4 mb-5">
                                    <button type="submit" class="btn btn btn-outline-primary " style="font-weight: bold">
                                        {{ __('Đăng nhập') }}
                                    </button>


                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 txt-or-lg-cl">
                                    <label for="" class="mt-4 ">Bạn cũng có thể đăng nhập bằng các tài khoản mạng xã hội dưới đây.</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center social-btn-login mt-3">
                                    <a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                                    <a href="#" class="btn btn-info"><i class="fab fa-twitter"></i>&nbsp; Twitter</a>
                                    <a href="#" class="btn btn-danger"><i class="fab fa-google"></i>&nbsp; Google</a>
                                </div>
                            </div>
                           <div class="row mt-4">
                               <div class="col-12 text-center txt-footer-form-lg-cl mt-4">
                                   <label for="">Bạn chưa có tài khoản? <a href="/register">Đăng ký ngay!</a></label>
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
