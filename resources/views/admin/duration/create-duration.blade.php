@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 font-weight-bold">THÊM THỜI HẠN</h3>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class="m-0  text-primary mt-2 "><a href="/admin/duration"><i class="fas fa-bars"></i> Danh sách thời hạn</a></h5>
                <form action="/admin/duration" method="post">
                    @csrf

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">Thời hạn</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Nhập thời hạn" name="duration" required>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-3">
                            <h5 class="font-weight-bold">Giá</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Nhập giá" name="price" required>
                        </div>
                    </div>
                   <div class="row mt-3 " style="padding-left: 40%;">
                   <button class="btn btn-primary" type="submit">Xác nhận</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
@endsection


