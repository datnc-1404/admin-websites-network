
<?php
require_once('controllers/base_controller.php');
require_once('models/repair.php');
class RepairController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){
    $this->render('repair');
  }
  public function getRepairList(){
    $repair = Repair::all();
    echo json_encode(array('data' => $repair));
  }

  public function deleteRepairById() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = Repair::delete($id);

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
