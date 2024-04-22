
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
}
