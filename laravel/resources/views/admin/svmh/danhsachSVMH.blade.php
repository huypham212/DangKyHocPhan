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
                            <a class="u-sidebar-nav-menu__link" href="{{ route('giangvien.index') }}">
                                <i class="fas fa-chalkboard-teacherh u-sidebar-nav-menu__item-icon"></i>
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
                            <a class="u-sidebar-nav-menu__link active" href="{{ route('svmh.index') }}">
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
                <div class="card">
                    <div class="card-header">
                        <h3><img src="{{ URL::to('/') }}/img/Vector.png" width="15px" height="15px" alt="logo" />
                            TR???NG TH??I M??N H???C C???A SINH VI??N</h3>
                    </div>
                    <div class="card-body">
                        <div class="nav-danhsach justify-content-between">
                            <div class="nav-danhsach-left">
                                <input class="form-control mr-sm-2" style="width: 300px" type="search"
                                    placeholder="Nh???p t??? kho?? ????? t??m ki???m" aria-label="Search">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>

                        @foreach ($dataSV as $sv)
                            <div style="width: 100%;">
                                <button type="button" class="collapse-button" data-toggle="collapse"
                                    data-target="#_{{ $sv->MaSV }}">
                                    <p class="collapse-button-text">{{ $sv->MaSV }} - {{ $sv->TenSV }}</p>
                                    <i class="fas fa-caret-right collapse-button-icon"></i>
                                </button>
                                <div id="_{{ $sv->MaSV }}"
                                    class="collapse table-wrapper-scroll-y my-custom-scrollbar">
                                    <table class="table table-hover table-striped mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style='text-align:center; font-size:14px; font-weight:bold'
                                                    scope="col">
                                                    STT</th>
                                                <th style='text-align:center; font-size:14px; font-weight:bold'
                                                    scope="col">
                                                    M?? m??n h???c</th>
                                                <th style='text-align:center; font-size:14px; font-weight:bold'
                                                    scope="col">
                                                    T??n m??n h???c</th>
                                                <th style='text-align:center; font-size:14px; font-weight:bold'
                                                    scope="col">
                                                    Tr???ng th??i</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p hidden>{{ $index = 1 }}</p>
                                            @foreach ($dataSVMH as $svmh)
                                                @if ($svmh->MaSV == $sv->MaSV)
                                                    <tr>
                                                        <td class="align-middle"
                                                            style='text-align:center; font-size:14px'>
                                                            {{ $index++ }}</td>
                                                        <td class="align-middle"
                                                            style='text-align:center; font-size:14px'>
                                                            {{ $svmh->MaMH }}</td>
                                                        @foreach ($dataMH as $mh)
                                                            @if ($mh->MaMH == $svmh->MaMH)
                                                                <td class="align-middle"
                                                                    style='text-align:center; font-size:14px'>
                                                                    {{ $mh->TenMH }}</td>
                                                            @endif
                                                        @endforeach
                                                        <td class="align-middle" style='text-align:center'>
                                                            <select class="form-control" id="stateSelect" disabled>
                                                                @if ($svmh->TrangThai == '???? ho??n th??nh')
                                                                    <option selected>???? ho??n th??nh</option>
                                                                    <option>??ang ho??n th??nh</option>
                                                                    <option>???? tr?????t</option>
                                                                    <option>???? hu???</option>
                                                                @else
                                                                    @if ($svmh->TrangThai == '???? hu???')
                                                                        <option>???? ho??n th??nh</option>
                                                                        <option>??ang ho??n th??nh</option>
                                                                        <option>???? tr?????t</option>
                                                                        <option selected>???? hu???</option>
                                                                    @else
                                                                        @if ($svmh->TrangThai == '??ang ho??n th??nh')
                                                                            <option>???? ho??n th??nh</option>
                                                                            <option selected>??ang ho??n th??nh</option>
                                                                            <option>???? tr?????t</option>
                                                                            <option>???? hu???</option>
                                                                        @else
                                                                            <option>???? ho??n th??nh</option>
                                                                            <option>??ang ho??n th??nh</option>
                                                                            <option selected>???? tr?????t</option>
                                                                            <option>???? hu???</option>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            </select>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach



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
