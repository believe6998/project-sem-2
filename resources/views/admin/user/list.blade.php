@extends('admin.layout.master')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Danh sách nguời dùng</h2></div>
            <div class="card-body card-hd-list-category">

                <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/user/create"><i
                            class="fas fa-plus-square"></i> Thêm người dùng</a></h5>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ Email</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr class="text-center">
                                <td >{{$item->id}}</td>
                                <td>{{$item->firstName}}</td>
                                <td>{{$item->lastName}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6 "><a href="{{route('user.edit',$item->id)}}"
                                                               class="text-primary ml-2"><i class="fas fa-edit"></i></a>
                                        </div>

                                        <div class="col-6"><a class="btn-delete-user text-danger"
                                                              href="javascript:void(0)"
                                                              id="btn-delete-user{{$item->id}}"><i
                                                    class="fas fa-trash-alt"></i></a></div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
                <nav class="navigation-control d-flex justify-content-end" aria-label="Page navigation example">
                    {{$list->links()}}
                </nav>
            </div>

        </div>
    </div>

    {{--    <div class="container-fluid">--}}

    {{--        <!-- Page Heading -->--}}
    {{--        <h1 class="h3 mb-2 text-gray-800">Tables</h1>--}}
    {{--        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more--}}
    {{--            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official--}}
    {{--                DataTables documentation</a>.</p>--}}

    {{--        <!-- DataTales Example -->--}}
    {{--        <div class="card shadow mb-4">--}}
    {{--            <div class="card-header py-3">--}}
    {{--                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>--}}
    {{--            </div>--}}
    {{--            <div class="card-body">--}}
    {{--                <div class="table-responsive">--}}
    {{--                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
    {{--                        <thead>--}}
    {{--                        <tr>--}}
    {{--                            <th>ID</th>--}}
    {{--                            <th>FirstName</th>--}}
    {{--                            <th>LastName</th>--}}
    {{--                            <th>Phone</th>--}}
    {{--                            <th>Gender</th>--}}
    {{--                            <th>Email</th>--}}
    {{--                            <th>Ngày thêm</th>--}}
    {{--                            <th>Ngày cập nhật</th>--}}
    {{--                            <th></th>--}}
    {{--                        </tr>--}}
    {{--                        </thead>--}}
    {{--                        <tbody>--}}
    {{--                        @foreach($list as $item)--}}
    {{--                            <tr>--}}
    {{--                                <td>{{$item->id}}</td>--}}
    {{--                                <td>{{$item->firstName}}</td>--}}
    {{--                                <td>{{$item->lastName}}</td>--}}
    {{--                                <td>{{$item->phone}}</td>--}}
    {{--                                <td>{{$item->gender}}</td>--}}
    {{--                                <td>{{$item->email}}</td>--}}
    {{--                                <td>{{$item->created_at}}</td>--}}
    {{--                                <td>{{$item->updated_at}}</td>--}}
    {{--                                <td>--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-6 "><a href="{{route('user.edit',$item->id)}}" class="text-primary"><i class="fas fa-edit"></i></a></div>--}}
    {{--                                        <div class="col-6"><a class="btn-delete-user text-danger" href="javascript:void(0)" id="btn-delete-user{{$item->id}}"><i class="fas fa-trash-alt"></i></a></div>--}}
    {{--                                    </div>--}}
    {{--                                </td>--}}
    {{--                            </tr>--}}
    {{--                            @endforeach--}}
    {{--                        </tbody>--}}
    {{--                    </table>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
