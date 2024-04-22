<?php
class Repair {
    public $id;
    public $name_error;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $name_error, $id_contract, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->name_error = $name_error;
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
        $list[] = new Repair($item['MaSC'], $item['TenSuCo'], $item['MaHD'], $item['MaKH'], $item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

}   