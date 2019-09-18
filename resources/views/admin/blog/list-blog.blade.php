@extends('admin.layout.master')
@section('content')
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-center"><h3 class="mt-1 font-weight-bold">DANH SÁCH BLOG</h3></div>
                <div class="card-body card-hd-list-category">

                    <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/blog/create"><i
                                class="fas fa-plus-square"></i> Thêm mới blog</a></h5>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th>Ảnh bìa</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Chi tiết</th>
                                <th>Ngày thêm</th>
                                <th>Ngày cập nhật</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blog as $blogs)
                                <tr class="text-center">
                                    <td>{{$blogs->id}}</td>
                                    <td>{{$blogs->title}}</td>
                                    <td>{{$blogs->category}}</td>
                                    <td><img class="img-responsive"
                                             src="{{$blogs->thumbnail}}"
                                             alt=""></td>
                                    <td>{{$blogs->detail}}</td>
                                    <td>{{$blogs->status}}</td>
                                    <td><a style="text-decoration: none" href="{{route('blog.show',$blogs->id)}}">Chi tiết</a></td>
                                    <td>{{$blogs->created_at}}</td>
                                    <td>{{$blogs->updated_at}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6 "><a href="{{route('blog.edit',$blogs->id)}}"
                                                                   class="text-primary ml-2"><i class="fas fa-edit"></i></a>
                                            </div>

                                            <div class="col-6"><a class="btn-delete-blog text-danger mr-5"
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

            </div>
        </div>

@endsection

