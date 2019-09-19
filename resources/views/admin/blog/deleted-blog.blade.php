@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h3 class="mt-2 font-weight-bold">DANH SÁCH BLOG ĐÃ XÓA</h3></div>
            <div class="card-body card-hd-list-category">

                <h5 class="m-0  text-primary mt-2 "><a href="/admin/blog"><i
                            class="fas fa-bars"></i> Danh sách blog</a></h5>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="tr-category-ad">
                            <th scope="col">
                                <input type="checkbox" id="check-all-blog-ad">
                            </th>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th class="text-center">Ảnh bìa</th>
                            <th>Danh mục</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($blog as $blogs)
                            <tr class="text-center tr-blog-ad">
                                <th scope="row" class="item-blog-ad">
                                    <input type="checkbox" class="check-item " value="{{$blogs->id}}">
                                </th>
                                <td class="item-blog-ad">{{$blogs->id}}</td>
                                <td class="item-blog-ad">{{$blogs->title}}</td>

                                <td><img class="img-responsive mb-5" style="width: 200px"
                                         src="{{$blogs->thumbnail}}"
                                         alt=""></td>
                                <td class="item-blog-ad">{{$blogs->category}}</td>
                                <td class="item-blog-ad"><a style="text-decoration: none; " href="{{route('blog.show',$blogs->id)}}">Chi
                                        tiết</a></td>
                                <td class="item-blog-ad">{{$blogs->status}}</td>
                                <td class="item-blog-ad">{{$blogs->created_at}}</td>
                                <td class="item-blog-ad">{{$blogs->updated_at}}</td>

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
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group btn-choice-blog" id="select-action">
                            <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-blog">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

