
<?php
class Install {
    public $id;
    public $type_net;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $type_net, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->type_net = $type_net;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->status = $status;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM lapdatmoi');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Install($item['MaLR'], $item['LoaiMang'], $item['MaHD'], $item['MaKH'], $item['Duyet'] );
        }

        return $list;
    }

}   