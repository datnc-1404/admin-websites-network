<?php
class Relocation {
    public $id;
    public $location;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $location, $id_contract, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->location = $location;
        $this->id_contract = $id_contract;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->status = $status;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM didoi');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Relocation($item['MaDD'], $item['NoiDDDen'], $item['MaHD'], $item['MaKH'], $item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

}   