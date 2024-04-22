
<?php
require_once('controllers/base_controller.php');
require_once('models/relocation.php');
class RelocationController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){
    $this->render('relocation');
  }
  public function getRelocationList(){
    $relocation = Relocation::all();
    echo json_encode(array('data' => $relocation));
  }

}
