
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

  public function addEmployee() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['MaNV'], $_POST['TenNV'], $_POST['NS'], $_POST['DC'], $_POST['CV'], $_POST['ID_TK'])) {
        // Lấy dữ liệu từ biến POST
        $MaNV = $_POST['MaNV'];
        $TenNV = $_POST['TenNV'];
        $NS = $_POST['NS'];
        $DC = $_POST['DC'];
        $CV = $_POST['CV'];
        $ID_TK = $_POST['ID_TK'];

        // Thực hiện thêm nhân viên
        $result = Employee::add($MaNV, $TenNV, $NS, $DC, $CV, $ID_TK);

        // Trả về kết quả
        if ($result) {
            echo json_encode(array('success' => true, 'message' => "Thêm nhân viên thành công!"));
        } else {
            echo json_encode(array('success' => false, 'message' => "Thêm nhân viên thất bại!"));
        }
    } else {
        // Trường hợp request không hợp lệ
        echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
    }
  }
}
