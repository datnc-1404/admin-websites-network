
<?php
class Customer {
    public $id;
    public $name;
    public $born_date;
    public $address;
    public $phone;
    public $type_net;

    function __construct($id, $name, $born_date, $address, $phone, $type_net)
    {
        $this->id = $id;
        $this->name = $name;
        $this->born_date = $born_date;
        $this->address = $address;
        $this->phone = $phone;
        $this->type_net = $type_net;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM khachhang');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Customer($item['MaKH'], $item['TenKH'], $item['NS'], $item['DC'], $item['SDT'], $item['LoaiMang']);
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM khachhang WHERE MaKH = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }

}   