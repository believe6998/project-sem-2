@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h2 class="mt-2 font-weight-bold">PT ĐÃ XÓA</h2></div>
            <div class="card-body card-hd-list-category">
                <div class="row">

                    <div class="col-6 mb-1"> <h5 class="mt-2  text-primary  "><a href="/admin/pt"><i class="far fa-plus-square"></i> Danh sách PT</a></h5></div>


                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="tr-dltd-pt-ad-item text-center">
                            <th scope="row">
                                <input type="checkbox" id="check-all-pt-ad">
                            </th>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Create_at</th>
                            <th>Updated_at</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr class="tr-pt-ad-item">
                                <th scope="row" class="item-pt-ad">
                                    <input type="checkbox" class="check-item " value="{{$item->id}}">
                                </th>
                                <td class="item-pt-ad">{{$item->id}}</td>
                                <td><img width="100px"
                                         src="{{$item->image}}"
                                         alt="">
                                </td>
                                <td class="item-pt-ad">{{$item->name}}</td>
                                <td class="item-pt-ad">{{$item->rating}}</td>
                                <td class="item-pt-ad">{{$item->status}}</td>
                                <td class="item-pt-ad">{{$item->created_at}}</td>
                                <td class="item-pt-ad">{{$item->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6 d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            {{$list->links()}}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="form-group mr-3">
                            <select class="form-control mr-2" id="select-action">
                                <option value="0">--Chọn thao tác--</option>
                                <option value="1">Hiển thị</option>

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

