<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Đăng ký học phần</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Danh sách các môn học</h1>
    </div>

    <div>
        <div style="text-align: center;">
            <p>Năm học:
                <?php 
                //Phần này không cần tìm hiểu
                $month = date('m');
                $year = date('Y');

                if ($month <= 6) {
                    echo (($year - 1) . "-" . $year);
                } else {
                    echo ($year . "-" . ($year + 1));
                } ?> &nbsp&nbsp Học kỳ:
                <?php
                if ($month >= 9 || $month == 1) {
                    echo "I";
                } else {
                    echo "II";
                }
                ?></p>
        </div>

        <div>
            <?php

            //Tạo kết nối tới database có tên dangkyhocphan với SERVER='localhost', username='root', password=''
            $conn = mysqli_connect("localhost", "root", "", "dangkyhocphan") or die(mysqli_error($conn));

            //Định dạng ngôn ngữ cho các truy vấn và kết nối (Mặc định không đổi)
            $lang = mysqli_query($conn, "SET NAME 'utf8'");

            //Viết truy vấn SELECT
            $query = "SELECT DISTINCT HP.*, GV.tengv, MH.tenmh 
                        FROM lop_hp HP, giangvien GV, monhoc MH 
                        WHERE HP.mamh = MH.mamh AND HP.magv = GV.magv";

            //Gọi hàm để thực hiện truy vấn
            $res =  mysqli_query($conn, $query);
            
            //Kiểm tra truy vấn có trả về kết quả hay không
            if (mysqli_num_rows($res) == 0) {
                echo "Không tìm thấy lớp học để đăng ký. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }

            ?>

            <table border=1 width=100% style="border-color: #000000;">
                <tr>
                    <th width=5% style="background-color: #3399FF; text-align:center">STT</th>
                    <th width=30% style="background-color: #3399FF; text-align:center">Lớp học phần</th>
                    <th width=10% style="background-color: #3399FF; text-align:center">Mã học phần</th>
                    <th width=20% style="background-color: #3399FF; text-align:center">Lịch học</th>
                    <th width=15% style="background-color: #3399FF; text-align:center">Giảng viên</th>
                    <th width=5% style="background-color: #3399FF; text-align:center">Sỉ số</th>
                    <th width=5% style="background-color: #3399FF; text-align:center">Đã ĐK</th>
                    <th width=10% style="background-color: #3399FF;"></th>
                </tr>
                <?php 
                    $i = 1;

                    //Tạo vòng lặp chạy qua tất cả các giá trị trả về của truy vấn và in các kết quả ở dạng bảng
                    while($data = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td style='text-align:center'>". $i ."</td>";
                        echo "<td>". $data['tenmh']. "-". $data['malop_hp'] ."</td>";
                        echo "<td style='text-align:center'>". $data['mamh'] ."</td>";
                        echo "<td>". $data['thoigian'] ."</td>";
                        echo "<td style='text-align:center'>". $data['tengv'] ."</td>";
                        echo "<td style='text-align:center'>". $data['siso'] ."</td>";
                        echo "<td style='text-align:center'> 0 </td>";
                        echo "<td style='text-align:center'> <form action='./dangKyHocPhan.php' method='post'>" ;
                        echo "<input type='checkbox' name='check_list[]' value='$data[malop_hp]'/>";
                        echo "</td>";
                        echo "</tr>";
                        $i++;
                    }
                ?>
            </table>
        </div>
        <div>
            <?php

                //Phần này không cần tìm hiểu
                echo "<input type='submit' name='submit' Value='Submit'/>";
                echo "</form>";
                if(isset($_POST['submit'])){
                    if(!empty($_POST['check_list'])){
                        $count = count($_POST['check_list']);
    
                        echo "You check ".$count."<br/>";
    
                        foreach($_POST['check_list'] as $id){
                            echo "<p>".$id."</p>";
                        }
                    }
                    else{
                        echo "<b>Please Select Atleast One Option.</b>";
                    }
                }
            ?>
        </div>
    </div>
</body>

</html>