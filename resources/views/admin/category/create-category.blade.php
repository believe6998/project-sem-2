@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 font-weight-bold">THÊM DANH MỤC</h3>
            </div>
            <div class="card-body card-hd-list-category">
                <h5 class="m-0  text-primary mt-2 "><a href="/admin/category"><i class="fas fa-bars"></i> Danh sách danh mục</a></h5>
                <form action="/admin/category" method="post">
                    @csrf
                    <div class="form-row d-flex justify-content-center mb-5 form-cr-cate-ad">
                        <div class="col-3 mt-5 mb-5">
                            <h5 class="font-weight-bold">Tên danh mục</h5>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Nhập tên danh mục" name="name" required>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-acept-cr-ad-ct ">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
