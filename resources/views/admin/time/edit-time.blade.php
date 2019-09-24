@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-2 font-weight-bold">CHỈNH SỬA THỜI GIAN</h2>
            </div>
            <form action="{{route('time.update',$time->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body card-hd-list-category">
                    <h5 class="m-0  text-primary mt-2 "><a href="/admin/time"><i class="fas fa-bars"></i> Danh sách thời gian</a></h5>

                    <div class="form-row d-flex justify-content-center mb-5 form-cr-cate-ad">
                        <div class="col-3 mt-5 mb-5">
                            <h5 class="font-weight-bold">Thời gian</h5>
                            <input type="text" class="form-control" value="{{$time->time}}" name="time" required>

                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-acept-cr-ad-ct ">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection
