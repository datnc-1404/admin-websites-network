
<?php
require_once('controllers/base_controller.php');
require_once('models/install.php');
class InstallController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){
    $this->render('new_installation');
  }
  public function getInstallList(){
    $install = Install::all();
    echo json_encode(array('data' => $install));
  }
}
