# PHP-Practice

### Một số biến môi trường (superglobals) cơ bản trong PHP

1. $_GLOBALS: Một mảng chứa tất cả các biến toàn cục.
1. $_SERVER: Chứa thông tin về môi trường máy chủ và các thông tin khác như URL, headers.
1. $_REQUEST: Kết hợp $_GET, $_POST, và $_COOKIE. Thường không được khuyến khích sử dụng do nguy cơ bảo mật.
1. $_GET: Dùng để nhận dữ liệu từ URL thông qua phương thức GET.
1. $_POST: Dùng để nhận dữ liệu từ form thông qua phương thức POST.
1. $_FILES: Dùng để nhận thông tin về file được tải lên thông qua form.
1. $_COOKIE: Lưu trữ và truy cập thông tin cookie từ request của client.
1. $_SESSION: Lưu trữ biến phiên (session variables) giữa các request. Được sử dụng để lưu trữ thông tin phiên làm việc của người dùng.
1. $GLOBALS: Một biến chứa tất cả các biến toàn cục.
1. $_ENV: Chứa thông tin về môi trường máy chủ.

### Một số hàm phổ biến trong PHP

**Xử lý chuỗi:**

+ strlen(): Đếm số ký tự trong một chuỗi.
+ str_replace(): Thay thế một chuỗi con bằng một chuỗi khác trong một chuỗi.
+ substr(): Trích xuất một phần của chuỗi.

**Mảng:**

+ count(): Đếm số phần tử trong mảng.
+ array_push(): Thêm một hoặc nhiều phần tử vào cuối mảng.
+ array_pop(): Lấy và xóa phần tử cuối cùng của mảng.

**Thời gian và Ngày tháng:**

+ date(): Định dạng và hiển thị thời gian/ngày.
+ time(): Trả về thời gian hiện tại dưới dạng timestamp.
+ strtotime(): Chuyển đổi chuỗi thời gian sang timestamp.

**Xử lý file:**

+ file_get_contents(): Đọc nội dung của một file vào một chuỗi.
+ file_put_contents(): Ghi một chuỗi vào một file.
+ fopen(), fclose(), fwrite(): Mở, đóng, và ghi vào file theo cách chi tiết hơn.

**Xử lý URL:**

+ urlencode(): Mã hóa một chuỗi để sử dụng trong URL.
+ urldecode(): Giải mã một chuỗi URL đã được mã hóa.

**Xử lý số liệu:**
 
+ intval(): Chuyển đổi một giá trị sang kiểu số nguyên.
+ floatval(): Chuyển đổi một giá trị sang kiểu số thực.

**Session và Cookie:**

+ session_start(): Bắt đầu một phiên làm việc.
+ setcookie(): Đặt một cookie.

**Các hàm kiểm tra và xử lý biểu thức điều kiện:**

+ isset(): Kiểm tra xem biến có được đặt hay không.
+ empty(): Kiểm tra xem một biến có rỗng hay không.
+ if, else, elseif: Câu lệnh điều kiện.

**Hàm xử lý với SQL (MySQLi, PDO):**

+ mysqli_query(): Thực hiện một truy vấn SQL.
+ mysqli_fetch_assoc(): Trả về một hàng kết quả dưới dạng mảng kết hợp.
+ PDO: Một lớp để thực hiện các thao tác cơ sở dữ liệu không phụ thuộc vào cơ sở dữ liệu cụ thể.

### array_combine vs array_merge
Combine nó sẽ gộp theo kiểu key - value , còn merge thì nó sẽ gộp theo kiểu gì cũng được