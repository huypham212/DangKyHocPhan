<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style-login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/312ace3ead.js" crossorigin="anonymous"></script>
    <title> Login </title>
</head>

<body>
    <div class="card card-login">
        <div class="card-body card-content">
            <img src="{{ URL::to('/') }}/img/logo.png" width="64.3px" height="109px" alt="logo">
            <h5 class="card-title">ĐĂNG NHẬP</h5>
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="container card-form">
                    <div class="inputContainer">
                        <i class="fa fa-user icon"> </i>
                        <input class="card-form-input" type="text" placeholder="Nhập mã sinh viên" name="masv" required />
                    </div>
                    <div class="inputContainer">
                        <i class="fas fa-lock icon"></i>
                        <input class="card-form-input" type="password" placeholder="Nhập mật khẩu" name="password" required>
                    </div>
                    <a class="card-form-link" href="{{ route('password') }}">Quên tên đăng nhập hoặc mật khẩu?</a>
                    <div class="btn-login">
                        <button name="dangnhap">Đăng nhập</button>
                    </div>
                    <div class="toggle-btn">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <p>Ghi nhớ tên đăng nhập</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>