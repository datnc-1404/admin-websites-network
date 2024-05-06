
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['employeeName'], $_POST['employeeDOB'], $_POST['employeeAddress'], $_POST['employeePosition'], $_POST['employeeID_TK'])) {
        // Lấy dữ liệu từ biến POST
        $TenNV = $_POST['employeeName'];
        $NS = $_POST['employeeDOB'];
        $DC = $_POST['employeeAddress'];
        $CV = $_POST['employeePosition'];
        $ID_TK = $_POST['employeeID_TK'];

        // Thực hiện thêm nhân viên
        $result = Employee::add($TenNV, $NS, $DC, $CV, $ID_TK);

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
    //Lấy thông tin nhân viên theo id để đổ dữ liệu ra modal cập nhật
    public function getEmployeeById() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
          $id = $_POST['id'];
          
          // Gọi hàm để lấy thông tin nhân viên theo ID
          $employee = Employee::getEmployeeById($id);

          if ($employee) {
              // Trả về thông tin nhân viên nếu tìm thấy
              echo json_encode(array('success' => true, 'employee' => $employee));
          } else {
              // Trả về thông báo lỗi nếu không tìm thấy nhân viên
              echo json_encode(array('success' => false, 'message' => "Không tìm thấy nhân viên với ID này!"));
          }
      } else {
          // Trường hợp request không hợp lệ
          echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
      }
    }

    public function updateEmployee() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['employeeID'], $_POST['employeeName'], $_POST['employeeDOB'], $_POST['employeeAddress'], $_POST['employeePosition'], $_POST['employeeID_TK'])) {
          // Lấy dữ liệu từ biến POST
          $MaNV = $_POST['employeeID'];
          $TenNV = $_POST['employeeName'];
          $NS = $_POST['employeeDOB'];
          $DC = $_POST['employeeAddress'];
          $CV = $_POST['employeePosition'];
          $ID_TK = $_POST['employeeID_TK'];

          // Thực hiện cập nhật nhân viên
          $result = Employee::update($MaNV, $TenNV, $NS, $DC, $CV, $ID_TK);
         
          // Trả về kết quả
          if ($result) {
              echo json_encode(array('success' => true, 'message' => "Cập nhật nhân viên thành công!"));
          } else {
              echo json_encode(array('success' => false, 'message' => "Cập nhật nhân viên thất bại!"));
          }
      } else {
          // Trường hợp request không hợp lệ
          echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
      }
  }
  
}
