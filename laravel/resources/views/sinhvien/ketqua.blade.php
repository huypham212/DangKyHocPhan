<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/sinhvien/style-ketqua.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/312ace3ead.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<title> Dashboard </title>
</head>

<body>
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
                    <button id="btnLogin" onclick="window.location='{{ route('logout') }}'">Đăng xuất</button>
                </div>
            </div>
        </nav>
        <div class="info-header">
            <div class="info-img">
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" style="width: 150px;" alt="avatar"/>
            </div>
            <div class="info-content">
                <h5>Nguyễn Bình An</h5>
                <p>Mã sinh viên: {{ $masv }}</p>
                <div class="info-tag">
                    <p class="info-tag-1">Khoá: DHCN5</p>
                    <p class="info-tag-2">Lớp học: 0</p>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar order-last order-lg-0 menu-navbar">
        <ul>
            <li><a class="nav-link" href="{{ route('dangky.index') }}">Đăng ký học phần</a></li>
            <li><a class="nav-link active" href="{{ route('ketqua.index') }}"><span class="style-active">Kết quả đăng ký</span></a></li>
            <li><a class="nav-link" href="{{ route('lichsu.index') }}">Lịch sử đăng ký</a></li>
        </ul>
    </nav>
    <div class="main">
        <div style="width: 100%;">
            <button type="button" class="collapse-button" data-toggle="collapse" data-target="#demo1">NĂM HỌC 2020-2021<i class="fas fa-caret-right"></i></button>
            <div id="demo1" class="collapse" style="background-color: #FFFFFF;">
                <div style="background-color: #FFFFFF; padding-top: 28px; padding-left: 48px">
                    <h5 style="padding-left: 25px;">NĂM HỌC 2020-2021, HỌC KỲ 1</h5>
                    <p style="padding-left: 100px;">Số học phần đã đăng ký: 3</p>
                    <p style="padding-left: 100px;">Số tín chỉ học tập đã đăng ký: 9</p>
                </div>
                <table class="table table-hover" style="background-color: #FFFFFF;">
                    <thead class="thead-light" style="background-color: #DDE4EF; border: 1px solid #DDE4EF;">
                        <tr>
                            <th style='text-align:center' scope="col">STT</th>
                            <th style='text-align:center' scope="col">Mã học phần</th>
                            <th style='text-align:center' scope="col">Lớp học phần</th>
                            <th style='text-align:center' scope="col">Số tín chỉ</th>
                            <th style='text-align:center' scope="col">Thời gian & Địa điểm</th>
                            <th style='text-align:center' scope="col">Giảng viên</th>
                            <th style='text-align:center' scope="col">Sỉ số</th>
                            <th style='text-align:center' scope="col">Học phí</th>
                            <th style='text-align:center' scope="col">Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid #DDE4EF">
                        <tr>
                            <td class="align-middle" style='text-align:center;'>1</td>
                            <td class="align-middle" style='text-align:center'>4203</td>
                            <td class="align-middle" style='text-align:center'>Cơ sở dữ liệu(L01)</td>
                            <td class="align-middle" style='text-align:center'>03</td>
                            <td class="align-middle" style='text-align:center; color: #979797;'>
                                Từ 11/10/2021 đến 25/12/2021 <p style="color: #000000;">Thứ 2 - Tiết 1, 2, 3 - Phòng B302</p>
                            </td>
                            <td class="align-middle" style='text-align:center'>Đỗ Văn Tuấn</td>
                            <td class="align-middle" style='text-align:center'>10/30</td>
                            <td class="align-middle" style='text-align:center'>830.000</td>
                            <td class="align-middle" style='text-align:center'></td>
                        </tr>
                        <tr>
                            <td class="align-middle" style='text-align:center;'>1</td>
                            <td class="align-middle" style='text-align:center'>4203</td>
                            <td class="align-middle" style='text-align:center'>Cơ sở dữ liệu(L01)</td>
                            <td class="align-middle" style='text-align:center'>03</td>
                            <td class="align-middle" style='text-align:center; color: #979797;'>
                                Từ 11/10/2021 đến 25/12/2021 <p style="color: #000000;">Thứ 2 - Tiết 1, 2, 3 - Phòng B302</p>
                            </td>
                            <td class="align-middle" style='text-align:center'>Đỗ Văn Tuấn</td>
                            <td class="align-middle" style='text-align:center'>10/30</td>
                            <td class="align-middle" style='text-align:center'>830.000</td>
                            <td class="align-middle" style='text-align:center'></td>
                        </tr>
                        <tr>
                            <td class="align-middle" style='text-align:center;'>1</td>
                            <td class="align-middle" style='text-align:center'>4203</td>
                            <td class="align-middle" style='text-align:center'>Cơ sở dữ liệu(L01)</td>
                            <td class="align-middle" style='text-align:center'>03</td>
                            <td class="align-middle" style='text-align:center; color: #979797;'>
                                Từ 11/10/2021 đến 25/12/2021 <p style="color: #000000;">Thứ 2 - Tiết 1, 2, 3 - Phòng B302</p>
                            </td>
                            <td class="align-middle" style='text-align:center'>Đỗ Văn Tuấn</td>
                            <td class="align-middle" style='text-align:center'>10/30</td>
                            <td class="align-middle" style='text-align:center'>830.000</td>
                            <td class="align-middle" style='text-align:center'></td>
                        </tr>
                    </tbody>
                </table>
                <div class="fee">
                    <p><b>Học phí: 2.490.000 đồng</b></p>
                    <button type="button" class="btn btn-outline-danger"><b>In lịch học</b></button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="logo-footer">
            <img src="{{ URL::to('/') }}/img/logo_footer.png" width="468px" height="181px" alt="logo">
        </div>
        <div class="info-footer">
            <h5>THÔNG TIN CẦN THIẾT</h5>
            <img class="line-1" src="{{ URL::to('/') }}/img/Line.png" width="55px" alt="line">
            <p><i class="fas fa-map-marker-alt"></i>&emsp; Số 101, Mai Xuân Thưởng, Nha Trang, Khánh Hoà</p>
            <p><i class="fas fa-phone-alt"></i>&emsp; 0583-801-805, 987654</p>
            <p><i class="fas fa-fax"></i>&emsp; 058-832-055</p>
            <p><i class="far fa-envelope"></i>&emsp; Email: info@mitechcenter.vn</p>
        </div>
        <div class="link-footer">
            <h5>LIÊN KẾT NHANH</h5>
            <img class="line-2" src="{{ URL::to('/') }}/img/Line.png" width="60px" alt="line">
            <p><a href="#">Tin tức sự kiện</a></p>
            <p><a href="#">Tin tuyển sinh</a></p>
            <p><a href="#">E-learning</a></p>
        </div>
    </div>
</body>

</html>