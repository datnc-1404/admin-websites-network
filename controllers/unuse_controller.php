
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
}
