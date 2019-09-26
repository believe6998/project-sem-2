@extends('client.layout.master')
@section('content')
    <div class="main-body-index" style="background-color: #fefefe">
        <div class="row">
            <div class="col-7 text-center" style="padding-top: 170px">
                <h2 class="text-primary font-weight-bold">VÀ ĐÂY LÀ KẾT QUẢ</h2>
                <p>Lượng calo để duy trì cân nặng hiện tại</p>
                <p> <strong class="text-primary">{{number_format($calo, 0, '.', '')}}</strong> calories/ngày</p>
                <p>Để giảm <strong class="text-primary font-weight-bold">{{$week}} kg</strong> trong 1 tuần, bạn cần giảm lượng hấp thụ </p>
                <p>mỗi ngày xuống còn <strong class="text-primary font-weight-bold">{{number_format($down_calo, 0, '.', '')}}</strong> calories</p>
                <p>Và bạn sẽ sở hữu cân nặng <strong class="text-primary font-weight-bold">{{$goal_weight}} kg</strong> vào ngày</p>
                <strong class="text-primary font-weight-bold">{{date('d-m-Y', strtotime($date))}}</strong>
                <div class="btn-index-body">
                    <button type="button" class="btn btn-primary">LÀM lẠI</button>
                </div>
            </div>
            <div class="col-5">
                <img src="http://www.liamhorne.co.uk/wp-content/uploads/2016/10/Liam-cut-out-without-lump.png" class="img-body-index" alt="...">
            </div>
        </div>
    </div>
@endsection



