<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header('Location: login.php');
    exit;
}

// Nếu đã đăng nhập, hiển thị nội dung trang dashboard
echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../websites/assets/stylesheets/dashboard.css">
    <title>TRANG CHỦ</title>
</head>
<body>
    <form action="trangchu.php" class="">
        <div class="menutren">
            <label for="">Nguyễn Văn A</label>
            <label for="">Đăng xuất</label>
        </div>
        <div class="ndchinh">
        <div class="menuchinh">
            <div class="dsnv">
                <a href="#">Danh sách nhân viên</a>
            </div>
            <div class="dskh">
                <a href="#">Danh sách khách hàng</a>
            </div>
            <div class="dmhd">
                <a href="#">Danh mục hợp đồng</a>
            </div>
            <div class="hslapmoi">
                <a href="#">Hồ sơ lắp mới</a>
            </div>
            <div class="hsdd">
                <a href="#">Hồ sơ di dời</a>
            </div>
            <div class="hssc">
                <a href="#">Hồ sơ sửa chữa</a>
            </div>
            <div class="ngungdv">
                <a href="#">Ngưng sử dụng</a>
            </div>
        </div>
        <div class="trangchinh">
            <div class="khung lm">
                <label for="">DANH SÁCH LẮP MỚI</label>
            </div>
            <div class="khung sc">
                <label for="">DANH SÁCH SỬA CHỬA</label>
            </div>
            <div class="khung dd">
                <label for="">DANH SÁCH DI DỜI</label>
            </div>
            <div class="khung ngung">
                <label for="">DANH SÁCH NGƯNG DV</label>
            </div>
        </div>
        </div>
    </form>
</body>
</html>