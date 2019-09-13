<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>SB Admin 2 - Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset("ad/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset("ad/css/sb-admin-2.min.css")}}" rel="stylesheet">
    <link href="{{ URL::asset("ad")}}" rel="stylesheet">


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
                <span>User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/category">
                <i class="fas fa-fw fa-table"></i>
                <span>Category</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/personal-training">
                <i class="fas fa-fw fa-table"></i>
                <span>Personal Training</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/blog">
                <i class="fas fa-fw fa-table"></i>
                <span>Blog</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/blog/create">
                <i class="fas fa-fw fa-table"></i>
                <span>Form-Blog</span></a>
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
<script src="{{ URL::asset("ad")}}"></script>
<script src="{{ URL::asset("ad/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>


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
    $('.btn-delete').click(function () {
        if (!confirm('Are you sure wanna delete this game?')) {
            return;
        }
        var deleteId = $(this).attr('id').replace('id-delete-', '');
        $.ajax({
            url: '/admin/blog/' + deleteId,
            method: 'DELETE',
            data: {
                // language=JQuery-CSS
                '_token': $("meta[name=csrf-token]").attr('content')
            },
            error: function () {
                alert('Success');
                location.reload();
            }
        });
    });

    $('.btn-delete-user').click(function () {
        if (confirm('Are you sure wanna delete this user?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-user', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/user/' + deleteId,
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
</script>
<script>
    $('.btn-delete-ad-category').click(function () {
        if (confirm('Bạn có chắc muốn xóa danh mục này không?')) {
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
</script>

</body>

</html>
