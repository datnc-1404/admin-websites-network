
<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $this->render('login');
  }

  public function login()
    {
        session_start();
        // Xử lý dữ liệu đăng nhập
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            var_dump($username);
            // Đây là nơi kiểm tra thông tin đăng nhập (ví dụ: có thể sử dụng cơ sở dữ liệu để kiểm tra)
            // Ví dụ đơn giản: Kiểm tra nếu username là "admin" và password là "123456"
            if ($username === 'admin' && $password === '123456') {
                // Nếu đăng nhập thành công, chuyển hướng đến trang dashboard
                $_SESSION['username'] = $username;
                header('Location: index.php?controller=pages&action=dashboard');
                exit;
            } else {
                $_SESSION['error'] = 'Invalid username or password.';
                header('Location: index.php?controller=pages&action=home');
                exit;
            }
        }
    }
  public function dashboard (){
    $this->render('dashboard');
  }

  public function logout()
  {
      // Xóa các session hoặc đánh dấu người dùng là đã đăng xuất
      // Ví dụ: Nếu sử dụng session, bạn có thể xóa tất cả các session của người dùng
      session_start(); // Bắt đầu session
      session_unset(); // Xóa tất cả các biến session
      session_destroy(); // Hủy session
      
      // Chuyển hướng người dùng đến trang đăng nhập sau khi đăng xuất
      header('Location: index.php?controller=pages&action=home'); // Điều hướng đến trang đăng nhập
      exit;
  }
  public function error()
  {
    $this->render('error');
  }
}
