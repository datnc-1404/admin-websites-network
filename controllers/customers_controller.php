
<?php
require_once('controllers/base_controller.php');
require_once('models/customer.php');
class CustomersController extends BaseController
{
  function __construct()
  { 
    $this->folder = 'pages';
  }
  public function index(){
    $this->render('customers');
  }

  public function getCustomerList(){
    $customer = Customer::all();
    echo json_encode(array('data' => $customer));
  }

  public function deleteCustomerById() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = Customer::delete($id);

        if ($result) {
            echo json_encode(array('success' => true, 'message' => "Xóa khách hàng thành công!"));
        } else {
            echo json_encode(array('success' => false, 'message' => "Xóa khách hàng thất bại!"));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
    }
}
}
