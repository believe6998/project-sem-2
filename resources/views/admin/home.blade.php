@extends('admin.layout.master')
@section('content')
{{--    <div class="container-fluid">--}}
{{--        <!-- Page Heading -->--}}
{{--        <div class="d-sm-flex align-items-center justify-content-between mb-4">--}}
{{--            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>--}}
{{--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i--}}
{{--                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
{{--        </div>--}}

{{--        <!-- Content Row -->--}}
{{--        <div class="row">--}}

{{--            <!-- Earnings (Monthly) Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-primary shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings--}}
{{--                                    (Monthly)--}}
{{--                                </div>--}}
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-calendar fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Earnings (Monthly) Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-success shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)--}}
{{--                                </div>--}}
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Earnings (Monthly) Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-info shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>--}}
{{--                                <div class="row no-gutters align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="progress progress-sm mr-2">--}}
{{--                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"--}}
{{--                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Pending Requests Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-warning shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests--}}
{{--                                </div>--}}
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-comments fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Content Row -->--}}

{{--        <div class="row">--}}

{{--            <!-- Area Chart -->--}}
{{--            <div class="col-xl-8 col-lg-7">--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <!-- Card Header - Dropdown -->--}}
{{--                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>--}}
{{--                        <div class="dropdown no-arrow">--}}
{{--                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"--}}
{{--                               data-toggle="dropdown"--}}
{{--                               aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"--}}
{{--                                 aria-labelledby="dropdownMenuLink">--}}
{{--                                <div class="dropdown-header">Dropdown Header:</div>--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Card Body -->--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="chart-area">--}}
{{--                            <canvas id="myAreaChart"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Pie Chart -->--}}
{{--            <div class="col-xl-4 col-lg-5">--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <!-- Card Header - Dropdown -->--}}
{{--                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>--}}
{{--                        <div class="dropdown no-arrow">--}}
{{--                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"--}}
{{--                               data-toggle="dropdown"--}}
{{--                               aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"--}}
{{--                                 aria-labelledby="dropdownMenuLink">--}}
{{--                                <div class="dropdown-header">Dropdown Header:</div>--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Card Body -->--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="chart-pie pt-4 pb-2">--}}
{{--                            <canvas id="myPieChart"></canvas>--}}
{{--                        </div>--}}
{{--                        <div class="mt-4 text-center small">--}}
{{--                    <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-primary"></i> Direct--}}
{{--                    </span>--}}
{{--                            <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-success"></i> Social--}}
{{--                    </span>--}}
{{--                            <span class="mr-2">--}}
{{--                      <i class="fas fa-circle text-info"></i> Referral--}}
{{--                    </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Content Row -->--}}
{{--        <div class="row">--}}

{{--            <!-- Content Column -->--}}
{{--            <div class="col-lg-6 mb-4">--}}

{{--                <!-- Project Card Example -->--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"--}}
{{--                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"--}}
{{--                                 aria-valuenow="40"--}}
{{--                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"--}}
{{--                                 aria-valuemin="0"--}}
{{--                                 aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"--}}
{{--                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>--}}
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"--}}
{{--                                 aria-valuenow="100"--}}
{{--                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Color System -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-primary text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Primary--}}
{{--                                <div class="text-white-50 small">#4e73df</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-success text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Success--}}
{{--                                <div class="text-white-50 small">#1cc88a</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-info text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Info--}}
{{--                                <div class="text-white-50 small">#36b9cc</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-warning text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Warning--}}
{{--                                <div class="text-white-50 small">#f6c23e</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-danger text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Danger--}}
{{--                                <div class="text-white-50 small">#e74a3b</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-secondary text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Secondary--}}
{{--                                <div class="text-white-50 small">#858796</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-lg-6 mb-4">--}}

{{--                <!-- Illustrations -->--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-center">--}}
{{--                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"--}}
{{--                                 src="img/undraw_posting_photo.svg" alt="">--}}
{{--                        </div>--}}
{{--                        <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank"--}}
{{--                                                                                              rel="nofollow"--}}
{{--                                                                                              href="https://undraw.co/">unDraw</a>,--}}
{{--                            a constantly updated collection of beautiful svg images that you can use completely free and--}}
{{--                            without--}}
{{--                            attribution!</p>--}}
{{--                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw--}}
{{--                            &rarr;</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Approach -->--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat--}}
{{--                            and--}}
{{--                            poor--}}
{{--                            page performance. Custom CSS classes are used to create custom components and custom utility--}}
{{--                            classes.</p>--}}
{{--                        <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap--}}
{{--                            framework,--}}
{{--                            especially the utility classes.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<link href="{{asset('css/list.css')}}" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
<style>
    #piechart g:hover {
        cursor: pointer;
    }

    g circle:hover {
        cursor: pointer;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                DASH BOARD
            </div>
            <div class="float-right mt-3">
                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
            </div>
            <div class="font-weight-bold ml-4 mt-3 text-uppercase">
                Total Revenue : <span class="total-revenue"></span> (VND)
            </div>
            <div class="advice ml-5">
                <div class="text-danger"><strong>Revenue Status :</strong></div>
                <div class="advice-content" style="font-style: italic;"></div>
            </div>
            <div id="linechart_material" style="margin: 30px;"></div>
            <div class="advice ml-5 m-b-50">
                <div class="text-danger"><strong>Best-sellers Status :</strong></div>
                <div class="advice-content-best-seller" style="font-style: italic;"></div>
            </div>
            <div id="piechart" style="width: 600px; height: 500px;"></div>
            <!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
            @if (Session::has('message'))
                <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
            @endif
        </div>
    </section>
</section>
<script src="https://unpkg.com/sweetaler
t/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['line']});
    google.charts.setOnLoadCallback(function () {
        var start = moment().subtract(29, 'days');
        var end = moment();
        $.ajax({
            url: '/api-get-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
            method: 'GET',
            success: function (resp) {
                if (resp.length == 0) {
                    swal('No data exists for line chart', 'Please choose another time range.', 'warning');
                    return;
                }
                ;
                drawChart(resp);
                var totalRevenue = 0;
                var lastRevenue = parseInt(resp[0].revenue);
                var last = resp.length;
                var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                var difference = lastRevenue - firstRevenue;
                if (difference < 0) {
                    if (-difference > 1500000) {
                        $('.advice-content').text('Going down considerably => You should check out 5 best-sellers below to have an effective marketing strategy');
                    } else {
                        $('.advice-content').text('Going down but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                    }
                }
                if (difference > 0) {
                    if (difference > 2000000) {
                        $('.advice-content').text('Raising up considerably => You are having an effective marketing strategy! Keep going');
                    } else {
                        $('.advice-content').text('Raising up but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                    }
                }
                for (var i = 0; i < resp.length; i++) {
                    totalRevenue += parseInt(resp[i].revenue);
                }
                ;
                $('.total-revenue').text(totalRevenue);
                $('.total-revenue').formatNumber();

            },
            error: function () {
                swal('Something is wrong', 'Cannot retrieve data from API', 'error');
            }
        });
    });

    function drawChart(chart_data) {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Revenue');
        for (var i = 0; i < chart_data.length; i++) {
            data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
        }
        var options = {
            chart: {
                title: 'Revenue chart over time',
                subtitle: 'Currency(VND)'
            },
            height: 500,
            hAxis: {
                format: 'yyyy/MM/dd'
            }
        };
        var chart = new google.charts.Line(document.getElementById('linechart_material'));
        chart.draw(data, google.charts.Line.convertOptions(options));

        google.visualization.events.addListener(chart, 'select', selectHandler);

        function selectHandler(e) {
            for (var i = 0; i < chart.getSelection().length; i++) {
                var item = chart.getSelection()[i];
                window.location.href = '/admin/order?created_at=' + chart_data[item.row].day;
            }
        }
    }

    $(function () {
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Last week': [moment().subtract(6, 'days'), moment()],
                'Last 30 days': [moment().subtract(29, 'days'), moment()],
                'This month': [moment().startOf('month'), moment().endOf('month')],
                'Last month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            "firstDay": 1

        }, cb);
        cb(start, end);
        $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
            //do something, like clearing an input
            $('#reportrange').val('');
        });
        $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
            var startDate = picker.startDate.format('YYYY-MM-DD');
            var endDate = picker.endDate.format('YYYY-MM-DD');
            $.ajax({
                url: '/api-get-pie-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                method: 'GET',
                success: function (resp) {
                    if (resp.length == 0) {
                        swal('No data exists for pie chart', 'Please choose another time range.', 'warning');
                        return;
                    }
                    ;
                    drawPieChart(resp);
                },
                error: function (r) {
                    swal('Something is wrong', 'Cannot retrieve data from API', 'error');
                }
            });
            $.ajax({
                url: '/api-get-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                method: 'GET',
                success: function (resp) {
                    if (resp.length == 0) {
                        swal('No data exists for line chart', 'Please choose another time range.', 'warning');
                        return;
                    }
                    ;
                    drawChart(resp);
                    var totalRevenue = 0;
                    var lastRevenue = parseInt(resp[0].revenue);
                    var last = resp.length;
                    var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                    var difference = lastRevenue - firstRevenue;
                    if (difference < 0) {
                        if (-difference > 1500000) {
                            $('.advice-content').text('Going down considerably => You should check out 5 best-sellers below to have an effective marketing strategy');
                        } else {
                            $('.advice-content').text('Going down but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                        }
                    }
                    if (difference > 0) {
                        if (difference > 2000000) {
                            $('.advice-content').text('Raising up considerably => You are having an effective marketing strategy! Keep going');
                        } else {
                            $('.advice-content').text('Raising up but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                        }
                    }
                    for (var i = 0; i < resp.length; i++) {
                        totalRevenue += parseInt(resp[i].revenue);
                    }
                    ;
                    $('.total-revenue').text(totalRevenue);
                    $('.total-revenue').formatNumber();
                },
                error: function () {
                    swal('Action failed', 'Cannot retrieve data from API', 'error');
                }
            });
        });
    });
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(function () {
        var start = moment().subtract(29, 'days');
        var end = moment();
        $.ajax({
            url: '/api-get-pie-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
            method: 'GET',
            success: function (resp) {
                if (resp.length == 0) {
                    swal('No data exists for pie chart', 'Please choose another time range.', 'warning');
                    return;
                }
                ;
                // console.log(resp);
                drawPieChart(resp);
            },
            error: function (r) {
                swal('Something is wrong', 'Cannot retrieve data from API', 'error');
            }
        });
    });

    function drawPieChart(chart_data) {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Product Name');
        data.addColumn('number', 'Quantity');
        for (var i = 0; i < 5; i++) {
            data.addRow([chart_data[i].product.name, Number(chart_data[i].totalQuantity)]);
        }
        ;
        var rest = 0;
        for (var i = 5; i < chart_data.length; i++) {
            rest += Number(chart_data[i].totalQuantity);
        };
        var all = 0;
        for (var i = 0; i < chart_data.length; i++) {
            all += Number(chart_data[i].totalQuantity);
        };
        var percentage1 = (chart_data[0].totalQuantity/all)*100;
        if(percentage1<=20){
            $('.advice-content-best-seller').html('<span>The <a href="'+'/admin/order?product_id='+ chart_data[0].product_id+'">'+chart_data[0].product.name+'</a> is doing great but compared with all its percentage overall is not too big</span>');
        } else if (percentage1<50 && percentage1>20) {
            $('.advice-content-best-seller').html('<span>The <a href="'+'/admin/order?product_id='+ chart_data[0].product_id+'">'+chart_data[0].product.name+'</a> is doing so great this time that you should think of importing more of it</span>');
        } else if (percentage1<=50) {
            $('.advice-content-best-seller').html('<span>The <a href="'+'/admin/order?product_id='+ chart_data[0].product_id+'">'+chart_data[0].product.name+'</a> takes more than half of your sales, you should not only import more of it but also promoting other products too. Such as <a href="'+'/admin/order?product_id='+ chart_data[1].product_id+'">'+chart_data[1].product.name+'</span>');
        }
        data.addRow(['Other Products', rest]);
        var options = {
            title: '5 Best-sellers'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', selectHandler);

        function selectHandler(e) {
            for (var i = 0; i < chart.getSelection().length; i++) {
                var item = chart.getSelection()[i];
                window.location.href = '/admin/order?product_id=' + chart_data[item.row].product_id;
            }
        }
    }
    // google.charts.load('current', {'packages':['corechart']});
    // google.charts.setOnLoadCallback(function () {
    //     var start = moment().subtract(29, 'days');
    //     var end = moment();
    //     $.ajax({
    //         url: '/api-get-line-curve?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
    //         method: 'GET',
    //         success: function (resp) {
    //             console.log(resp);

    //         },
    //         error: function (r) {
    //             console.log(r);
    //             swal('Something is wrong', 'Cannot retrieve data from API', 'error');
    //         }
    //     });
    // });

    // function drawLineCurveChart() {
    //     var data = new google.visualization.DataTable();
    //     data.addColumn('date', 'Date');

    //     data.addColumn('number', 'Date');

    //     var options = {
    //         title: 'Company Performance',
    //         curveType: 'function',
    //         legend: { position: 'bottom' }
    //     };

    //     var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    //     chart.draw(data, options);
    // }
</script>
@endsection
