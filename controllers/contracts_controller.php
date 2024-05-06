
<?php
require_once('controllers/base_controller.php');
require_once('models/contract.php');
class ContractsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){ 
    $this->render('contracts');
  }
  public function getContractList(){
    $contract = Contract::all();
    echo json_encode(array('data' => $contract));
  }

  public function deleteContractById() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = Contract::delete($id);

        if ($result) {
            echo json_encode(array('success' => true, 'message' => "Xóa hợp đồng thành công!"));
        } else {
            echo json_encode(array('success' => false, 'message' => "Xóa hợp đồng thất bại!"));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
    }
}
}
