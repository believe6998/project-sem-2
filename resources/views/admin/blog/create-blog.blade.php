@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 font-weight-bold">THÊM MỚI BLOG</h3>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class="  text-primary mt-2 "><a href="/admin/blog"><i
                            class="fas fa-bars"></i> Danh sách blog</a></h5>
                <div class="mt-5 mb-5">
                    <form action="{{route('blog.store')}}" enctype="multipart/form-data" method="POST">
                        @method('post')
                        @csrf
                        <div class="row">
                            <div class="col-sm-5 input-blog" >
                                <div class="form-group">

                                    <label class="row font-weight-bold" for="thumnail">Ảnh bìa</label>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input multiple type="file"   name="thumbnail[]">

                                            @if ($errors->has('thumbnail'))

                                                <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="category">Danh mục</label>
                                    <input class="col-12 form-control" type="text" name="category">
                                    @if ($errors->has('category'))
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="title">Tiêu đề</label>
                                    <textarea class="col-12 form-control" type="text" name="title" rows="3"></textarea>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="detail">Mô tả</label>
                                    <textarea class="col-12 form-control"  type="text" name="detail" rows="6">
                                    </textarea>
                                    @if ($errors->has('detail'))
                                        <span class="text-danger">{{ $errors->first('detail') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="contentcheck">Nội dung</label>
                                    <textarea contenteditable="true" name="contentcheck" class="  form-control rounded-0"
                                              id="ckeditor1"
                                              rows="20"></textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        CKEDITOR.replace('contentcheck');
        $('#ckeditor1').val($('#hidden').val())
    </script>

@endsection

