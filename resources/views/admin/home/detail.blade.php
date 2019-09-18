@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Chi Tiết Bài Viết</h2></div>
        <div class="card-body card-hd-list-category">

            <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/home/edit"><i
                            class="fas fa-edit"></i> Sửa Bài Viết</a></h5>
            <div class="table-responsive mt-3">
                <div>
                    <h3 class="name-pt">
                        {{$home->title}}
                    </h3>
                </div>
                <div style="padding-left: 250px">
                    <img src="{{$home->image}}" alt="PT" class="center" width="70%">
                </div>
                <div>
                    <h4 style="color: #1f6fb2">Chi Tiết:</h4>
                    <div>
                        <p>
                            {{$home->description}}
                        </p>
                    </div>
                </div>
                <div>
                    <h4 style="color: #1f6fb2">Content:</h4>
                    <div>
                        <p>
                            {{$home->content}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
@endsection

