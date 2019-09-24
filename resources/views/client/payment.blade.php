@extends('client.layout.master')
@section('content')
    <div class="header clearfix">
        <h1 class="text-muted text-center p-5">Xác nhận đơn hàng</h1>
    </div>
    <div class="table-responsive d-flex justify-content-center">
        <form action="/payment" id="create_form" method="post" class="mb-2">
            @csrf
            <input class="d-none" id="order_id" name="order_id" type="text" value="{{$orderID}}"/>
            <input class="d-none" id="amount" name="amount" type="number" value="{{$price}}"/>
            <input class="d-none"  name="user_id" type="text"/>
            <div><b>Mã đơn hàng:</b> {{$orderID}}</div>
            <div><b>Tên khách hàng:</b> Phan Hoài Nam</div>
            <div><b>Tên huấn luyện viên:</b> {{$ptName}}</div>
            <div><b>Thời gian:</b> {{$time}}</div>
            <div><b>Thời hạn:</b> {{$duration}}</div>
            <div><b>Số tiền cần thanh toán:</b> {{number_format($price,0 ,'.' ,'.').' VNĐ'}}</div>
            <div class="form-group">
                <label for="language"><b>Ngôn ngữ: </b></label>
                <select name="language" id="language" class="form-control">
                    <option value="vn">Tiếng Việt</option>
                    <option value="en">English</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mr-2">Thanh toán</button>
            </div>
        </form>
@endsection
