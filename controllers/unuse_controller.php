
<?php
require_once('controllers/base_controller.php');

class UnuseController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }
  public function index(){
    $this->render('unuse');
  }
}
