
<?php
require_once('controllers/base_controller.php');
require_once('models/install.php');
class InstallController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){
    $this->render('new_installation');
  }
  public function getInstallList(){
    $install = Install::all();
    echo json_encode(array('data' => $install));
  }

  public function deleteInstallById() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = Install::delete($id);

        if ($result) {
            echo json_encode(array('success' => true, 'message' => "Xóa hồ sơ thành công!"));
        } else {
            echo json_encode(array('success' => false, 'message' => "Xóa hồ sơ thất bại!"));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
    }
}
}
