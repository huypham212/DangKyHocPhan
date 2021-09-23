<?php
//Câu 1
echo ("Câu 1: Lấy thông tin cấu hình và phiên bản PHP <br/>");
phpinfo();
echo ("<br/><br/>");

//Câu 2
echo ("Câu 2: Lấy địa chỉ Client IP trong PHP <br/>");
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//Kiểm tra xem IP có phải là từ Proxy  
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//Kiểm tra xem IP có phải là từ Remote Address  
else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo "Địa chỉ Client IP là: $ip_address <br/><br/>";

//Câu 3
echo ("Câu 3: Lấy URL trong PHP <br/>");
$url = 'https://elearning.tcu.edu.vn/course/view.php?id=178&sectionid=1371';
$url = parse_url($url);
echo 'Scheme : ' . $url['scheme'] . "<br>";
echo 'Host : ' . $url['host'] . "<br>";
echo 'Path : ' . $url['path'] . "<br/><br/>";

//Câu 4
echo ("Câu 4: Lấy thư mục gốc và hiển thị toàn bộ nội dung cây thư mục <br/>");
$rd = getenv('DOCUMENT_ROOT');
echo $rd . "<br>";

$arr_folder = scandir($rd);
foreach ($arr_folder as $element) {
    echo ("$element <br/>");
}
echo ("<br/>");

//Câu 5
echo ("Câu 5: Lấy thời gian file chỉnh sửa lần cuối cùng của trang hiện tại <br/>");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ten_file_hien_tai = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($ten_file_hien_tai);
echo ("$ten_file_hien_tai <br/>");
echo "Last modified: " . date(DATE_RFC2822, $file_last_modified) . "<br><br/>";