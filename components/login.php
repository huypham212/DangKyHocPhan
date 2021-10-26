<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style-login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/312ace3ead.js" crossorigin="anonymous"></script>
    <title> Login </title>
</head>

<body>
    <?php
    session_start();

    header('Content-Type: text/html; charset=UTF-8');

    if (isset($_POST['dangnhap'])) {
        include('../database/dbConn.php');

        $masv = addslashes($_POST['masv']);
        $pass = addslashes($_POST['password']);

        if (!$masv || !$pass) {
            echo "Vui lòng điền đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        if ($masv == 'admin' && $pass == 'admin') {
            header("Location: ./admin/dashboard.php");
        } else {
            $query = "SELECT masv, matkhau FROM sinhvien WHERE masv='$masv'";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) == 0) {
                echo "Mã sinh viên không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            } else {
                $data = mysqli_fetch_array($res);
            }

            if ($pass != $data['matkhau']) {
                echo "Mật khẩu không chính xác. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            } else {
                header('Location: ./sinhvien/dangky.php');
            }
        }
        $_SESSION['masv'] = $masv;
    }
    ?>
    <div class="card card-login">
        <div class="card-body card-content">
            <img src="../assets/logo.png" width="64.3px" height="109px" alt="logo">
            <h5 class="card-title">ĐĂNG NHẬP</h5>
            <form method="POST" action="login.php">
                <div class="container card-form">
                    <div class="inputContainer">
                        <i class="fa fa-user icon"> </i>
                        <input class="card-form-input" type="text" placeholder="Nhập mã sinh viên" name="masv" required />
                    </div>
                    <div class="inputContainer">
                        <i class="fas fa-lock icon"></i>
                        <input class="card-form-input" type="password" placeholder="Nhập mật khẩu" name="password" required>
                    </div>
                    <a class="card-form-link" href="#">Quên tên đăng nhập hoặc mật khẩu?</a>
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

            <hr class="solid">
            <a class="first-login" href="#">Đây là lần đầu bạn đăng nhập?</a>
        </div>
    </div>
</body>

</html>