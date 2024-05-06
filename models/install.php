
<?php
class Install {
    public $id;
    public $type_net;
    public $id_contract;
    public $date_construction;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $type_net, $id_contract,$date_construction,$id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->type_net = $type_net;
        $this->id_contract=$id_contract;
        $this->date_construction=$date_construction;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->status = $status;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM lapdatmoi');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Install($item['MaLR'], $item['LoaiMang'], $item['MaHD'],$item['NgayThiCong'], $item['MaKH'],$item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM lapdatmoi WHERE MaLR = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }
}   