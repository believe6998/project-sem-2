@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h3 class="mt-2 font-weight-bold">DANH SÁCH DANH MỤC</h3></div>
            <div class="card-body card-hd-list-category">
                <div class="row">
                    <div class="col-6 mb-1"> <h5 class="m-0 text-primary mt-2 "><a href="/admin/category/create"><i class="far fa-plus-square"></i></i> Thêm danh mục</a></h5></div>
                    <div class="col-6 mb-1">
                        <h5 class="m-0  text-primary mt-2 d-flex justify-content-end"><a href="/admin/deleted-category">
                                <i class="far fa-trash-alt"></i> Danh mục đã xóa</a></h5>
                    </div>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="tr-category-ad">
                            <th scope="col">
                                <input type="checkbox" id="check-all-category-ad">
                            </th>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($category as $item)
                            <tr class="tr-category-ad-item">
                                <th scope="row">
                                    <input type="checkbox" class="check-item ml-3" value="{{$item->id}}">
                                </th>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <div class="row ml-1">
                                        <div class="col-6 "><a href="{{route('category.edit',$item->id)}}"
                                                               class="text-primary btn-edit-ct-ad"><i
                                                    class="fas fa-edit mr-3"></i></a></div>
                                        <div class="col-6"><a class="btn-delete-ad-category btn-dlt-ct-ad text-danger "
                                                              href="javascript:void(0)"
                                                              id="btn-delete-ad-category{{$item->id}}"><i
                                                    class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <nav class="navigation-control d-flex justify-content-end" aria-label="Page navigation example">
                    {{$category->links()}}
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
                        <button type="button" class="btn btn-outline-primary  " id="btn-apply-all-pt">Xác nhận</button>

                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

