@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-2 font-weight-bold">CHỈNH SỬA ĐƠN HÀNG</h2>
            </div>
            <form action="{{route('orders.update', $orders->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body card-hd-list-category">
                    <h5 class="m-0  text-primary mt-2 "><a href="/admin/orders"><i class="fas fa-bars"></i> Danh sách đơn hàng</a></h5>

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">user_id</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   value="{{$orders->user_id}}" name="user_id" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">personal_training_id</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   name="personal_training_id" value="{{$orders->personal_training_id}}" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">personal_training_time_id</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   name="personal_training_time_id" value="{{$orders->personal_training_time_id}}" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">duration_id</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   name="duration_id" value="{{$orders->duration_id}}" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">Giád</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   name="price" value="{{$orders->price}}" required>
                        </div>
                    </div>
                    <div class="row mt-3 " style="padding-left: 39%;">
                        <button class="btn btn-primary" type="submit">Xác nhận</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection


