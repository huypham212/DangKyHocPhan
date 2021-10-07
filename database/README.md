## Cách import database:
- Khởi động Xampp và Start Apache, MySQL
- Vào trang admin của MySQL và tạo 1 database mới
- Import file database.sql vào database mới tạo
## Cách kết nối tới database
- Mở file dbConnect.php
- Sửa thông tin trong hàm mysqli_connect("localhost", "your_username", "your_password", "database_name")