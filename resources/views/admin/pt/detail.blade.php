@extends('admin.layout.master')
@section('content')
<div class="container">
    <div class="card-header text-center"><h2 class="mt-1 font-weight-bold">Chi Tiết PT</h2></div>
    <div class="card-body card-hd-list-category">

        <h5 class="m-0 font-weight-bold text-primary mt-2 "><a href="/admin/pt/edit"><i
                        class="fas fa-edit"></i> Sửa PT</a></h5>
        <div class="table-responsive mt-3">
            <div>
                <h3 class="name-pt">
                    {{$PersonalTraining->name}}
                </h3>
            </div>
            <div style="padding-left: 250px">
                <img src="{{$PersonalTraining->image}}" alt="PT" class="center" width="70%">
            </div>
            <div>
                <h4 style="color: #1f6fb2">Chi Tiết:</h4>
                <div>
                    <p>
                        {{$PersonalTraining->description}}
                    </p>
                </div>
            </div>
            <div>
                <h4 style="color: #1f6fb2">Kinh Nghiệm:</h4>
                <div>
                    <p>
                        {{$PersonalTraining->experience}}
                    </p>
                </div>
            </div>
            <div>
                <h4 style="color: #1f6fb2">Chuyên Môn:</h4>
                <div>
                    <p>
                        {{$PersonalTraining->qualification}}
                    </p>
                </div>
            </div>
            <div>
                <h4 style="color: #1f6fb2">Rating:</h4>
                <div>
                    <p style="color:red">
                        {{$PersonalTraining->rating}}
                    </p>
                </div>
            </div>
        </div>

</div>
@endsection
