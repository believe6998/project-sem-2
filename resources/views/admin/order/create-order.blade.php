@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 font-weight-bold">THÊM ĐƠN HÀNG</h3>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class="m-0  text-primary mt-2 "><a href="/admin/orders"><i class="fas fa-bars"></i> Danh sách đơn hàng</a></h5>
                <form action="/admin/orders" method="post">
                    @csrf

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">user_id</h5>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Nhập user_id" name="user_id" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">personal_training_time_id</h5>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Nhập personal_training_time_id" name="personal_training_time_id" required>
                        </div>
                    </div>

                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">duration_id</h5>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Nhập duration_id" name="duration_id" required>
                        </div>
                    </div>
                    <div class="row mt-3 " style="padding-left: 39%;">
                        <button class="btn btn-primary" type="submit">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



