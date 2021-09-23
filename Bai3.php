<?php
//Câu 1
echo ("Câu 1: Hiển thị 1-2-3-4-5-6-7-8-9-…-100 trên một dòng thông qua vòng lặp for, while <br/>");
for ($i = 1; $i <= 100; $i++) {
    if ($i < 100) {
        echo ("$i-");
    } else {
        echo ("$i <br/><br/>");
    }
}

//Câu 2
echo ("Câu 2: Hiển thị tổng dãy số nguyên từ 1 đến 200 <br/>");
$sum = 0;
for ($i = 1; $i <= 200; $i++) {
    $sum += $i;
}

echo ("Tổng các số từ 1 đến 200 là $sum <br/><br/>");

//Câu 3
echo ("Câu 3: Hiển thị giai thừa của một số trong PHP <br/>");
$num = 5;
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
    $fact = $fact * $i;
}
echo ("$num! = $fact <br/><br/>");

//Câu 4
echo ("Câu 4: Hiển thị số lượng một ký tự bất kì trong chuỗi <br/>");
$str = "today is a beautiful day";
$arr_str = str_split($str);
$count = 0;
$char;
foreach ($arr_str as $element) {
    if ($element == "b") {
        $count++;
        $char = $element;
    }
}
echo ("Số lượng kí tự $char trong '$str' là $count <br/><br/>");
