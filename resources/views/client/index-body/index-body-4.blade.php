@extends('client.layout.master')
@section('content')
    <div class="main-body-index" style="background-color: #fefefe">
        <div class="row">
            <div class="col-7 text-center" style="padding-top: 170px">
                <h2 style="color: blue">VÀ ĐÂY LÀ KẾT QUẢ</h2>
                <p>Lượng calo để duy trì cân nặng hiện tại</p>
                <p> ----- calories/ngày</p>
                <p>Để giảm ----- kg trong 1 tuần, bạn cần giảm lượng hấp thụ </p>
                <p>mỗi ngày xuống còn ----- calories</p>
                <p>Và bạn sẽ sở hữu cân nặng ----- kg vào ngày</p>
                <p>----------</p>
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



