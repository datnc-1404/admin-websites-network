<?php
class Unuse {
    public $id;
    public $reason;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $reason, $id_contract, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->reason = $reason;
        $this->id_contract = $id_contract;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->status = $status;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM ngung');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Unuse($item['MaN'], $item['LyDo'], $item['MaHD'], $item['MaKH'], $item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

}   