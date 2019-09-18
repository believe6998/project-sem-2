@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">

        <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Danh sách PT</h2></div>
        <div class="card-body card-hd-list-category">

            <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/pt/create"><i
                            class="fas fa-plus-square"></i> Thêm PT</a></h5>
            <div class="table-responsive mt-3">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Create_at</th>
                        <th>Updated_at</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><img width="100px"
                                     src="{{$item->image}}"
                                     alt="">
                            </td>
                            {{--                                <td>{{$item->image}}</td>--}}
                            <td>{{$item->name}}</td>
                            <td>{{$item->rating}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-4 "><a href="{{route('pt.show',$item->id)}}"
                                                           class="text-primary"><i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="col-4 "><a href="{{route('pt.edit',$item->id)}}"
                                                           class="text-primary"><i class="fas fa-edit"></i></a>
                                    </div>
                                    <div class="col-4"><a class="btn-delete-pt text-danger"
                                                          href="javascript:void(0)"
                                                          id="btn-delete-pt{{$item->id}}"><i
                                                    class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <nav aria-label="Page navigation example">
                            {{$list->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection
