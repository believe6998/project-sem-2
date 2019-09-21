@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h3 class="mt-2 font-weight-bold">DANH SÁCH NGƯỜI DÙNG ĐÃ XÓA</h3></div>
            <div class="card-body card-hd-list-category">

                <h5 class="m-0  text-primary mt-2 "><a href="/admin/home"><i
                                class="fas fa-bars"></i> Danh sách người dùng</a></h5>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="">
                            <th scope="col">
                                <input type="checkbox" id="check-all-home-ad">
                            </th>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Trạng thái</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr class="">
                                <th scope="row">
                                    <input type="checkbox" class="check-item-home" value="{{$item->id}}">
                                </th>
                                <td >{{$item->id}}</td>
                                <td><img width="100px"
                                         src="{{$item->image}}"
                                         alt="">
                                </td>
                                <td >{{$item->title}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6 "><a href="{{route('home.edit',$item->id)}}"
                                                               class="text-primary ml-2"><i class="fas fa-edit"></i></a>
                                        </div>

                                        <div class="col-6"><a class="btn-delete-home text-danger"
                                                              href="javascript:void(0)"
                                                              id="btn-delete-home{{$item->id}}"><i
                                                        class="fas fa-trash-alt"></i></a></div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <nav class="navigation-control d-flex justify-content-end" aria-label="Page navigation example">
                    {{$list->links()}}
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
                        <div class="form-group btn-choice-cate" id="select-action">
                            <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-home">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
