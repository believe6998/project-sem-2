@extends('client.layout.master')
@section('content')
    <div class="main-body-index" style="background-color: #fefefe">
        <div class="row">
            <div class="col-7 text-center" style="padding-top: 170px">
                <h2 style="color: blue">Trước Tiên</h2>
                <h4>Hãy cung cấp một số thông tin</h4>
                <div class="row">
                    <div class="form-text col-6" style="padding-left: 200px">
                        Giới tính
                    </div>
                    <div class="col-6" style="padding-right: 200px">
                        <input type="radio"name="sex_section"id="male"value="male" class="sex_section">
                        <i class="fas fa-male fa-3x" style="padding-right: 40px"></i>
                        <input type="radio"name="sex_section"id="female"value="female" class="sex_section">
                        <i class="fas fa-female fa-3x"></i>
                    </div>
                    <div class="form-text col-6" style="padding-left: 200px">
                        Cân Nặng
                    </div>
                    <div class="col-6" style="padding-right: 200px">
                        <input type="number"name="weight"id="weight"value="weight" class="input-mini-all">
                        <span class="span">kg</span>
                    </div>
                    <div class="form-text col-6" style="padding-left: 200px">
                        Chiều Cao
                    </div>
                    <div class="col-6" style="padding-right: 200px">
                        <input type="number"name="height"id="height"value="height" class="input-mini-all">
                        <span class="span">cm</span>
                    </div>
                    <div class="form-text col-6" style="padding-left: 200px">
                        Tuổi
                    </div>
                    <div class="col-6" style="padding-right: 250px">
                        <input type="number"name="height"id="height"value="height" class="input-mini-all">
                    </div>
                    <div class="form-text col-6" style="padding-left: 200px">
                        Mức Độ Luyện Tập
                    </div>
                    <div class="col-6" style="padding-right: 210px">
                        <select class="input-mini-all-2">
                            <option value="">Không Luyện Tập</option>
                            <option value="">Ít Luyện Tập</option>
                            <option value="">Tập Luyện Vừa Phải</option>
                            <option value="">Thường Xuyên Tập Luyện</option>
                        </select>
                    </div>
                </div>
                <div class="btn-index-body">
                    <a href="index-body-3"><button type="button" class="btn btn-primary">TIẾP TỤC</button></a>
                    <a href=""><button type="button" class="btn btn-light">TRỞ lẠI</button></a>
                </div>
            </div>
            <div class="col-5">
                <img src="http://www.liamhorne.co.uk/wp-content/uploads/2016/10/Liam-cut-out-without-lump.png" class="img-body-index" alt="...">
            </div>
        </div>
    </div>
@endsection

