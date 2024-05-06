<?php
    require_once('controllers/base_controller.php');
    require_once('models/ggmap.php');

class GgmapController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }
    public function index(){ 
        $this->render('ggmap');
    }
    public function getGgmapList(){
        $ggmap = Ggmap::all();
        echo json_encode(array('data' => $ggmap));
    }
}
?>