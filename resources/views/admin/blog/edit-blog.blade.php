@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-1 font-weight-bold">SỬA THÔNG TIN BLOG</h3>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class=" font-weight-bold text-primary mt-2 "><a href="/admin/blog"><i
                            class="fas fa-bars"></i> Danh sách blog</a></h5>
                <div class="mt-5 mb-5">
                    <form action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row ">
                            <div class=" col-sm-5 input-blog">
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="thumnail">Ảnh bìa</label>
                                    <img class="img-edit-blog"
                                         src="{{$blog->thumbnail}}"
                                         alt="">
                                    <div class="input-group mb-3 mt-2">
                                        <div class="custom-file">
                                            <input multiple type="file" id="inputGroupFile01" name="thumbnail[]" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="category">Danh mục</label>
                                    <input class="col-12 form-control" type="text" name="category"
                                           value="{{$blog->category}}">
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="title">Tiêu đề</label>
                                    <textarea class="col-12 form-control" type="text" name="title" rows="3">{{$blog->title}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="category">Trạng thái</label>
                                    <input class="col-4 form-control" type="number" name="status"
                                           value="{{$blog->status}}">
                                </div>
                                <div class="form-group">
                                    <label class="row font-weight-bold" for="detail">Mô tả</label>

                                    <textarea class="col-12 form-control" type="text" name="detail" rows="8">{{$blog->detail}}
                                            </textarea>
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="contentcheck ">Nội dung</label>
                                    <textarea  contenteditable="true" name="contentcheck"
                                              class="  form-control rounded-0"
                                              id="ckeditor1"
                                             rows="20" ></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{$blog->content}}" id="hidden">
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
