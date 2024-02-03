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

