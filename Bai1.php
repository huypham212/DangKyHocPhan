<?php
//Câu 1
echo ("Câu 1: Lấy thông tin cấu hình và phiên bản PHP <br/>");

//PHP cung cấp hàm phpinfo() để lấy thông tin tin cấu hình và phiên bản PHP hiện tại trên máy
phpinfo();
echo ("<br/><br/>");

/*-----------------------------------------------------------------------------------------------*/

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

/*-----------------------------------------------------------------------------------------------*/

//Câu 3
echo ("Câu 3: Lấy URL trong PHP <br/>");
$url = 'https://elearning.tcu.edu.vn/course/view.php?id=178&sectionid=1371';

//Hàm parse_url() sẽ phân tích URL được truyền vào và trả về các thành phần của URL đó
$url = parse_url($url);

//Scheme là phương thức giao tiếp của URL tới server
echo 'Scheme : ' . $url['scheme'] . "<br>";
//Host là tên miền của URL
echo 'Host : ' . $url['host'] . "<br>";
//Path là đường dẫn của URL cho ta thấy chính xác vị trí của folder hoặc file trên server 
echo 'Path : ' . $url['path'] . "<br/><br/>";

/*-----------------------------------------------------------------------------------------------*/

//Câu 4
echo ("Câu 4: Lấy thư mục gốc và hiển thị toàn bộ nội dung cây thư mục <br/>");

//Hàm getenv() sẽ lấy giá trị của biến môi trường được truyền vào. Ở đây biến môi trường sẽ là DOCUMENT_ROOT
$rd = getenv('DOCUMENT_ROOT');
echo $rd . "<br>";

//Hàm scandir() sẽ đọc toàn bộ các file và folder trong đường dẫn được truyền vào
//Đường dẫn ở đây sẽ được lấy từ hàm getenv() ở trên
$arr_folder = scandir($rd);

//Các file và folder sau khi lấy được sẽ được trả về dưới dạng 1 mảng
//Vì thế nên dùng vòng lặp foreach để in ra các file và folder
foreach ($arr_folder as $element) {
    echo ("$element <br/>");
}
echo ("<br/>");

/*-----------------------------------------------------------------------------------------------*/

//Câu 5
echo ("Câu 5: Lấy thời gian file chỉnh sửa lần cuối cùng của trang hiện tại <br/>");

//Hàm date_default_timezone_set() dùng để lấy định dạng thời gian ở khu vực mong muốn
date_default_timezone_set('Asia/Ho_Chi_Minh');

//$_SERVER['PHP_SELF'] sẽ lấy đường dẫn đến file hiện tại
//Hàm basename() sẽ trả về thành phần tên theo sau của đường dẫn
$ten_file_hien_tai = basename($_SERVER['PHP_SELF']);

//Hàm filemtime() sẽ lấy thời gian chỉnh sửa cuối cùng của file được truyền vào
$file_last_modified = filemtime($ten_file_hien_tai);
echo ("$ten_file_hien_tai <br/>");

//Tham số DATE_RFC2822 sẽ xuất thời gian ở định dạng D, dd MMM YYYY HH:mm:ss O 
echo "Last modified: " . date(DATE_RFC2822, $file_last_modified) . "<br><br/>";
