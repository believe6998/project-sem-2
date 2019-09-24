@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h3 class="mt-2 font-weight-bold">DANH SÁCH BLOG</h3></div>
            <div class="card-body card-hd-list-category">
                <div class="row">
                    <div class="col-6 mb-1"><h5 class="m-0  text-primary mt-2 "><a href="/admin/blog/create"><i
                                    class="far fa-plus-square"></i> Thêm
                                mới blog</a></h5></div>
                    <div class="col-6 mb-1">
                        <h5 class="m-0  text-primary mt-2 d-flex justify-content-end"><a href="/admin/deleted-blog">
                                <i class="far fa-trash-alt"></i> Blog đã xóa</a></h5>
                    </div>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="tr-category-ad-item text-center">
                            <th scope="row">
                                <input type="checkbox" id="check-all-blog-ad">
                            </th>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Ảnh bìa</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($blog as $blogs)
                            <tr class="text-center tr-blog-ad">
                                <th scope="row" class="item-blog-ad">
                                    <input type="checkbox" class="check-item " value="{{$blogs->id}}">
                                </th>
                                <td class="item-blog-ad ">{{$blogs->id}}</td>
                                <td class="item-blog-ad">{{$blogs->title}}</td>

                                <td><img class="img-responsive mb-5"
                                         src="{{$blogs->thumbnail}}"
                                         alt="" style="width: 200px"></td>
                                <td class="item-blog-ad">{{$blogs->category}}</td>
                                <td class="item-blog-ad">{{$blogs->status}}</td>

                                <td class="item-blog-ad">{{$blogs->created_at}}</td>
                                <td class="item-blog-ad">{{$blogs->updated_at}}</td>
                                <td class="item-blog-ad">


                                    <div class="row">
                                        <div class="col-4">
                                            <a style="text-decoration: none; padding-right: 60px"  href="{{route('blog.show',$blogs->id)}}" ><i class="fas fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                        <div class="col-4 "><a href="{{route('blog.edit',$blogs->id)}}"
                                                               class="text-primary"><i class="fas fa-edit"></i></a>
                                        </div>

                                        <div class="col-4"><a class="btn-delete-blog text-danger mr-5"
                                                              href="javascript:void(0)"
                                                              id="btn-delete-blog{{$blogs->id}}"><i
                                                    class="fas fa-trash-alt"></i></a></div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <nav class="navigation-control d-flex justify-content-end" aria-label="Page navigation example">
                    {{$blog->links()}}
                </nav>
            </div>
            <div class="card-footer">
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="form-group mr-3">
                            <select class="form-control mr-2" id="select-action">
                                <option value="0">--Chọn thao tác--</option>
                                <option value="-1">Xoá</option>
                                {{--                            <option value="1">Hiển thị</option>--}}

                            </select>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group btn-choice-blog" id="select-action">
                            <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-blog">Xác nhận
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

