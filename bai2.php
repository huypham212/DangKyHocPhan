<?php
//Câu 1
echo ("Câu 1: Tạo mảng liên hợp hiển thị tên các quốc gia và thủ đô trên danh sách.<br/>");

$arr = array(
    "Việt Nam" => "Hà Nội",
    "Trung Quốc" => "Bắc Kinh",
    "Mỹ" => "Washington DC",
    "Anh" => "London",
    "Pháp" => "Paris"
);

foreach ($arr as $country => $capital) {
    echo ("Thủ đô của $$country là $capital.");
}
echo ("<br/><br/>");

//Câu 2
echo ("Câu 2: Tìm giá trị trung bình của các phần tử mảng và hiển thị 5 phần tử nhỏ nhất và lớn nhất. <br/>");

$arr_num = array(1, 3, 6, 9, 14, 23, 7, 33, 12, 25, 58, 64, 21, 78, 2);
$sum = 0;

//In mảng
echo ("[");
for ($i = 0; $i < count($arr_num); $i++) {
    if ($i != count($arr_num) - 1) {
        echo ($arr_num[$i] . ", ");
    } else {
        echo ($arr_num[$i]);
    }
}
echo ("] <br/>");

//Tìm trung bình cộng của mảng
foreach ($arr_num as $num) {
    $sum += $num;
}
echo ("Trung bình cộng của mảng là: " . $sum / count($arr_num) . "<br/>");

//Tìm 5 giá trị nhỏ nhất
sort($arr_num);
echo ("5 phần tử nhỏ nhất trong mảng là: <br/>");
echo ("[");
for ($i = 0; $i < 5; $i++) {
    if ($i != 4) {
        echo ($arr_num[$i] . ", ");
    } else {
        echo ($arr_num[$i]);
    }
}
echo ("] <br/>");

//Tìm 5 giá trị lớn nhất
rsort($arr_num);
echo ("5 phần tử lớn nhất trong mảng là: <br/>");
echo ("[");
for ($i = 0; $i < 5; $i++) {
    if ($i != 4) {
        echo ($arr_num[$i] . ", ");
    } else {
        echo ($arr_num[$i]);
    }
}
echo ("] <br/><br/>");
?>

<html>

<body>
    <?php
    //Câu 3
    echo ("Câu 3: Hiển thị văn bản Chuyển đổi mảng thành chữ hoa - chữ thường và ngược lại thông qua button html <br/>");
    $arr = ["Huy", "Hai", "Long", "Khai", "Uyen", "Hung"];
    $upper_case = false;
    echo ("[");
    for ($i = 0; $i < count($arr); $i++) {
        if ($i != count($arr) - 1) {
            echo ($arr[$i] . ", ");
        } else {
            echo ($arr[$i]);
        }
    }
    echo ("] <br/>");
    ?>
    <form method="post">
        <input type="submit" name="hoa">
        <?php
        if (isset($_POST["hoa"])) {
            if ($upper_case == false) {
                echo ("[");
                for (
                    $i = 0;
                    $i < count($arr);
                    $i++
                ) {
                    if (
                        $i != count($arr) - 1
                    ) {
                        echo (strtoupper($arr[$i]) . ", ");
                    } else {
                        echo (strtoupper($arr[$i]));
                    }
                }
                echo ("] <br/>");
                $upper_case = true;
            } else {
                echo ("[");
                for (
                    $i = 0;
                    $i < count($arr);
                    $i++
                ) {
                    if (
                        $i != count($arr) - 1
                    ) {
                        echo (strtoupper($arr[$i]) . ", ");
                    } else {
                        echo (strtoupper($arr[$i]));
                    }
                }
                echo ("] <br/>");
                $upper_case = false;
            }
        }
        ?>
    </form>

</body>

</html>