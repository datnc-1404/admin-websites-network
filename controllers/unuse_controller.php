
<?php
require_once('controllers/base_controller.php');
require_once('models/unuse.php');
class UnuseController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function index(){
    $this->render('unuse');
  }

  public function getUnuseList(){
    $unuse = Unuse::all();
    echo json_encode(array('data' => $unuse));
  }

  public function deleteUnuseById() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = Unuse::delete($id);

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
