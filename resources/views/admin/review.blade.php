@extends('admin.layout.master')
@section('content')



    <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel"
         aria-hidden="true">

        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class="modal-dialog modal-full-height modal-bottom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title  w-100" id="myModalLabel">
                        <strong style="float: left">Rate </strong>
                        <div class="star-ratings-sprite-pt-detail"><span
                                    class="star-ratings-sprite-rating-pt-detail rated "></span>
                        </div>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb-5 ">
                    <h4 style="color: black"> Nội dung</h4>
                    <div class="row" style="font-size: 15px;width: 100%;">
                        <p class="content1" style="display: inline-block;width: 60%;word-wrap: break-word;      /* IE 5.5-7 */
      white-space: -moz-pre-wrap; /* Firefox 1.0-2.0 */
      white-space: pre-wrap; margin-left: 3%    ">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade " id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Danh sách đã duyệt</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(count($reviewsuccsess)!=0)
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Người đánh giá</th>
                                <th>Huấn luyện viên</th>
                                <th>Sao</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($reviewsuccsess as $item)
                                <tr class="text-center">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->firstName}} {{$item->user->lastName}}</td>
                                    <td>{{$item->personal_training->name}}</td>
                                    <td>{{$item->rating}}</td>
                                    <td>
                                        <div class="col-3 "><a id="btn-show-{{$item->id}}"
                                                               href="javascript:void(0)"
                                                               class="text-primary btn-show btn-hi"><i
                                                        class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
                <div class="row ml-3 mt-5">

                    {{$reviewsuccsess->links()}}
                </div>
                @else
                    <div style="text-align: center">
                        <h3>Không có đánh giá nào</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>






    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Danh sách đánh giá</h2></div>
            <div class="card-body card-hd-list-category">
                <h5 style="cursor: pointer ;display: inline-block " data-toggle="modal" data-target="#centralModalSm"
                    class="m-0 font-weight-bold text-primary mt-2 "><i class="fas fa-plus-square"></i> Danh sách đã xoá
                </h5>
                <h5 style="cursor: pointer;float:right; display: inline-block " data-toggle="modal"
                    data-target="#modal2"
                    id="showmodal" class="m-0 font-weight-bold text-primary mt-2 "><i class="fas fa-plus-square"></i>
                    Danh
                    sách đã duyệt</h5>
                <div class="table-responsive mt-3">

                    @if(count($review)!=0)
                        <table style="  maxwidth: 100%;   word-wrap:break-word" class="table table-bordered"
                               id="dataTable" width="100%"
                               cellspacing="0">
                            <thead>
                            <tr class="text-center">
                                <th scope="col">
                                    <input type="checkbox" id="check-all"> All
                                </th>
                                <th>ID</th>
                                <th>Người đánh giá</th>
                                <th>Huấn luyện viên</th>
                                <th>Sao</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($review as $item)
                                <tr class="text-center">
                                    <th scope="row">
                                        <input type="checkbox" class="check-item" value="{{$item->id}}">
                                    </th>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->firstName}} {{$item->user->lastName}}</td>
                                    <td>{{$item->personal_training->name}}</td>
                                    <td>{{$item->rating}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-3 "><a id="btn-show-{{$item->id}}"
                                                                   href="javascript:void(0)"
                                                                   class="text-primary btn-show"><i
                                                            class="fas fa-angle-double-right"></i></a>
                                            </div>
                                            <div class="col-6 "><a href="{{route('review.edit',$item->id)}}"
                                                                   class="text-primary">
                                                    <button class="btn  btn-primary">Phê duyệt</button>
                                                </a>
                                            </div>

                                            <div style="cursor: pointer"
                                                 class=" col-3">
                                                <a id="btn-delete-review{{$item->id}}"
                                                   class="text-danger btn-delete-review"
                                                   href="javascript:void(0)"><i
                                                            class="fas fa-trash-alt"></i></a></div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                </div>
                <div class="row ml-3 mt-5 mb-5">
                    <div class="col-3 mr-3">
                        <select class="form-control mr-2" id="select-action">
                            <option value="5">--Chọn thao tác--</option>
                            <option value="-1">Xoá</option>
                            <option value="1"> Phê duyệt</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <button style="margin: 0!important;" type="button" id="btn-apply-all"
                                class="btn btn-primary btn-md">Apply to all
                        </button>

                    </div>
                    <div style="margin-left: 50%">                {{$review->links()}}
                    </div>
                </div>

                @else
                    <div style="text-align: center">
                        <h3>Không có đánh giá nào</h3>
                    </div>
                @endif

            </div>
        </div>
    </div>
    @if(session('success'))
        <div style="position: fixed;top: 89%;left: 3% ;z-index: 10;"
             class="alert alert-success alert-dismissible fade show"
             role="alert">
            <strong> Thông báo</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade " id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Danh sách đã xoá</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(count($reviewdelete)!=0)
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr class="text-center">
                                <th scope="col">
                                    <input type="checkbox" id="check-all"> All
                                </th>
                                <th>ID</th>
                                <th>Người đánh giá</th>
                                <th>Huấn luyện viên</th>
                                <th>Sao</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($reviewdelete as $item)
                                <tr class="text-center">
                                    <th scope="row">
                                        <input type="checkbox" class="check-item" value="{{$item->id}}">
                                    </th>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->firstName}} {{$item->user->lastName}}</td>
                                    <td>{{$item->personal_training->name}}</td>
                                    <td>{{$item->rating}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-3 "><a id="btn-show-{{$item->id}}"
                                                                   href="javascript:void(0)"
                                                                   class="text-primary btn-show"><i
                                                            class="fas fa-angle-double-right"></i></a>
                                            </div>
                                            <div class="col-7"><a href="{{route('review.edit2',$item->id)}}"
                                                                  class="text-primary">
                                                    <button class="btn  btn-primary">Khôi phục</button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
                <div class="row ml-3 mt-5 mb-5">
                    <div class="col-3 mr-3">
                        <select class="form-control mr-2" id="select-action">
                            <option value="0">Phê duyệt</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <button style="margin: 0!important;" type="button" id="btn-apply-all"
                                class="btn btn-primary btn-md">Apply to all
                        </button>

                    </div>
                    <div style="margin-left: 50%">                {{$review->links()}}
                    </div>
                </div>
                @else
                    <div style="text-align: center">
                        <h3>Không có đánh giá nào</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <div class="modal fade right" id="fullHeightModalbotom" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel"
         aria-hidden="true">

        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class="modal-dialog modal-full-height modal-bottom" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
@endsection
