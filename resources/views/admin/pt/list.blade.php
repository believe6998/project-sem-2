@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Qualification</th>
                            <th>Experience</th>
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
                                <td>{{$item->description}}</td>
                                <td>{{$item->qualification}}</td>
                                <td>{{$item->experience}}</td>
                                <td>{{$item->rating}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6 "><a href="{{route('pt.edit',$item->id)}}"
                                                               class="text-primary"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-6"><a class="btn-delete-pt text-danger"
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
        </div>
    </div>
@endsection
