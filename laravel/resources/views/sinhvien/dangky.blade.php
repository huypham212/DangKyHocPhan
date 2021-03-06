<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/sinhvien/style-dangky.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/312ace3ead.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ URL::to('/') }}/css/admin/style-detail.css"> --}}
</head>
<title> Dashboard </title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu-header">
            <a class="navbar-brand logo-header" href="#">
                <img src="{{ URL::to('/') }}/img/logo.png" width="27px" height="45px"
                    style="margin-left: 20px; margin-right: 26px;" alt="logo" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="left-menu-header">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khoá để tìm kiếm"
                        aria-label="Search">
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
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" style="width: 150px;"
                    alt="avatar" />
            </div>
            <div class="info-content">
                <h5>{{ $tensv }}</h5>
                <p>Mã sinh viên: {{ $masv }}</p>
                <div class="info-tag">
                    <p class="info-tag-1">Khoá: {{ $lop }}</p>
                    <p class="info-tag-2">Lớp học: {{ $count_totalLop }}</p>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar order-last order-lg-0 menu-navbar">
        <ul>
            <li><a class="nav-link active" href="{{ route('dangky.index') }}"><span class="style-active">Đăng ký học
                        phần</span></a></li>
            <li><a class="nav-link" href="{{ route('ketqua.index') }}">Kết quả đăng ký</a></li>
            <li><a class="nav-link" href="{{ route('lichsu.index') }}">Lịch sử đăng ký</a></li>
        </ul>
    </nav>
    <div class="main">
        <div class="card">
            <div class="card-header">
                <h6><img src="{{ URL::to('/') }}/img/Vector.png" width="15px" height="15px" alt="logo" />Thông tin
                    đăng ký</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-5">
                                <p class="card-title">Số tín chỉ tối thiểu cần ĐK:</p>
                                <p class="card-title">Hạn chế số sinh viên tối đa:</p>
                            </div>
                            <div class="col">
                                <p class="card-text">3</p>
                                <p class="card-text">Có</p>
                            </div>
                        </div>
                        <p style="font-weight: bold;">Hạn đăng ký: 26/08/2021 -> 28/08//2021</p>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-5">
                                <p class="card-title">Số tín chỉ tối đa cần ĐK:</p>
                                <p class="card-title">Cho phép đăng ký ngoài ngành:</p>
                            </div>
                            <div class="col">
                                <p class="card-text">Không hạn chế</p>
                                <p class="card-text">Không</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('status'))
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#myModal').modal('show');
                });
            </script>
        @endif
        <div class="modal" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{ session('status') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6><img src="{{ URL::to('/') }}/img/Vector.png" width="15px" height="15px" alt="logo" /> Chương
                    trình đào tạo</h6>
            </div>
            <div class="card-body">
                <div>
                    <h4>Khoá {{ $lop }} - Ngành Công nghệ thông tin</h4>
                </div>
                <div class="nav-danhsach">
                    <p>DANH SÁCH LỚP HỌC PHẦN CÓ THỂ ĐĂNG KÝ HỌC KỲ 1 NĂM HỌC 2020 - 2021</p>
                </div>

                @foreach ($dataMH as $mh)
                    {{-- @foreach ($list_exist_mh as $exist_mh)
                        @if ($exist_mh->mamh != $mh->MaMH) --}}
                            @foreach ($exist_lophp as $item)
                                @if ($item->mamh == $mh->MaMH)
                                <div style="width: 100%;">
                                    <button type="button" class="collapse-button" data-toggle="collapse"
                                        data-target="#{{ $mh->MaMH }}">
                                    <p class="collapse-button-text">{{ $mh->MaMH }} - {{ $mh->TenMH }}</p>
                                    <i class="fas fa-caret-right collapse-button-icon"></i>
                                    </button>
                                    <div id="{{ $mh->MaMH }}" class="collapse">
                                        <table class="table table-hover">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style='text-align:center' scope="col">STT</th>
                                                    <th style='text-align:center' scope="col">Mã lớp học phần</th>
                                                    <th style='text-align:center' scope="col">Tên lớp học phần</th>
                                                    <th style='text-align:center' scope="col">Số tín chỉ</th>
                                                    <th style='text-align:center' scope="col">Thời gian & Địa điểm</th>
                                                    <th style='text-align:center' scope="col">Giảng viên</th>
                                                    <th style='text-align:center' scope="col">Sỉ số</th>
                                                    <th style='text-align:center' scope="col">Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p hidden>{{ $index = 1 }}</p>
                                                @foreach ($dataLopHP as $lophp)
                                                    @if ($lophp->MaMH == $mh->MaMH)
                                                        <tr>
                                                            <td class="align-middle"
                                                                style='text-align:center; font-size:14px'>
                                                                {{ $index++ }}</td>
                                                            <td class="align-middle"
                                                                style='text-align:center; font-size:14px'>
                                                                {{ $lophp->MaLopHP }}</td>
                                                            <td class="align-middle"
                                                                style='text-align:center; font-size:14px'>
                                                                {{ $lophp->TenLopHP }}</td>
                                                            <td class="align-middle"
                                                                style='text-align:center; font-size:14px'>
                                                                0{{ $mh->SoTC }}</td>
                                                            <td class="align-middle"
                                                                style='text-align:center; font-size:14px'>
                                                                <p style="color: #000000;">{{ $lophp->ThoiGian }} -
                                                                    {{ $lophp->DiaDiem }}</p>
                                                            </td>
                                                            @foreach ($dataGV as $gv)
                                                                @if ($gv->MaGV == $lophp->MaGV)
                                                                    <td class="align-middle"
                                                                        style='text-align:center; font-size:14px'>
                                                                        {{ $gv->TenGV }}</td>
                                                                @endif
                                                            @endforeach
                                                            <td class="align-middle"
                                                                style='text-align:center; font-size:14px'>
                                                                {{ $lophp->SiSo }}/30</td>
                                                            <td class="align-middle" style='text-align:center'>
                                                                <form action="{{ route('dangky.store') }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <input type="hidden" class="form-control"
                                                                            name="malophp" value="{{ $lophp->MaLopHP }}">
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger"><b>Đăng
                                                                            ký</b></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        {{-- @endif
                    @endforeach --}}
                @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6><img src="{{ URL::to('/') }}/img/Vector.png" width="15px" height="15px" alt="logo" />Kết quả
                    đăng ký học phần</h6>
            </div>
            <div class="card-body">
                <div>
                    <h5 style="padding-left: 25px;">NĂM HỌC {{$namhoc}}, HỌC KỲ {{$hk}}</h5>
                    <p style="padding-left: 100px;">Số học phần đã đăng ký: {{ $count_lophp }}</p>
                    <p style="padding-left: 100px;">Số tín chỉ học tập đã đăng ký: 9</p>
                    <hr class="solid" width="100%">
                </div>
                <div class="nav-ketqua">
                    <p>Sắp xếp:</p>
                    <div style="width: 180px" class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><i
                                    class="fas fa-sort-amount-up"></i></label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Tên lớp học</option>
                            <option value="1">Tên giảng viên</option>
                        </select>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th style='text-align:center' scope="col">STT</th>
                            <th style='text-align:center' scope="col">Mã học phần</th>
                            <th style='text-align:center' scope="col">Lớp học phần</th>
                            <th style='text-align:center' scope="col">Số tín chỉ</th>
                            <th style='text-align:center' scope="col">Thời gian & Địa điểm</th>
                            <th style='text-align:center' scope="col">Giảng viên</th>
                            <th style='text-align:center' scope="col">Sỉ số</th>
                            <th style='text-align:center' scope="col">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <p hidden>{{ $index = 1 }}</p>
                        @foreach ($current_lophp as $lhp)
                                <tr>
                                    <td class="align-middle" style='text-align:center; font-size:14px'>
                                        {{ $index++ }}</td>
                                    <td class="align-middle" style='text-align:center; font-size:14px'>
                                        {{ $lhp->MaMH }}</td>
                                    <td class="align-middle" style='text-align:center; font-size:14px'>
                                        {{ $lhp->TenLopHP }}</td>
                                    @foreach ($dataMH as $mh)
                                        @if ($mh->MaMH == $lhp->MaMH)
                                            <td class="align-middle" style='text-align:center; font-size:14px'>
                                                0{{ $mh->SoTC }}</td>
                                        @endif  
                                    @endforeach
                                    <td class="align-middle" style='text-align:center; font-size:14px'>
                                        <p style="color: #000000;">{{ $lhp->ThoiGian }} -
                                            {{ $lhp->DiaDiem }}</p>
                                    </td>
                                    @foreach ($dataGV as $gv)
                                        @if ($gv->MaGV == $lhp->MaGV)
                                            <td class="align-middle" style='text-align:center; font-size:14px'>
                                                {{ $gv->TenGV }}</td>
                                        @endif
                                    @endforeach
                                    <td class="align-middle" style='text-align:center; font-size:14px'>
                                        {{ $lhp->SiSo }}/30</td>
                                    <td class="align-middle" style='text-align:center'>
                                        <form action="{{ route('dangky.destroy', $lhp->MaLopHP) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="width: 30px; height: 30px; padding-left: 7px; padding-top: 2px;" type="submit" class="btn btn-danger" title="Delete">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
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
