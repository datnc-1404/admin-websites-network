
<?php
class Contract {
    public $id;
    public $name;
    public $content_of_contract;
    public $id_customer;
    public $id_employee;

    function __construct($id, $name, $content_of_contract, $id_customer, $id_employee)
    {
        $this->id = $id;
        $this->name = $name;
        $this->content_of_contract = $content_of_contract;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM hopdong');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Contract($item['MaHD'], $item['TenHD'], $item['NDHD'], $item['MaKH'], $item['MaNV'] );
        }

        return $list;
    }

}   