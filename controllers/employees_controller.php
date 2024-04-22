
<?php
require_once('controllers/base_controller.php');
require_once('models/employee.php');
class EmployeesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){
    
    $this->render('employees');
  }

  public function getEmployeeList(){
    $employee = Employee::all();
    echo json_encode(array('data' => $employee));
  }

  public function deleteEmployeeById() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = Employee::delete($id);

        if ($result) {
            echo json_encode(array('success' => true, 'message' => "Xóa nhân viên thành công!"));
        } else {
            echo json_encode(array('success' => false, 'message' => "Xóa nhân viên thất bại!"));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
    }
}
}
