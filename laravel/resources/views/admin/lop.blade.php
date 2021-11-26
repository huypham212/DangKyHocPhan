<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Trang Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
    <meta name="description" content="Stream - Dashboard UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    {{-- <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> --}}
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/admin/style-detail.css">

    <!-- Custom Charts -->
    <style>
        .js-doughnut-chart {
            width: 70px !important;
            height: 70px !important;
        }

    </style>
</head>
<!-- End Head -->

<body>
    <!-- Header (Topbar) -->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu-header">
            <a class="navbar-brand logo-header" href="#">
                <img src="{{ URL::to('/') }}/img/logo.png" width="27px" height="45px" style="margin-left: 20px; margin-right: 26px;" alt="logo" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="left-menu-header">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khoá để tìm kiếm" aria-label="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="right-menu-header">
                    <a href="#"><i class="far fa-bell"></i></a>
                    <a href="#"><i class="far fa-comment-dots"></i></a>
                    <button id="btnLogin" onclick="window.location='{{ route('login') }}'">Đăng xuất</button>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Header (Topbar) -->

    <main class="u-main" role="main">
        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            <div class="u-sidebar-inner bg-gradient bdrs-30">
                <header class="u-sidebar-header">
                    <a class="u-sidebar-logo" href="index.html">
                        <img class="img-fluid" src="assets/img/logo.png" width="124" alt="Stream Dashboard">
                    </a>
                </header>

                <nav class="u-sidebar-nav">
                    <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                        <!-- Dashboard -->
                        {{-- <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('admin') }}">
                                <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                            </a>
                        </li> --}}
                        <!-- End Dashboard -->

                        <!-- sinhvien -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('sinhvien.index') }}">
                                <i class="fas fa-user-check u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Sinh viên</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            {{-- <ul id="sinhvien" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Danh sách sinh viên</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-list.html">
                                        <span class="u-sidebar-nav-menu__item-title">Thêm sinh viên</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-report-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Sửa sinh viên</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <!-- End sinhvien -->

                        <!-- giangvien -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('giangvien.index') }}">
                                <i class="fas fa-stopwatch u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Giảng viên</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            {{-- <ul id="giangvien" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-mathmetics.html">
                                        <span class="u-sidebar-nav-menu__item-title">Danh sách giảng viên</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-mathmetics-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Thêm giảng viên</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-accounting.html">
                                        <span class="u-sidebar-nav-menu__item-title">Sửa giảng viên</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <!-- End giangvien -->

                        <!-- lop -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link active" href="{{ route('lop.index') }}">
                                <i class="fas fa-question u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Lớp</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            {{-- <ul id="lop" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Danh sách lớp</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-bank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Thêm lớp</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Sửa lớp</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <!-- End lop -->

                        <!-- monhoc -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('monhoc.index') }}">
                                <i class="fas fa-home u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Môn học</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            {{-- <ul id="monhoc" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Danh sách môn học</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework.html">
                                        <span class="u-sidebar-nav-menu__item-title">Thêm môn học</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework-add-new.html">
                                        <span class="u-sidebar-nav-menu__item-title">Sửa môn học</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <!-- End Homework -->

                        <!-- lophocphan -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('lophp.index') }}">
                                <i class="fas fa-diagnoses u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Lớp học phần</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            {{-- <ul id="lophocphan" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Danh sách lớp học phần</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exams.html">
                                        <span class="u-sidebar-nav-menu__item-title">Thêm lớp học phần</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Sửa lớp học phần</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <!-- End lophocphan -->

                        <!-- Trạng thái môn học -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('svmh.index') }}">
                                <i class="fas fa-diagnoses u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Trạng thái môn học</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            {{-- <ul id="lophocphan" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Danh sách lớp học phần</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exams.html">
                                        <span class="u-sidebar-nav-menu__item-title">Thêm lớp học phần</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Sửa lớp học phần</span>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>
                        <!-- End trạng thái môn học -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar -->

        <div class="u-content">
            <div class="u-body">
                <div class="card">
                    <div class="card-header">
                        <h3><img src="{{ URL::to('/') }}/img/Vector.png" width="15px" height="15px" alt="logo" /> DANH
                            SÁCH LỚP</h3>
                    </div>
                    <div class="card-body">
                        <div class="nav-danhsach justify-content-between">
                            <div class="nav-danhsach-left">
                                <input class="form-control mr-sm-2" style="width: 300px" type="search" placeholder="Nhập từ khoá để tìm kiếm" aria-label="Search">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="nav-danhsach-right">
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                    data-target="#exampleModalCenter">Thêm lớp</button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Thêm lớp</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Thoát</button>
                                                <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="width: 100%;">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th style='text-align:center; font-size:14px; font-weight:bold' scope="col">
                                            STT</th>
                                        <th style='text-align:center; font-size:14px; font-weight:bold' scope="col">
                                            Mã lớp</th>
                                        <th style='text-align:center; font-size:14px; font-weight:bold' scope="col">
                                            Tên lớp</th>
                                        <th style='text-align:center; font-size:14px; font-weight:bold' scope="col">
                                            Niên khoá</th>
                                        <th style='text-align:center; font-size:14px; font-weight:bold' scope="col">
                                            Mã khoa</th>
                                        <th style='text-align:center; font-size:14px; font-weight:bold' scope="col">
                                            Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $lop)
                                    <tr>
                                        <td class="align-middle" style='text-align:center; font-size:14px'>{{ $index }}</td>
                                        <td class="align-middle" style='text-align:center; font-size:14px'>{{ $lop->MaLop }}</td>
                                        <td class="align-middle" style='text-align:center; font-size:14px'>{{ $lop->TenLop }}</td>
                                        <td class="align-middle" style='text-align:center; font-size:14px'>{{ $lop->NienKhoa }}</td>
                                        <td class="align-middle" style='text-align:center; font-size:14px'>{{ $lop->MaKhoa }}</td>
                                        <td class="align-middle" style='text-align:center'>
                                            <a href="#"><i class="far fa-edit"></i></a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </main>

    <!-- Global Vendor -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Initialization  -->
    <script src="assets/js/sidebar-nav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard-page-scripts.js"></script>
    <!--<script src="assets/js/scripts.js"></script>-->
</body>

</html>
