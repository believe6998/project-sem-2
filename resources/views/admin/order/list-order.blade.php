@extends('admin.layout.master')
@section('content')


    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h2 class="mt-2 font-weight-bold">DANH SÁCH ĐƠN HÀNG CHỜ PHÊ DUYỆT</h2></div>
            <div class="card-body card-hd-list-category">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mb-1  text-primary mt-2 "><a href="/admin/orders">
                                <i class="far fa-trash-alt"></i> Đơn hàng  đã duyệt</a></h5>
                    </div>
                    <div class="col-6">
                        <h5 class="mb-1  text-primary mt-2 d-flex justify-content-end"><a href="/admin/deleted-order">
                                <i class="far fa-trash-alt"></i> Đơn hàng đã xóa</a></h5>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">
                                <input type="checkbox" id="check-all-order-ad">
                            </th>
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Tên huấn luyện viên</th>
                            <th>Mã thời gian</th>
                            <th>Thời hạn</th>
                            <th>Giá</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $item)
                            <tr class="text-center user-tr-item-ad">
                                <th scope="row " class="item-user-ad">
                                    <input type="checkbox" class="check-item " value="{{$item->id}}">
                                </th>
                                <td class="item-user-ad">{{$item->id}}</td>
                                <td class="item-user-ad">{{$item->user->lastName}}</td>
                                <td class="item-user-ad">{{$item->personal_training->name}}</td>
                                <td class="item-user-ad">{{$item->personal_training_time_id}}</td>
                                <td class="item-user-ad">{{$item->duration->duration}}</td>
                                <td class="item-user-ad">{{$item->price}}</td>
                                <td class="item-user-ad">{{$item->created_at}}</td>
                                <td class="item-user-ad">{{$item->updated_at}}</td>
                                <td class="item-user-ad">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="{{route('orders.edit',$item->id)}}" val class="text-success btn-confirm-order" id="btn-confirm-order{{$item->id}}"><i class="fas fa-check"></i></a>
                                        </div>

                                        <div class="col-4"><a class="btn-delete-order text-danger"
                                                              href="javascript:void(0)"
                                                              id="btn-delete-order{{$item->id}}"><i
                                                    class="fas fa-trash-alt"></i></a></div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <nav class="navigation-control d-flex justify-content-end" aria-label="Page navigation example">
                    {{$orders->links()}}
                </nav>
            </div>
            <div class="card-footer">
                <div class="row mt-3">
                    <div class="col-3 mt-2">
                        <div class="form-group mr-3">
                            <select class="form-control mr-2" id="select-action">
                                <option value="0">--Chọn thao tác--</option>
                                <option value="-1">Xoá</option>
                                <option value="2">Xác nhận đơn hàng</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group btn-choice-cate" id="select-action">
                            <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-order">Xác nhận</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection




