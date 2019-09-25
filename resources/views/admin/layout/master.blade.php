<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <title>SB Admin 2 - Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset("ad/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset("ad/css/sb-admin-2.min.css")}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">MYPT-ONLINE</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item">
            <a class="nav-link" href="/admin/user">
                <i class="fas fa-fw fa-table"></i>
                <span>Người Dùng</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/category">
                <i class="fas fa-fw fa-table"></i>
                <span>Danh mục</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/pt">
                <i class="fas fa-fw fa-table"></i>
                <span>Huấn luyện viên cá nhân</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/blog">
                <i class="fas fa-fw fa-table"></i>
                <span>Blog</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/time">
                <i class="fas fa-fw fa-table"></i>
                <span>Time</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/duration">
                <i class="fas fa-fw fa-table"></i>
                <span>Duration</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/admin/home">
                <i class="fas fa-fw fa-table"></i>
                <span>Home</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/review">
                <i class="fas fa-fw fa-table"></i>
                <span>Đánh giá</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/orders">
                <i class="fas fa-fw fa-table"></i>
                <span>Đơn hàng</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->


                    <!-- Nav Item - Messages -->

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->

            <!-- /.container-fluid -->
            @section('content')
            @show()
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="{{ URL::asset("ad/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{ URL::asset("ad/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="{{ URL::asset("ad/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ URL::asset("ad/js/sb-admin-2.min.js")}}"></script>

<!-- Page level plugins -->
<script src="{{ URL::asset("ad/vendor/chart.js/Chart.min.js")}}"></script>

<!-- Page level custom scripts -->
<script src="{{ URL::asset("ad/js/demo/chart-pie-demo.js")}}"></script>
<script src="{{ URL::asset("ad/vendor/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{ URL::asset("ad/vendor/datatables/dataTables.bootstrap4.min.js")}}"></script>

<!-- Page level custom scripts -->

<script src="{{ URL::asset("admin/js/demo/datatables-demo.js")}}"></script>
@yield('js')

<script>

    $('.btn-delete-pt-time').click(function () {
        if (confirm('Bạn có chắc muốn xóa không?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-pt-time', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/pt-time/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            });
        }
    });

    $('#check-all-pt-time-ad').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all-pt-time').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();

        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }


        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
            changeStatusPTTime(arrayId, action);
        }

    });


    function changeStatusPTTime(arrayId, status) {
        $.ajax({
            url: '/admin/change-status-pt-time',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'ids': arrayId,
                'status': status
            },
            success: function () {
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }


    $('#check-all-blog-ad').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all-blog').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();

        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }


        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
            changeStatusBlog(arrayId, action);
        }

    });

    function changeStatusBlog(arrayId, status) {
        $.ajax({
            url: '/admin/change-status-blog',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'ids': arrayId,
                'status': status
            },
            success: function () {
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }






    $('.btn-delete-order').click(function () {
        if (confirm('Bạn có chắc muốn xóa đơn hàng này không?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-order', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/orders/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa đơn hàng thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            });
        }
    });

    $('#check-all-order-ad').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all-order').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();

        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }


        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
            changeStatusOrder(arrayId, action);
        }

    });


    function changeStatusOrder(arrayId, status) {
        $.ajax({
            url: '/admin/change-status-order',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'ids': arrayId,
                'status': status
            },
            success: function () {
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }


    $('.btn-delete-duration').click(function () {
        if (confirm('Bạn có chắc muốn xóa không?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-duration', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/duration/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            });
        }
    });

    $('#check-all-duration-ad').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all-duration').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();

        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }


        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
            changeStatusDuration(arrayId, action);
        }

    });


    function changeStatusDuration(arrayId, status) {
        $.ajax({
            url: '/admin/change-status-duration',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'ids': arrayId,
                'status': status
            },
            success: function () {
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }



    $('.btn-delete-time').click(function () {
        if (confirm('Bạn có chắc muốn xóa không?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-time', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/time/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            });
        }
    });

    $('#check-all-time-ad').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all-time').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();

        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }


        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
            changeStatusTime(arrayId, action);
        }

    });


    function changeStatusTime(arrayId, status) {
        $.ajax({
            url: '/admin/change-status-time',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'ids': arrayId,
                'status': status
            },
            success: function () {
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }


    $('.btn-delete-blog').click(function () {
        if (confirm('Bạn có chắc muốn xóa blog này không?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-blog', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/blog/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa blog thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            });
        }
    });

    $('.btn-delete').click(function () {
        if (!confirm('Bạn có chắc muốn blog dùng này?')) {
            return;
        }
    });

    $('.btn-delete-user').click(function () {
        if (confirm('Bạn có chắc muốn xóa người dùng này?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-user', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/user/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa người dùng thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            });
        }
    });

    $('.btn-delete-review').click(function () {
        if (confirm('Bạn có chắc muốn xóa đánh giá này?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-review', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/review/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                error: function () {
                    location.reload();
                }
            });
        }
    });
</script>
<script>
    $('.btn-delete-ad-category').click(function () {
        if (confirm('Bạn có chắc muốn xóa vĩnh viễn danh mục này không?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-ad-category', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/category/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Xóa danh mục thành công!');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau!');
                }
            });
        }
    });

    $('.btn-delete-pt').click(function () {
        if (confirm('Are you sure wanna delete this user?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-pt', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/pt/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Success');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    });


    $('#check-all-category-ad').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all-category').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();

        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }


        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
            changeStatusCategory(arrayId, action);
        }

    });

    function changeStatusCategory(arrayId, status) {
        $.ajax({
            url: '/admin/change-status-category',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'ids': arrayId,
                'status': status
            },
            success: function () {
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }






        $('#check-all').change(function () {
            $('.check-item').prop('checked', $(this).is(':checked'));
        });

        $('#btn-apply-all').click(function () {
                // kiểm tra người dùng đã check phần tử chưa.
                var arrayId = new Array();
                $('.check-item:checkbox:checked').each(function () {
                    arrayId.push($(this).val());
                });
                if (arrayId.length == 0) {
                    alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
                    return;
                }
                // kiểm tra người dùng đã chọn thao tác chưa.
                var action = $('#select-action').val();
                if (action == 0) {
                    alert('Vui lòng chọn thao tác muốn thực hiện!');
                    return;
                }
                // confirm lại người dùng.
                if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
                    changeStatusBlog(arrayId, action);
                }
            });



        $('#check-all-user-ad').change(function () {
            $('.check-item').prop('checked', $(this).is(':checked'));
        });

        $('#btn-apply-all-user').click(function () {
            // kiểm tra người dùng đã check phần tử chưa.
            var arrayId = new Array();
            $('.check-item:checkbox:checked').each(function () {
                arrayId.push($(this).val());
            });
            if (arrayId.length == 0) {
                alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
                return;
            }
            // kiểm tra người dùng đã chọn thao tác chưa.
            var action = $('#select-action').val();

            if (action == 0) {
                alert('Vui lòng chọn thao tác muốn thực hiện!');
                return;
            }


            // confirm lại người dùng.
            if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
                changeStatusUser(arrayId, action);
            }

        });

        function changeStatusUser(arrayId, status) {
            $.ajax({
                url: '/admin/change-status-user',
                method: 'POST',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'ids': arrayId,
                    'status': status
                },
                success: function () {
                    alert("Thao tác thành công, reload lại page!");
                    location.reload();
                },
                error: function () {
                    alert("Thao tác thất bại, vui lòng thử lại sau");
                }
            });
        }

        $('#check-all-pt-ad').change(function () {
            $('.check-item').prop('checked', $(this).is(':checked'));
        });

        $('#btn-apply-all-pt').click(function () {
            // kiểm tra người dùng đã check phần tử chưa.
            var arrayId = new Array();
            $('.check-item:checkbox:checked').each(function () {
                arrayId.push($(this).val());
            });
            if (arrayId.length == 0) {
                alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
                return;
            }
            // kiểm tra người dùng đã chọn thao tác chưa.
            var action = $('#select-action').val();

            if (action == 0) {
                alert('Vui lòng chọn thao tác muốn thực hiện!');
                return;
            }


            // confirm lại người dùng.
            if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
                changeStatusPT(arrayId, action);
            }

        });


        function changeStatusPT(arrayId, status) {
            $.ajax({
                url: '/admin/change-status-pt',
                method: 'POST',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'ids': arrayId,
                    'status': status
                },
                success: function () {
                    alert("Thao tác thành công, reload lại page!");
                    location.reload();
                },
                error: function () {
                    alert("Thao tác thất bại, vui lòng thử lại sau");
                }
            });
        };

        function changeStatusHome(arrayId, status) {
            $.ajax({
                url: '/admin/change-status-home',
                method: 'POST',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'ids': arrayId,
                    'status': status
                },
                success: function () {
                    alert("Thao tác thành công, reload lại page!");
                    location.reload();
                },
                error: function () {
                    alert("Thao tác thất bại, vui lòng thử lại sau");
                }
            });
        };


        $('.btn-delete-home').click(function () {
            if (confirm('Are you sure wanna delete this user?')) {
                var deleteId = $(this).attr('id').replace('btn-delete-home', '');
                var currentItem = $(this);
                $.ajax({
                    url: '/admin/home/' + deleteId,
                    method: 'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function () {
                        alert('Success');
                        currentItem.closest("tr").remove();
                    },
                    error: function () {
                        alert('Error');
                    }
                });
            }
        });

        $('#check-all-home-ad').change(function () {
            $('.check-item-home').prop('checked', $(this).is(':checked'));
        });

        $('#btn-apply-all-home').click(function () {
            // kiểm tra người dùng đã check phần tử chưa.
            var arrayId = new Array();

            $('.check-item-home:checkbox:checked').each(function () {

                arrayId.push($(this).val());
            });
            if (arrayId.length == 0) {
                alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
                return;
            }
            // kiểm tra người dùng đã chọn thao tác chưa.
            var action = $('#select-action').val();
            if (action == 0) {
                alert('Vui lòng chọn thao tác muốn thực hiện!');
                return;
            }
            // confirm lại người dùng.
            if (confirm('Bạn có chắc muốn thực hiện thao tác này? ')) {
                changeStatusHome(arrayId, action);
            }
        });

        var count = 0;
        $('.btn-show').click(function (event) {
            count++;
            var editId = $(this).attr('id').replace('btn-show-', '');
            $.ajax({
                url: '/admin/review/get-by-id/' + editId,
                method: 'GET',
                success: function (response) {
                    $('.content1').html(response.data.review);

                    $('.rated').width(response.data.rating);

                    $('#fullHeightModalRight').modal('show');


                },
                error: function () {
                    alert('Error');
                }
            });
        });

</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{asset('js/jquery.formatNumber-0.1.1.min.js')}}"></script>

</body>

</html>
