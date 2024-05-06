<?php
class Unuse {
    public $id;
    public $reason;
    public $date_founded;
    public $date_unuse;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $reason,$date_founded,$date_unuse, $id_contract, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->reason = $reason;
        $this->date_founded=$date_founded;
        $this->date_unuse=$date_unuse;
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
        $list[] = new Unuse($item['MaN'], $item['LyDo'],$item['NgayLap'],$item['NgayNgung'], $item['MaHD'], $item['MaKH'], $item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM ngung WHERE MaN = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }
}   