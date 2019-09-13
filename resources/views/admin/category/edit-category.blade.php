@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-1 font-weight-bold">Chỉnh sửa danh mục</h2>
            </div>
            <form action="{{route('category.update',$adCategory->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body card-hd-list-category">
                    <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/category"><i
                                class="fas fa-bars"></i> Danh sách danh mục</a></h5>

                    <div class="form-row d-flex justify-content-center mb-5 form-cr-cate-ad">
                        <div class="col-3 mt-5 mb-5">
                            <h5 class="font-weight-bold">Tên danh mục</h5>
                            <input type="text" class="form-control" value="{{$adCategory->name}}" name="name" required>
                            @if ($errors->has('name'))--}}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
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
