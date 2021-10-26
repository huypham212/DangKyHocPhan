<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style-dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/312ace3ead.js" crossorigin="anonymous"></script>
    <title> Dashboard </title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu-header">
            <a class="navbar-brand logo-header" href="#">
                <img src="../assets/logo.png" width="27px" height="45px" style="margin-left: 26px; margin-right: 26px;" alt="logo" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="left-menu-header">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khoá để tìm kiếm" aria-label="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="right-menu-header">
                    <a href="#"><i class="far fa-bell"></i></a>
                    <button id="btnLogin" onclick="login()">Đăng nhập</button>
                    <script>
                        var btn = document.getElementById("btnLogin");
                        btn.addEventListener('click', function() {
                            document.location.href = '<?php echo "./login.php" ?>';
                        });
                    </script>
                </div>
            </div>
        </nav>
        <div class="intro-header">
            <p class="title-header">ĐỘI NGŨ GIẢNG VIÊN</p>
            <p class="content-header">Chất lượng cao, giàu chuyên môn</p>
            <button>Xem chi tiết</button>
        </div>
    </div>

    <div class="main">
        <div class="cntt">
            <h2>Khoa công nghệ thông tin - tác chiến không gian mạng</h2>
            <div class="card-group">
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img1.png" class="card-img-top card-image" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">ĐHCN1<br>(2014-2018)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img2.png" class="card-img-top card-image" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">ĐHCN2<br>(2015-2019)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img3.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">ĐHCN3<br>(2016-2020)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img4.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">ĐHCN4<br>(2017-2021)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img5.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">ĐHCN5<br>(2018-2022)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img6.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">CDCN1<br>(2016-2019)</h5>
                            <p class="card-text card-content-text">5 lớp học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img7.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">CDCN2<br>(2017-2020)</h5>
                            <p class="card-text card-content-text">5 lớp học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img8.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">CDCB3<br>(2018-2021)</h5>
                            <p class="card-text card-content-text">5 lớp học</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ktdt">
            <h2>Khoa kỹ thuật điện tử - viễn thông</h2>
            <div class="card-group">
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img1.png" class="card-img-top card-image" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">DHVT1<br>(2014-2018)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img4.png" class="card-img-top card-image" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">DHVT2<br>(2015-2019)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img2.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">DHVT3<br>(2016-2020)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img7.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">DHVT4<br>(2019-2021)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img8.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">DHVT5<br>(2018-2022)</h5>
                            <p class="card-text card-content-text">5 ngành học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img3.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">CDVT1<br>(2016-2019)</h5>
                            <p class="card-text card-content-text">5 lớp học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img5.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">CDVT2<br>(2017-2020)</h5>
                            <p class="card-text card-content-text">5 lớp học</p>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card text-white">
                        <img src="../assets/img6.png" class="card-img-top" alt="image">
                        <div class="card-img-overlay">
                            <h5 class="card-title card-content-title">CDVT3<br>(2018-2021)</h5>
                            <p class="card-text card-content-text">5 lớp học</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="footer">
        <div class="logo-footer">
            <img src="../assets/logo_footer.png" width="468px" height="181px" alt="logo">
        </div>
        <div class="info-footer">
            <h5>THÔNG TIN CẦN THIẾT</h5>
            <img class="line-1" src="../assets/Line.png" width="55px" alt="line">
            <p><i class="fas fa-map-marker-alt"></i>&emsp; Số 101, Mai Xuân Thưởng, Nha Trang, Khánh Hoà</p>
            <p><i class="fas fa-phone-alt"></i>&emsp; 0583-801-805, 987654</p>
            <p><i class="fas fa-fax"></i>&emsp; 058-832-055</p>
            <p><i class="far fa-envelope"></i>&emsp; Email: info@mitechcenter.vn</p>
        </div>
        <div class="link-footer">
            <h5>LIÊN KẾT NHANH</h5>
            <img class="line-2" src="../assets/Line.png" width="60px" alt="line">
            <p><a href="#">Tin tức sự kiện</a></p>
            <p><a href="#">Tin tuyển sinh</a></p>
            <p><a href="#">E-learning</a></p>
        </div>
    </div>
</body>

</html>