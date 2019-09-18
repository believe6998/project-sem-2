@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">

        <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Danh sách Bài Viết</h2></div>
        <div class="card-body card-hd-list-category">
            <div class="row">
                <div class="col-6">
                    <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/home/create"><i
                                    class="fas fa-plus-square"></i> Thêm Bài Viết</a></h5>
                </div>
                <div class="col-6">
                    <h5 class="mb-1  text-primary mt-2 d-flex justify-content-end"><a href="/admin/deleted-home">
                            <i class="far fa-trash-alt"></i> Người dùng đã xóa</a></h5>
                </div>
            </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">
                                <input type="checkbox" id="check-all-home-ad">
                            </th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <th scope="row">
                                    <input type="checkbox" class="check-item" value="{{$item->id}}">
                                </th>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                </td>
                                <td><img width="100px"
                                         src="{{$item->image}}"
                                         alt=""></td>
                                <td>{{$item->status}}</td>
                                <td>28-08-2019</td>
                                <td>28-08-2019</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4 "><a href="{{route('home.show',$item->id)}}"
                                                               class="text-primary"><i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                        <div class="col-4 "><a href="{{route('home.edit',$item->id)}}"
                                                               class="text-primary"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-4"><a class="btn-delete-home text-danger"
                                                              href="javascript:void(0)"
                                                              id="btn-delete-home{{$item->id}}"><i
                                                        class="fas fa-trash-alt"></i></a></div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

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
                        <div class="form-group btn-choice-cate" id="select-action" style="padding-left: 200px">
                            <button type="button" class="btn btn-outline-primary " id="btn-apply-all-home">Xác nhận</button>

                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection

