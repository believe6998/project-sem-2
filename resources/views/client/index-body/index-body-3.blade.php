@extends('client.layout.master')
@section('content')
<div class="main-body-index" style="background-color: #fefefe">
    <div class="row">
        <div class="col-7 text-center" style="padding-top: 170px">
            <h2 style="color: blue">Bây Giờ</h2>
            <h4>Hãy chia sẻ mục tiêu giảm cân của </h4>
            <div class="row">
                <div class="form-text col-6">
                    NGÀY BẮT ĐẦU
                </div>
                <div class="col-6" style="padding-right: 100px">
                    <input type="date"name="weight"id="weight"value="weight" class="input-mini-all-calender">
                    <span class="span"><i class="far fa-calendar-alt"></i></span>
                </div>
                <div class="form-text col-6">
                    BẠN MUỐN GIẢM BAO NHIÊU KG?
                </div>
                <div class="col-6" style="padding-right: 100px">
                    <input type="number"name="height"id="height"value="height" class="input-mini-all">
                    <span class="span">kg</span>
                </div>
                <div class="form-text col-6">
                    TÔI MUỐN
                </div>
                <div class="col-6" style="padding-right: 110px">
                    <select class="input-mini-all-2">
                        <option value="">0,5 KG MỘT TUẦN</option>
                        <option value="">1 KG MỘT TUẦN</option>
                    </select>
                </div>
            </div>
            <div class="btn-index-body">
                <a href="index-body-4"><button type="button" class="btn btn-primary">TIẾP TỤC</button></a>
                <button type="button" class="btn btn-light">TRỞ lẠI</button>
            </div>
        </div>
        <div class="col-5">
            <img src="http://www.liamhorne.co.uk/wp-content/uploads/2016/10/Liam-cut-out-without-lump.png" class="img-body-index" alt="...">
        </div>
    </div>
</div>
@endsection


