@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Giới thiệu chung</th>
                            <th>Chuyên môn</th>
                            <th>Trình độ</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt="">
                            </td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="100px"
                                     src="https://afamilycdn.com/k:thumb_w/600/VKefFccccccccccccSZQX6rFO6Qp9D/Image/2016/1/IMG_5919-4bcc3/nghe-pt-nam.jpg"
                                     alt=""></td>
                            <td>Captain America</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Tôi quan
                                    niệm
                                    rèn luyện thể chất là một quá trình lâu dài
                                </div>
                            </td>
                            <td>Personal Training</td>
                            <td>
                                <div style="overflow:auto;height: 100px;width: 200px">Hoàn thành lớp HLV thể hình -
                                    fitness
                                    tại liên đoàn thể hình việt nam
                                </div>
                            </td>
                            <td>28-08-2019</td>
                            <td>28-08-2019</td>
                            <td>
                                <div class="row">
                                    <div class="col-6 "><a href="" class="text-primary"><i class="fas fa-edit"></i></a></div>
                                    <div class="col-6"><a class="text-danger" href=""><i class="fas fa-trash-alt"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
