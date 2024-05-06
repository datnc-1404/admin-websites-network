<?php
class Ggmap {
    public $index;

    function __construct($index)
    {
        $this->index = $index;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM khachhang');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Contract($item['NoiLapMang']);
        }

        return $list;
    }
}
?>