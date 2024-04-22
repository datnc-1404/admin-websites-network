<?php
    session_start();
    // Kiểm tra nếu có thông báo lỗi trong session, hiển thị và xóa thông báo sau khi đã hiển thị
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    unset($_SESSION['error']); // Xóa thông báo lỗi sau khi đã hiển thị
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../websites/assets/stylesheets/dashboard.css">
    <title>ĐĂNG NHẬP</title>
</head>
<body class="dn">
    <form action="index.php?controller=pages&action=login" method="POST">
    <div class="frmdn">
    <div class="khungdn">
        <div class="tieudedn">
            <span>ĐĂNG NHẬP</span>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="tk">
            <input type="text" id="ten" name="username" class="nhap" required>
            <label for="ten" class="lbl">Tên tài khoản</label>
            <i class="bi bi-person-fill icon"></i>
        </div>
        <div class="tk">
            <input type="password" id="mk" name="password" class="nhap" required>
            <label for="mk" class="lbl">Mật khẩu</label>
            <i class="bi bi-lock-fill icon"></i>
        </div>
        <div class="nho-quen">
            <div class="nhotk">
                <input type="checkbox" id="nho">
                <label for="nho">Nhớ tài khoản</label>
            </div>
            <div class="quenmk">
                <a href="#">Quên mật khẩu?</a>
            </div>
        </div>
        <div class="tk">
            <input type="submit" name="login" class="nutdn" value="Đăng nhập">
        </div>
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>