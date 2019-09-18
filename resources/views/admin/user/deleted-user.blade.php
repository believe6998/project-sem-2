@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h3 class="mt-2 font-weight-bold">DANH SÁCH NGƯỜI DÙNG ĐÃ XÓA</h3></div>
            <div class="card-body card-hd-list-category">

                <h5 class="m-0  text-primary mt-2 "><a href="/admin/user"><i
                            class="fas fa-bars"></i> Danh sách người dùng</a></h5>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="tr-category-ad">
                            <th scope="col">
                                <input type="checkbox" id="check-all-user-ad">
                            </th>
                            <th>ID</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ Email</th>
                            <th>Trạng thái</th>
                            <th>Ngày thêm</th>
                            <th>Ngày xóa</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr class="user-dlt-item-ad text-center">
                                <th scope="row" class="item-user-ad">
                                    <input type="checkbox" class="check-item " value="{{$item->id}}">
                                </th>
                                <td class="item-user-ad">{{$item->id}}</td>
                                <td class="item-user-ad">{{$item->firstName}}</td>
                                <td class="item-user-ad">{{$item->lastName}}</td>
                                <td class="item-user-ad">{{$item->phone}}</td>
                                <td class="item-user-ad">{{$item->gender}}</td>
                                <td class="item-user-ad">{{$item->email}}</td>
                                <td class="item-user-ad">{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>

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
                            <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-user">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


