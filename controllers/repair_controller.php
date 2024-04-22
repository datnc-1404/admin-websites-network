
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
}
