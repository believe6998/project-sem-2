@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/pt" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="modal-body">
                                <div class="title">
                                    <h3 class="text-center font-weight-bold ">Thêm PT</h3>
                                </div>
                                <div class="col-8">
                                    <div class="">
                                        <div class="form-group">
                                            <label class="font-weight-bold">&nbsp;Tên</label>
                                            <input type="text" class="form-control" placeholder="Tên của bạn"name="name" >
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-6 ">
                                        <div class="form-group">
                                            <label  class="font-weight-bold">&nbsp;Description</label>
                                            <textarea type="text" rows="4" cols="50" name="description" ></textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="form-group">
                                            <label  class="font-weight-bold">&nbsp;Qualification</label>
                                            <textarea type="text" rows="4" cols="50" name="qualification" ></textarea>
                                            @if ($errors->has('qualification'))
                                                <span class="text-danger">{{ $errors->first('qualification') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="form-group">
                                            <label  class="font-weight-bold">&nbsp;Experience</label>
                                            <textarea type="text" rows="4" cols="50" name="experience"></textarea>
                                            @if ($errors->has('experience'))
                                                <span class="text-danger">{{ $errors->first('experience') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="">
                                    <div class="col-8 ">
                                        <div class="form-group">
                                            <label class="font-weight-bold">&nbsp;Avatar</label>
                                            <input multiple type="file"   name="image[]">
                                            @if ($errors->has('image[]'))
                                                <span class="text-danger">{{ $errors->first('image[]') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="">
                                    <div class="col-8 ">
                                        <div class="form-group">
                                            <label class="font-weight-bold">&nbsp;Rating</label>
                                            <input type="text" class="form-control" name="rating" placeholder="Rating">
                                            @if ($errors->has('rating'))
                                                <span class="text-danger">{{ $errors->first('rating') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-4 ">
                                        <div class="form-group">
                                            <label class="font-weight-bold">&nbsp;Status</label>
                                            <input type="number" class="form-control" name="status" placeholder="Status">
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
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
                                                Đăng Kí
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
