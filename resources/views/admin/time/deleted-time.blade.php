@extends('admin.layout.master')
@section('content')


    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h2 class="mt-2 font-weight-bold">DANH SÁCH THỜI GIAN ĐÃ XÓA</h2></div>
            <div class="card-body card-hd-list-category">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mb-1  text-primary mt-2 "><a href="/admin/time"><i class="fas fa-bars"></i> Danh sách thời gian</a></h5>

                    </div>

                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">
                                <input type="checkbox" id="check-all-time-ad">
                            </th>
                            <th>ID</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($time as $item)
                            <tr class="text-center user-tr-item-ad">
                                <th scope="row " class="item-user-ad">
                                    <input type="checkbox" class="check-item " value="{{$item->id}}">
                                </th>
                                <td class="item-user-ad">{{$item->id}}</td>
                                <td class="item-user-ad">{{$item->time}}</td>
                                <td class="item-user-ad">{{$item->status}}</td>

                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <nav class="navigation-control d-flex justify-content-end" aria-label="Page navigation example">
                    {{$time->links()}}
                </nav>
            </div>
            <div class="card-footer">
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="form-group mr-3">
                            <select class="form-control mr-2" id="select-action">
                                <option value="0">--Chọn thao tác--</option>
                                <option value="1">Hiển thị</option>
                                {{--                            <option value="1">Hiển thị</option>--}}

                            </select>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group btn-choice-cate" id="select-action">
                            <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-time">Xác nhận</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection




