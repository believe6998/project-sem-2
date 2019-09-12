@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Danh sách danh mục</h2></div>
            <div class="card-body card-hd-list-category">

                <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/category/create"><i
                            class="fas fa-plus-square"></i> Thêm danh mục</a></h5>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="tr-category-ad">
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($category as $item)
                            <tr class="tr-category-ad-item">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6 "><a href="{{route('category.edit',$item->id)}}"
                                                               class="text-primary btn-edit-ct-ad"><i
                                                    class="fas fa-edit ml-3"></i></a></div>
                                        <div class="col-6"><a class="btn-delete-ad-category btn-dlt-ct-ad text-danger"
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

        </div>
    </div>
@endsection

