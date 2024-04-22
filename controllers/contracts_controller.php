
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
}
