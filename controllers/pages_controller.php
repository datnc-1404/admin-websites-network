
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
        // Xử lý dữ liệu đăng nhập
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Đây là nơi kiểm tra thông tin đăng nhập (ví dụ: có thể sử dụng cơ sở dữ liệu để kiểm tra)
            // Ví dụ đơn giản: Kiểm tra nếu username là "admin" và password là "123456"
            if ($username === 'admin' && $password === '123456') {
                // Nếu đăng nhập thành công, chuyển hướng đến trang dashboard
                header('Location: index.php?controller=pages&action=dashboard');
                exit;
            } else {
                // Nếu thông tin đăng nhập không chính xác, có thể xử lý thông báo lỗi ở đây
                echo "Invalid username or password.";
            }
        }
    }
  public function dashboard (){
    $this->render('dashboard');
  }
  public function error()
  {
    $this->render('error');
  }
}
