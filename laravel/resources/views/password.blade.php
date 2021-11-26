<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style-login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/312ace3ead.js" crossorigin="anonymous"></script>
    <title> Reset Password </title>

    {{-- <script type="text/javascript">
        $(window).load(function(){        
            $('#myModal').modal('show');
        }); 
    </script> --}}
</head>

<body>
    {{-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      
        </div>
      </div> --}}

      

    <div class="card card-login">
        <div class="card-body card-content">
            <img src="{{ URL::to('/') }}/img/logo.png" width="64.3px" height="109px" alt="logo">
            <h5 class="card-title">ĐỔI MẬT KHẨU</h5>
            {{-- <p>{{ $masv }}</p> --}}
            <form method="POST" action="{{ url('/password') }}">
                @csrf
                <div class="container card-form">
                    <div class="inputContainer">
                        <i class="fas fa-lock icon"></i>
                        <input class="card-form-input" type="password" placeholder="Nhập mật khẩu cũ" name="oldPassword" required>
                    </div>
                    <div class="inputContainer">
                        <i class="fas fa-lock icon"></i>
                        <input class="card-form-input" type="password" placeholder="Nhập mật khẩu mới" name="newPassword" required>
                    </div>
                    <div class="inputContainer">
                        <i class="fas fa-lock icon"></i>
                        <input class="card-form-input" type="password" placeholder="Nhập lại mật khẩu mới" name="cfrNewPassword" required>
                    </div>
                    <div class="btn-login">
                        <button name="dangnhap" class="btn btn-outline-danger">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>