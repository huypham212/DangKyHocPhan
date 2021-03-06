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
    <link rel="shortcut icon" href="{{ URL::to('/') }}/favicon.png" type="image/x-icon">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendor/font-awesome/css/all.min.css">
    {{-- <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> --}}
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/jquery-ui.min.css">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/admin/style-detail.css">

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
                <img src="{{ URL::to('/') }}/img/logo.png" width="27px" height="45px"
                    style="margin-left: 20px; margin-right: 26px;" alt="logo" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="left-menu-header">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nh???p t??? kho?? ????? t??m ki???m"
                        aria-label="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="right-menu-header">
                    <a href="#"><i class="far fa-bell"></i></a>
                    <a href="#"><i class="far fa-comment-dots"></i></a>
                    <button id="btnLogin" onclick="window.location='{{ route('login') }}'">????ng xu???t</button>
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

                        <!-- sinhvien -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('sinhvien.index') }}">
                                <i class="fas fa-user-graduate u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Sinh vi??n</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>
                        </li>
                        <!-- End sinhvien -->

                        <!-- giangvien -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link active" href="{{ route('giangvien.index') }}">
                                <i class="fas fa-chalkboard-teacher u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Gi???ng vi??n</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>
                        </li>
                        <!-- End giangvien -->

                        <!-- lop -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('lop.index') }}">
                                <i class="fas fa-school u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">L???p</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>
                        </li>
                        <!-- End lop -->

                        <!-- monhoc -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('monhoc.index') }}">
                                <i class="fas fa-book-open u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">M??n h???c</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>
                        </li>
                        <!-- End Homework -->

                        <!-- lophocphan -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('lophp.index') }}">
                                <i class="fas fa-layer-group u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">L???p h???c ph???n</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>
                        </li>
                        <!-- End lophocphan -->

                        <!-- Tr???ng th??i m??n h???c -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{ route('svmh.index') }}">
                                <i class="fas fa-diagnoses u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Tr???ng th??i m??n h???c</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>
                        </li>
                        <!-- End tr???ng th??i m??n h???c -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar -->

        <div class="u-content">
            <div class="u-body">
                @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3><img src="{{ URL::to('/') }}/img/Vector.png" width="15px" height="15px" alt="logo" />TH??M
                            GI???NG VI??N</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('importGV') }}" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="file" placeholder="Choose file">
                                    </div>
                                    @error('file')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <form action="{{ route('giangvien.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputMaGV">M?? Gi???ng vi??n</label>
                                    <input type="text" class="form-control" name="magv">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputHoTen">H??? v?? t??n</label>
                                    <input type="text" class="form-control" name="hoten" placeholder="Nguy???n V??n A">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputGioiTinh">Gi???i t??nh</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gioitinh" value="Nam">
                                            <label class="form-check-label" for="inlineRdNam">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gioitinh" value="Nu">
                                            <label class="form-check-label" for="inlineRdNu">N???</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputKhoa">Khoa</label>
                                    <select name="makhoa" class="form-control">
                                        <option selected>...</option>
                                        @foreach ($dataKhoa as $khoa)
                                            <option value="{{ $khoa->MaKhoa }}">{{ $khoa->MaKhoa }} -
                                                {{ $khoa->TenKhoa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="button-create">
                                <button style="margin-right: 5px" type="submit" class="btn btn-success">Th??m gi???ng
                                    vi??n</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="window.location='{{ route('giangvien.index') }}'">Tho??t</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </main>

    <!-- Global Vendor -->
    <script src="{{ URL::to('/') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{ URL::to('/') }}/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script src="{{ URL::to('/') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/jquery-ui.min.js"></script>
    <!-- Initialization  -->
    <script src="{{ URL::to('/') }}/assets/js/sidebar-nav.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/main.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/dashboard-page-scripts.js"></script>
    <!--<script src="assets/js/scripts.js"></script>-->
</body>

</html>
