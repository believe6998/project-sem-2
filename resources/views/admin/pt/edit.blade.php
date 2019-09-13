@extends('admin.layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('pt.update',$PersonalTraining->id)}}" enctype="multipart/form-data" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <div class="title">
                                <h3 class="text-center font-weight-bold ">Edit PT</h3>
                            </div>
                            <div class="col-8">
                                <div class="">
                                    <div class="form-group">
                                        <label class="font-weight-bold">&nbsp;Tên</label>
                                        <input type="text" class="form-control" placeholder="Tên của bạn" name="name" value="{{$PersonalTraining->name}}" required autocomplete="name">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label  class="font-weight-bold">&nbsp;Description</label>
                                        <textarea type="text" rows="4" cols="50" name="description" required autocomplete="description">{{$PersonalTraining->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label  class="font-weight-bold">&nbsp;Qualification</label>
                                        <textarea type="text" rows="4" cols="50" name="qualification" required autocomplete="qualification">{{$PersonalTraining->qualification}}</textarea>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label  class="font-weight-bold">&nbsp;Experience</label>
                                        <textarea type="text" rows="4" cols="50" name="experience"  required autocomplete="experience">{{$PersonalTraining->experience}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="">
                                <div class="col-8 ">
                                    <div class="form-group">
                                        <label class="font-weight-bold">&nbsp;Avatar</label>
                                        <input type="file" class="form-control" multiple required autocomplete="image" name="image[]" value="{{$PersonalTraining->image}}" placeholder="Avatar">
                                    </div>
                                </div>
                                <div class="col-3"></div>
                            </div>
                            <div class="">
                                <div class="col-8 ">
                                    <div class="form-group">
                                        <label class="font-weight-bold">&nbsp;Rating</label>
                                        <input type="text" class="form-control" required autocomplete="rating" name="rating" value="{{$PersonalTraining->rating}}" placeholder="Rating">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="col-4 ">
                                    <div class="form-group">
                                        <label class="font-weight-bold">&nbsp;Status</label>
                                        <input type="number" class="form-control" required autocomplete="rating" name="status" value="{{$PersonalTraining->status}}" placeholder="Status">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

