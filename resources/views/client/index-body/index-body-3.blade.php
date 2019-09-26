@extends('client.layout.master')
@section('content')
    <div class="main-body-index" style="background-color: #fefefe">
        <div class="row">
            <div class="col-7 text-center" style="padding-top: 170px">
                <h2 style="color: blue">Bây Giờ</h2>
                <h4>Hãy chia sẻ mục tiêu giảm cân của </h4>
                <form action="/index-body-4" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-text col-6">
                            NGÀY BẮT ĐẦU
                        </div>
                        <input type="number" name="sex_section" value="{{$sex_section}}" class="d-none">
                        <input type="number" name="weight" value="{{$weight}}" class="d-none">
                        <input type="number" name="height" value="{{$height}}" class="d-none">
                        <input type="number" name="age" value="{{$age}}" class="d-none">
                        <input type="number" name="training" value="{{$training}}" class="d-none">
                        <div class="col-6" style="padding-right: 100px">
                            <input type="date" name="date" class="input-mini-all-calender">
                            <span class="span"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <div class="form-text col-6">
                            BẠN MUỐN GIẢM BAO NHIÊU KG?
                        </div>
                        <div class="col-6" style="padding-right: 160px">
                            <input type="number" name="next_weight" class="input-mini-all">
                            <span class="span">kg</span>
                        </div>
                        <div class="form-text col-6">
                            TÔI MUỐN
                        </div>
                        <div class="col-6" style="padding-right: 140px">
                            <select name="week" style="height: 50px; font-size: 15px;border-radius: 5px">
                                <option value="0.5">0,5 KG MỘT TUẦN</option>
                                <option value="1">1 KG MỘT TUẦN</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-index-body">
                        <button type="submit" class="btn btn-primary">TIẾP TỤC</button>
                        <button type="button" class="btn btn-light">TRỞ LẠI</button>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <img src="http://www.liamhorne.co.uk/wp-content/uploads/2016/10/Liam-cut-out-without-lump.png"
                     class="img-body-index" alt="...">
            </div>
        </div>
    </div>
@endsection


