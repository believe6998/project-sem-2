@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-2 font-weight-bold">CHỈNH SỬA ĐƠN HÀNG</h2>
            </div>
            <form action="{{route('time-pt.update', $time_pt->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body card-hd-list-category">
                    <h5 class="m-0  text-primary mt-2 "><a href="/admin/time-pt"><i class="fas fa-bars"></i> Danh sách thời gian PT</a></h5>

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">ID thời gian</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   value="{{$time_pt->time_id}}" name="time_id" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">ID PT</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   name="personal_training_id" value="{{$time_pt->personal_training_id}}" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">Status</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   name="status" value="{{$time_pt->status}}" required>
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

