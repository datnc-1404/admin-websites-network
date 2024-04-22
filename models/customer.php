
<?php
class Customer {
    public $id;
    public $name;
    public $born_date;
    public $address;
    public $phone;
    public $type_net;
    public $id_contract;

    function __construct($id, $name, $born_date, $address, $phone, $type_net, $id_contract)
    {
        $this->id = $id;
        $this->name = $name;
        $this->born_date = $born_date;
        $this->address = $address;
        $this->phone = $phone;
        $this->type_net = $type_net;
        $this->id_contract = $id_contract;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM khachhang');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Customer($item['MaKH'], $item['TenKH'], $item['NS'], $item['DC'], $item['SDT'], $item['LoaiMang'], $item['MaHD'] );
        }

        return $list;
    }

}   