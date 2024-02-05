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

### Cookies, Sessions

| Đặc Điểm                  | Cookie                               | Session                              |
|---------------------------|--------------------------------------|--------------------------------------|
| **Nơi Lưu Trữ**        | Lưu trữ trên máy tính của người dùng | Lưu trữ trên máy chủ                |
| **An Toàn**               | Dữ liệu có thể bị chỉnh sửa bởi người dùng vì lưu trữ trên máy tính của họ | An toàn hơn vì lưu trữ trên máy chủ, người dùng không thể trực tiếp sửa đổi dữ liệu |
| **Thời Gian Tồn Tại**      | Có thể có thời gian sống xác định hoặc tồn tại cho đến khi trình duyệt đóng | Tồn tại cho đến khi người dùng đăng xuất hoặc đóng trình duyệt |
| **Dung Lượng Lưu Trữ**     | Có giới hạn (thường vài KB)           | Không giới hạn, nhưng tùy thuộc vào cấu hình máy chủ |
| **Truy Cập**               | Dữ liệu có thể truy cập từ cả phía client và server (nếu cần) | Dữ liệu chỉ truy cập từ phía server |
| **Sử Dụng**               | Thường được sử dụng để lưu trữ thông tin như giữa các lượt truy cập, tuỳ chọn người dùng | Thường được sử dụng để lưu trữ thông tin như thông tin đăng nhập giữa các trang trong một phiên làm việc |
| **Hiệu Suất**              | Thường nhanh hơn vì dữ liệu lưu trữ trên máy tính của người dùng | Thường đòi hỏi ít băng thông hơn do dữ liệu lưu trữ trên máy chủ |
