@extends('client.layout.master')
@section('content')
    @php
        $vnp_HashSecret = "DUNDLUFVPSUAWWAWOTPPRTZIPIBBFWKJ";
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }

        //$secureHash = md5($vnp_HashSecret . $hashData);
        $secureHash = hash('sha256',$vnp_HashSecret . $hashData);
    @endphp
        <div style="padding-left: 650px">
            <div class="header clearfix pt-5">
                <h1 class="text-primary">Kết quả thanh toán</h1>
            </div>
            <div class="table-responsive">
                <div class="form-group pt-3">
                    <label class="font-weight-bold">Mã đơn hàng:</label>
                    <label>{{Request::get('vnp_TxnRef')}}</label>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Số tiền:</label>
                    <label>{{number_format(Request::get('vnp_Amount')/100,0 ,'.' ,'.').' VNĐ'}}</label>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Nội dung thanh toán:</label>
                    <label>{{Request::get('vnp_OrderInfo')}}</label>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Mã GD Tại VNPAY:</label>
                    <label>{{Request::get('vnp_TransactionNo')}}</label>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Mã Ngân hàng:</label>
                    <label>{{Request::get('vnp_BankCode')}}</label>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Thời gian thanh toán:</label>
                    <label>{{date('d-m-Y H:i:s', strtotime(Request::get('vnp_PayDate')))}}</label>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Kết quả:</label>
                    <label>
                        @php
                            if ($secureHash == $vnp_SecureHash) {
                                if ($_GET['vnp_ResponseCode'] == '00') {
                                   echo "<div class='btn-success'>Giao dịch thành công<div>";
                                } else {
                                    echo "<div class='btn-danger'>Giao dịch không thành công<div>";
                                }
                            } else {
                                echo "<div class='btn-warning'Chu kỳ không hợp lệ<div>";
                            }
                        @endphp
                    </label>
                </div>
        </div>
    </div>
@endsection
